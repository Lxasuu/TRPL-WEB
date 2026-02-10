@extends('layouts.app')

@section('title', 'Kurikulum - TRPL Politeknik Meta Industri')

@section('body-class', 'kurikulum-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Kurikulum</li>
                </ol>
            </div>
        </nav>
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Kurikulum & Sertifikasi</h1>
                        <p class="mb-0">Kurikulum yang disusun berdasarkan standar industri dan kebutuhan pasar
                            kerja global.</p>
                    </div>
                </div>
            </div>
        </div>
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
                    <img src="assets/img/features.png" class="img-fluid" alt="">
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

            <div class="kurikulum-summary">
                <strong>Teknologi Rekayasa Perangkat Lunak</strong><br>
                Total mata kuliah: <strong>58</strong> |
                Total SKS Teori: <strong>77</strong> |
                Total SKS Praktek: <strong>75</strong> |
                Total SKS: <strong>152</strong>
            </div>

            @foreach($mataKuliahs as $semester => $courses)
            <div class="semester-block semester-{{ $semester }}">
                <div class="semester-title">SEMESTER {{ $semester }}</div>
                <div class="semester-meta">Total MK: {{ $courses->count() }} | Total SKS: {{ $courses->sum('sks') }}</div>

                <div class="table-responsive">
                    <table class="kurikulum-table">
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
                                <td class="kurikulum-kode">{{ $mk->kode }}</td>
                                <td>{{ $mk->nama }}</td>
                                <td class="kurikulum-sks">{{ $mk->sks }}</td>
                                <td>{{ $mk->category }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
