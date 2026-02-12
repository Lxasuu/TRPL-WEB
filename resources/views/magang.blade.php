@extends('layouts.app')

@section('title', 'Penempatan Magang - TRPL Politeknik Meta Industri')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Penempatan Magang</li>
                </ol>
            </div>
        </nav>
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Penempatan Magang</h1>
                        <p class="mb-0">Daftar mahasiswa dan lokasi penempatan magang.</p>
                    </div>
                </div>
            </div>
        </div>
    <style>
        /* Force accordion body to be visible when expanded */
        .accordion-collapse.show {
            display: block !important;
            height: auto !important;
            opacity: 1 !important;
            visibility: visible !important;
        }
        .accordion-collapse.collapsing {
            display: block;
            opacity: 1 !important;
            visibility: visible !important;
        }
        /* Ensure content is not hidden by overflow during transition if possible, 
           though bootstrap needs overflow:hidden for height transition. 
           We just ensure opacity is 1. */
        .accordion-body {
            opacity: 1 !important;
            visibility: visible !important;
        }
    </style>
    </div><!-- End Page Title -->

    <section id="penempatan-magang" class="magang section">
        <div class="container">

            <div class="section-title">
                <h2>Penempatan Magang</h2>
                <p>Daftar mahasiswa dan lokasi penempatan magang</p>
            </div>

            <div class="magang-toolbar">
                <input id="magangSearch" class="magang-search" type="search"
                    placeholder="Cari perusahaan / mahasiswa / NIM..." />
                @php
                    $totalCompanies = $magangs->count();
                    $totalStudents = $magangs->sum(function($magang) {
                        return is_array($magang->student_list) ? count($magang->student_list) : 0;
                    });
                @endphp
                <span id="magangCount" class="magang-count">Perusahaan: {{ $totalCompanies }} • Mahasiswa: {{ $totalStudents }}</span>
            </div>

            <div class="accordion magang-accordion" id="magangAccordion">
                @forelse($magangs as $index => $magang)
                    @php
                        $students = is_array($magang->student_list) ? $magang->student_list : [];
                        $studentCount = count($students);
                        $companyId = 'company-' . $index;
                        $collapseId = 'collapse-' . $index;
                        // Searchable text string for JS filtering
                        $searchText = strtolower(
                            $magang->company_name . ' ' . 
                            $magang->location . ' ' . 
                            collect($students)->pluck('nama')->join(' ') . ' ' . 
                            collect($students)->pluck('nim')->join(' ')
                        );
                    @endphp
                    <div class="accordion-item magang-item" data-search="{{ $searchText }}">
                        <h2 class="accordion-header" id="{{ $companyId }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#{{ $collapseId }}" aria-expanded="false" aria-controls="{{ $collapseId }}">
                                {{ $magang->company_name }}
                                @if($magang->location)
                                    <span style="opacity:.7;font-weight:500; margin-left: 5px;">({{ $magang->location }})</span>
                                @endif
                            </button>
                        </h2>
                        <div id="{{ $collapseId }}" class="accordion-collapse collapse" aria-labelledby="{{ $companyId }}"
                            data-bs-parent="#magangAccordion">
                            <div class="accordion-body">
                                <div
                                    style="display:flex;justify-content:space-between;gap:10px;flex-wrap:wrap;margin-bottom:10px;">
                                    <div><strong>Total mahasiswa:</strong> {{ $studentCount }}</div>
                                    <div style="opacity:.75;"><strong>Periode:</strong> {{ $magang->academic_year ?? '-' }}</div>
                                </div>

                                <div class="table-responsive">
                                    <table class="magang-table">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>NIM</th>
                                                <th>Divisi</th>
                                                <th>Periode</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($students as $student)
                                                <tr>
                                                    <td data-label="Nama">{{ $student['nama'] ?? '-' }}</td>
                                                    <td data-label="NIM">{{ $student['nim'] ?? '-' }}</td>
                                                    <td data-label="Divisi">{{ $student['divisi'] ?? '-' }}</td>
                                                    <td data-label="Periode">{{ $student['periode'] ?? '-' }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4" style="padding:12px;opacity:.7;">Belum ada data mahasiswa.
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-4" style="opacity:0.7;">Data tidak ditemukan.</div>
                @endforelse
            </div>
            
            <div id="noResults" class="text-center py-4 d-none" style="opacity:0.7;">
                Tidak ada data yang cocok dengan pencarian Anda.
            </div>
        </div>
    </section>
@endsection

@section('extra-js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('magangSearch');
        const items = document.querySelectorAll('.magang-item');
        const noResults = document.getElementById('noResults');

        if (searchInput) {
            searchInput.addEventListener('input', function(e) {
                const query = e.target.value.toLowerCase();
                let visibleCount = 0;

                items.forEach(item => {
                    const searchText = item.getAttribute('data-search');
                    if (searchText.includes(query)) {
                        item.style.display = '';
                        visibleCount++;
                    } else {
                        item.style.display = 'none';
                    }
                });

                if (visibleCount === 0) {
                    noResults.classList.remove('d-none');
                } else {
                    noResults.classList.add('d-none');
                }
            });
        }
    });
</script>
@endsection
