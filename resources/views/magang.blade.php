@extends('layouts.app')

@section('title', 'Periode Magang - TRPL Politeknik Meta Industri')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Periode Magang</h1>
                        <p class="mb-0">Daftar mahasiswa dan periode penempatan magang.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Periode Magang</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <section id="periode-magang" class="magang section">
        <div class="container">

            <div class="section-title">
                <h2>Periode Magang</h2>
                <p>Daftar mahasiswa dan lokasi penempatan magang per periode</p>
            </div>

            <div class="magang-toolbar mb-4">
                <input id="magangSearch" class="magang-search" type="search"
                    placeholder="Cari mahasiswa / NIM / tempat magang..." autocomplete="off" />
                @php
                    $totalStudents = $magangs->flatten()->count();
                    $totalPeriods = $magangs->count();
                @endphp
                <span id="magangCount" class="magang-count">Periode: {{ $totalPeriods }} • Total Mahasiswa: {{ $totalStudents }}</span>
            </div>

            <div class="magang-container" data-aos="fade-up">
                @forelse($magangs as $period => $students)
                    <div class="magang-period-block" id="block-{{ $loop->index }}">
                        <div class="magang-period-header d-flex justify-content-between align-items-center" onclick="togglePeriod({{ $loop->index }})">
                            <div>
                                <div class="magang-period-title">{{ strtoupper($period) }}</div>
                                <div class="magang-period-meta">Total Mahasiswa: {{ $students->count() }}</div>
                            </div>
                            <div class="toggle-icon">
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </div>

                        <div class="magang-period-content" id="content-{{ $loop->index }}">
                            <div class="table-responsive">
                                <table class="magang-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Nama Mahasiswa</th>
                                            <th>NIM</th>
                                            <th>Tempat Magang</th>
                                            <th>Lokasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($students as $student)
                                            <tr class="magang-row" data-search="{{ strtolower($student->student_name . ' ' . $student->nim . ' ' . $student->internship_place . ' ' . $student->location) }}">
                                                <td data-label="Nama">{{ $student->student_name }}</td>
                                                <td data-label="NIM">{{ $student->nim }}</td>
                                                <td data-label="Tempat Magang">{{ $student->internship_place }}</td>
                                                <td data-label="Lokasi">{{ $student->location ?? '-' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-5" style="opacity:0.7;">
                        <i class="bi bi-calendar-x mb-3 d-block" style="font-size: 3rem; color: #cbd5e1;"></i>
                        <p style="font-weight: 600; color: #64748b;">Belum ada data periode magang.</p>
                    </div>
                @endforelse
            </div>
            
            <div id="noResults" class="text-center py-5 d-none" style="opacity:0.7;">
                <i class="bi bi-search mb-3 d-block" style="font-size: 2rem; color: #cbd5e1;"></i>
                <p style="font-weight: 600; color: #64748b;">Tidak ada data yang cocok dengan pencarian Anda.</p>
            </div>
        </div>
    </section>

    <style>
        /* Modern Toolkit Styles (Aligning with Kurikulum style) */
        .magang-period-block {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid #f1f5f9;
        }

        .magang-period-header {
            padding: 20px 30px;
            cursor: pointer;
            background: #fff;
            user-select: none;
            transition: background 0.2s;
        }

        .magang-period-header:hover {
            background: #fcfdfe;
        }

        .magang-period-title {
            font-size: 1.1rem;
            font-weight: 800;
            color: #012970;
            font-family: 'Outfit', sans-serif;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }

        .magang-period-meta {
            font-size: 13px;
            color: #64748b;
            font-weight: 500;
        }

        .toggle-icon i {
            font-size: 1.2rem;
            color: #4154f1;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .magang-period-block.active .toggle-icon i {
            transform: rotate(180deg);
        }

        .magang-period-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease;
            opacity: 0;
            border-top: 1px solid #f1f5f9;
        }

        .magang-period-block.active .magang-period-content {
            max-height: 2000px; /* Large enough for tables */
            opacity: 1;
        }

        /* Search Toolbar */
        .magang-toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .magang-search {
            flex-grow: 1;
            padding: 15px 25px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            outline: none;
            transition: all 0.3s;
            font-size: 0.95rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.02);
        }

        .magang-search:focus {
            border-color: #4154f1;
            box-shadow: 0 5px 15px rgba(65, 84, 241, 0.1);
        }

        .magang-count {
            background: #f1f5f9;
            padding: 12px 22px;
            border-radius: 12px;
            font-weight: 700;
            color: #475569;
            font-size: 13px;
        }

        /* Table Styles (Matching Kurikulum) */
        .magang-table {
            width: 100%;
            border-collapse: collapse;
        }

        .magang-table thead tr th {
            background: #f8fafc;
            padding: 15px 30px;
            font-weight: 700;
            color: #64748b;
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 0.1em;
            border-bottom: 2px solid #f1f5f9;
        }

        .magang-table tbody td {
            padding: 18px 30px;
            vertical-align: middle;
            color: #334155;
            border-bottom: 1px solid #f1f5f9;
            font-size: 15px;
        }

        .magang-table tbody tr:hover {
            background-color: #fcfdfe;
        }

        .magang-table tbody tr td:first-child {
            font-weight: 700;
            color: #012970;
        }

        @media (max-width: 768px) {
            .magang-table thead { display: none; }
            .magang-table tbody tr {
                display: block;
                padding: 15px 20px;
                border-bottom: 1px solid #f1f5f9;
            }
            .magang-table tbody td {
                display: block;
                padding: 8px 0;
                border: none;
                text-align: right;
                position: relative;
                font-size: 14px;
            }
            .magang-table tbody td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                font-weight: 700;
                color: #94a3b8;
                text-transform: uppercase;
                font-size: 10px;
            }
            .magang-period-header { padding: 15px 20px; }
        }
    </style>
@endsection

@section('extra-js')
<script>
    // Manual Toggle Function (Reliable across browsers/templates)
    function togglePeriod(id) {
        const block = document.getElementById('block-' + id);
        block.classList.toggle('active');
    }

    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('magangSearch');
        const blocks = document.querySelectorAll('.magang-period-block');
        const noResults = document.getElementById('noResults');

        // Open first block by default
        if (blocks.length > 0) {
            blocks[0].classList.add('active');
        }

        if (searchInput) {
            searchInput.addEventListener('input', function(e) {
                const query = e.target.value.toLowerCase().trim();
                let visibleTotalCount = 0;

                blocks.forEach(block => {
                    const rows = block.querySelectorAll('.magang-row');
                    let visibleRowsCount = 0;

                    rows.forEach(row => {
                        const searchText = (row.getAttribute('data-search') || '').toLowerCase();
                        if (searchText.includes(query)) {
                            row.style.display = '';
                            visibleRowsCount++;
                            visibleTotalCount++;
                        } else {
                            row.style.display = 'none';
                        }
                    });

                    if (visibleRowsCount === 0) {
                        block.style.display = 'none';
                    } else {
                        block.style.display = '';
                        // Auto-expand if searching
                        if (query.length > 1) {
                            block.classList.add('active');
                        }
                    }
                });

                if (visibleTotalCount === 0) {
                    noResults.classList.remove('d-none');
                } else {
                    noResults.classList.add('d-none');
                }
            });
        }
    });
</script>
@endsection
