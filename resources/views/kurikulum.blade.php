@extends('layouts.app')

@section('title', 'Kurikulum - TRPL Politeknik Meta Industri')

@section('body-class', 'kurikulum-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Kurikulum & Sertifikasi</h1>
                        <p class="mb-0">Kurikulum yang disusun berdasarkan standar industri dan kebutuhan pasar kerja global.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Kurikulum</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Services Section (Kurikulum) -->
    <section id="services" class="services section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative">
                        <i class="bi bi-code-square icon"></i>
                        <h3>Pemrograman Berorientasi Objek</h3>
                        <p>Penguasaan konsep fundamental Java, C#, serta implementasi design patterns dalam
                            pengembangan produk.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item item-orange position-relative">
                        <i class="bi bi-globe icon"></i>
                        <h3>Pengembangan Perangkat Lunak Web</h3>
                        <p>Membangun aplikasi web modern menggunakan ekosistem Fullstack (React, Node.js, Next.js)
                            yang scalable.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                        <i class="bi bi-database icon"></i>
                        <h3>Basis Data Terdistribusi</h3>
                        <p>Manajemen data skala besar dengan PostgreSQL dan MongoDB untuk mendukung performa sistem
                            yang optimal.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-red position-relative">
                        <i class="bi bi-phone icon"></i>
                        <h3>Mobile App Development</h3>
                        <p>Pembuatan aplikasi mobile lintas platform dengan Flutter dan Kotlin yang mengutamakan
                            UI/UX interaktif.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item item-indigo position-relative">
                        <i class="bi bi-shield-check icon"></i>
                        <h3>Software Quality Assurance</h3>
                        <p>Menjamin kualitas kode melalui automated testing, continuous integration, dan security
                            auditing.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item item-pink position-relative">
                        <i class="bi bi-cpu icon"></i>
                        <h3>Kecerdasan Buatan (AI)</h3>
                        <p>Implementasi Machine Learning dan Data Science untuk solusi cerdas berbasis data
                            menggunakan Python.</p>
                    </div>
                </div><!-- End Service Item -->
            </div>
        </div>
    </section><!-- /Services Section -->

    <!-- Features Section (Sertifikasi) -->
    <section id="features" class="features section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Sertifikasi Global</h2>
            <p>Setiap lulusan dibekali dengan sertifikasi internasional untuk meningkatkan daya saing.</p>
        </div>
        <div class="container">
            <div class="row gy-5">
                <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="100">
                    <img src="/assets/img/features.png" class="img-fluid" alt="">
                </div>
                <div class="col-xl-6 d-flex">
                    <div class="row align-self-center gy-4">
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-patch-check"></i>
                                <h3>Cisco Networking</h3>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-patch-check"></i>
                                <h3>Oracle Database</h3>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-patch-check"></i>
                                <h3>AWS Cloud</h3>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-patch-check"></i>
                                <h3>Microsoft Azure</h3>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-patch-check"></i>
                                <h3>Google Analytics</h3>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-patch-check"></i>
                                <h3>Red Hat Linux</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Features Section -->

    <section id="kurikulum" class="kurikulum section">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Kurikulum</h2>
                <p>Daftar Mata Kuliah per Semester</p>
            </div>

            @php
                $allCourses = $mataKuliahs->flatten();
                $totalMK = $allCourses->count();
                $totalSksTeori = $allCourses->sum('sks_teori');
                $totalSksPraktek = $allCourses->sum('sks_praktek');
                $totalSks = $allCourses->sum('sks');
            @endphp

            <div class="kurikulum-summary">
                <strong>Teknologi Rekayasa Perangkat Lunak</strong><br>
                Total mata kuliah: <strong>{{ $totalMK }}</strong> |
                Total SKS Teori: <strong>{{ $totalSksTeori }}</strong> |
                Total SKS Praktek: <strong>{{ $totalSksPraktek }}</strong> |
                Total SKS: <strong>{{ $totalSks }}</strong>
            </div>

            <div class="kurikulum-container">
                @foreach($mataKuliahs as $semester => $courses)
                <div class="semester-accordion-item" id="semester-block-{{ $semester }}">
                    <div class="semester-header d-flex justify-content-between align-items-center" onclick="toggleSemester({{ $semester }})">
                        <div class="header-content">
                            <div class="semester-title">SEMESTER {{ $semester }}</div>
                            <div class="semester-meta">Total MK: {{ $courses->count() }} | Total SKS: {{ $courses->sum('sks') }}</div>
                        </div>
                        <div class="toggle-indicator">
                            <i class="bi bi-plus-lg"></i>
                        </div>
                    </div>
                    
                    <div class="semester-content">
                        <div class="table-responsive">
                            <table class="kurikulum-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>SKS</th>
                                        <th>Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($courses as $mk)
                                    <tr>
                                        <td class="kurikulum-kode" data-label="Kode">{{ $mk->kode }}</td>
                                        <td data-label="Mata Kuliah">{{ $mk->nama }}</td>
                                        <td class="kurikulum-sks" data-label="SKS">{{ $mk->sks }}</td>
                                        <td data-label="Kategori">{{ $mk->category }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
        .kurikulum-container {
            margin-top: 30px;
        }

        .semester-accordion-item {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid #f1f5f9;
        }

        .semester-accordion-item:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transform: translateY(-2px);
        }

        .semester-header {
            padding: 25px 30px;
            cursor: pointer;
            background: #fff;
            user-select: none;
            transition: background 0.2s;
        }

        .semester-header:hover {
            background: #f8fafc;
        }

        .semester-title {
            font-size: 1.2rem;
            font-weight: 800;
            color: #012970;
            font-family: 'Outfit', sans-serif;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }

        .semester-meta {
            font-size: 13px;
            color: #64748b;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        .toggle-indicator i {
            font-size: 1.4rem;
            color: #4154f1;
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .semester-accordion-item.active .toggle-indicator i {
            color: #ff4917;
            transform: rotate(180deg);
        }

        .semester-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.4s ease;
            opacity: 0;
            background: #fff;
        }

        .semester-accordion-item.active .semester-content {
            max-height: 2000px; /* High enough to fit any table */
            opacity: 1;
            border-top: 1px solid #f1f5f9;
        }

        .kurikulum-table {
            width: 100%;
            border-collapse: collapse;
        }

        .kurikulum-table thead th {
            background: #f8fafc;
            padding: 15px 30px;
            color: #64748b;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 1px;
            border-bottom: 2px solid #f1f5f9;
        }

        .kurikulum-table tbody td {
            padding: 20px 30px;
            color: #334155;
            border-bottom: 1px solid #f1f5f9;
            font-size: 0.95rem;
        }

        .kurikulum-table tbody tr:last-child td {
            border-bottom: none;
        }

        .kurikulum-kode {
            font-weight: 700;
            color: #4154f1 !important;
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.85rem !important;
        }

        .kurikulum-sks {
            font-weight: 700;
            text-align: center;
        }

        @media (max-width: 768px) {
            .kurikulum-table thead {
                display: none;
            }
            .kurikulum-table tbody tr {
                display: block;
                padding: 20px;
                border-bottom: 1px solid #f1f5f9;
            }
            .kurikulum-table tbody td {
                display: block;
                padding: 10px 0;
                text-align: right;
                border: none;
                position: relative;
                font-size: 14px;
            }
            .kurikulum-table tbody td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                font-weight: 800;
                color: #94a3b8;
                text-transform: uppercase;
                font-size: 10px;
            }
            .semester-header {
                padding: 20px;
            }
        }
    </style>

    <script>
        function toggleSemester(id) {
            const block = document.getElementById('semester-block-' + id);
            const icon = block.querySelector('.toggle-indicator i');
            
            // Close other semesters and reset their icons
            const allBlocks = document.querySelectorAll('.semester-accordion-item');
            allBlocks.forEach(b => {
                if (b.id !== 'semester-block-' + id) {
                    b.classList.remove('active');
                    const otherIcon = b.querySelector('.toggle-indicator i');
                    if (otherIcon) {
                        otherIcon.classList.remove('bi-dash-lg');
                        otherIcon.classList.add('bi-plus-lg');
                    }
                }
            });

            block.classList.toggle('active');
            
            // Swap icon
            if (block.classList.contains('active')) {
                icon.classList.remove('bi-plus-lg');
                icon.classList.add('bi-dash-lg');
            } else {
                icon.classList.remove('bi-dash-lg');
                icon.classList.add('bi-plus-lg');
            }
        }

        // Open Semester 1 by default
        document.addEventListener('DOMContentLoaded', () => {
            const sem1 = document.getElementById('semester-block-1');
            if (sem1) {
                sem1.classList.add('active');
                const icon = sem1.querySelector('.toggle-indicator i');
                if (icon) {
                    icon.classList.remove('bi-plus-lg');
                    icon.classList.add('bi-dash-lg');
                }
            }
        });
    </script>
@endsection
