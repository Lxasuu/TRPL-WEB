@extends('layouts.app')

@section('title', 'Kontak - TRPL Politeknik Meta Industri')

@section('body-class', 'kontak-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Kontak</li>
                </ol>
            </div>
        </nav>
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Kontak Kami</h1>
                        <p class="mb-0">Punya pertanyaan? Kami siap membantu Anda. Hubungi kami melalui kanal di
                            bawah ini.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Alamat</h3>
                                <p>Kawasan Industri Jababeka</p>
                                <p>Cikarang, Bekasi, Jawa Barat</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Telepon</h3>
                                <p>+62 21 8983 0001</p>
                                <p>+62 811 2345 6789</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>trpl@politeknikmeta.ac.id</p>
                                <p>info@politeknikmeta.ac.id</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="500">
                                <i class="bi bi-clock"></i>
                                <h3>Jam Operasional</h3>
                                <p>Senin - Jumat</p>
                                <p>08:00 - 16:00 WIB</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="{{ url('/kontak') }}" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Nama Anda"
                                    required="">
                            </div>
                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Email Anda"
                                    required="">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subjek"
                                    required="">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Pesan"
                                    required=""></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <div class="loading">Memuat...</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>
                                <button type="submit">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div><!-- End Contact Form -->
            </div>
        </div>
    </section><!-- /Contact Section -->
@endsection
