@extends('layouts.app')

@section('title', 'Tentang Kami - TRPL Politeknik Meta Industri')

@section('body-class', 'about-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Tentang Kami</li>
                </ol>
            </div>
        </nav>
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Tentang Kami</h1>
                        <p class="mb-0">Mengenal lebih dekat Program Studi Teknologi Rekayasa Perangkat Lunak.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="content">
                        <h3>Profil Program Studi</h3>
                        <h2>Teknologi Rekayasa Perangkat Lunak</h2>
                        <p>
                            Program Studi Teknologi Rekayasa Perangkat Lunak (TRPL) Politeknik Meta Industri
                            merupakan program pendidikan vokasi yang berfokus pada pengembangan perangkat lunak
                            berbasis kebutuhan industri. Program ini dirancang untuk menghasilkan lulusan yang
                            kompeten dalam analisis, perancangan, pengembangan, pengujian, serta pemeliharaan
                            perangkat lunak dengan menerapkan standar dan teknologi terkini.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- /About Section -->

    <!-- Values Section -->
    <section id="values" class="values section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Visi, Misi & Tujuan</h2>
            <p>Landasan nilai dan arah tujuan program studi kami<br></p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img src="assets/img/values-1.png" class="img-fluid" alt="">
                        <h3>Visi</h3>
                        <p style="text-align: justify;">Menjadi Program Studi Sarjaan Terapan Teknologi Rekayasa
                            Perangkat Lunak yang unggul dan inovatif dalam bidang industri manufaktur di Jawa Barat
                            pada tahun 2026.</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <img src="assets/img/values-2.png" class="img-fluid" alt="">
                        <h3>Misi</h3>
                        <p style="text-align: justify;">Menyelenggarakan pendidikan vokasi yang berkualitas dalam
                            bidang rekayasa perangkat lunak dengan fokus pada kebutuhan industri manufaktur.</p>
                        <p style="text-align: justify;">Berperan aktif untuk berinovasi dibidang teknologi rekayasa
                            perangkat lunak melalui penelitian terapan guna menghasilkan inovasi terbarukan di dunia
                            industri manufaktur.</p>
                        <p style="text-align: justify;">Berperan aktif dalam penerapan teknologi rekayasa perangkat
                            lunak melalui kegiatan pengabdian masyarakat untuk mewujudkan kesejahteraan masyarakat.
                        </p>
                        <p style="text-align: justify;">Menjalin kerjasama dengan berbagai institusi pendidikan,
                            pemerintah, and industri.</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <img src="assets/img/values-3.png" class="img-fluid" alt="">
                        <h3>Tujuan</h3>
                        <p style="text-align: justify;">Menghasilkan lulusan yang memiliki kompetensi dibidang
                            teknologi rekayasa perangkat lunak yang memiliki daya saing, kemandirian, berakhlak
                            luhur dan mampu berkompetisi di tingkat nasional dan internasional dengan menerapkan
                            budaya META.</p>
                        <p style="text-align: justify;">Menghasilkan karya dan produk dibidang teknologi rekayasa
                            perangkat lunak berbasis sosial yang berdaya saing, tepat guna dan inovatif melalui
                            proses penelitian yang berkesinambungan dengan menerapkan nilai budaya META.</p>
                        <p style="text-align: justify;">Berkontribusi aktif dalam pemberdayaan masyarakat melalui
                            pengembangan produk dan kegiatan pengabdian masyarakat dibidang teknologi rekayasa
                            perangkat lunak berbasis industri manufaktur secara berkesinambungan bagi peningkatan
                            mutu kehidupan masyarakat dengan menerapkan nilai budaya META.</p>
                        <p style="text-align: justify;">Melaksanakan kerjasama dengan berbagai pihak dalam upaya
                            mengembangkan dan meningkatkan mutu pendidikan dan penelitian dalam bidang teknologi
                            rekayasa perangkat lunak berbasis industri manufaktur dengan menerapkan nilai budaya
                            META.</p>
                    </div>
                </div><!-- End Card Item -->
            </div>
        </div>
    </section><!-- /Values Section -->

    <section id="akreditasi" class="akreditasi section">
        <div class="container" data-aos="fade-up">

            <div class="section-title text-center">
                <h2>Akreditasi</h2>
                <p>Status Akreditasi Program Studi</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <img src="assets/img/sertifikat-ban-pt.jpg"
                        alt="Sertifikat Akreditasi BAN-PT Prodi Teknologi Rekayasa Perangkat Lunak"
                        class="img-fluid akreditasi-img">

                    <div class="mt-3">
                        <h4>Akreditasi B</h4>
                        <p>
                            Program Studi <strong>Teknologi Rekayasa Perangkat Lunak</strong><br>
                            Politeknik Meta Industri Cikarang<br>
                            Berlaku: <strong>1 September 2022 – 31 Agustus 2024</strong>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
