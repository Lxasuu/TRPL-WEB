@extends('layouts.app')

@section('title', 'Karya Mahasiswa - TRPL Politeknik Meta Industri')

@section('body-class', 'karya-mahasiswa-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Karya Mahasiswa</li>
                </ol>
            </div>
        </nav>
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Karya Mahasiswa</h1>
                        <p class="mb-0">Showcase hasil kreativitas dan inovasi mahasiswa TRPL dalam membangun solusi
                            teknologi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
        <div class="container">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".filter-web">Web App</li>
                    <li data-filter=".filter-mobile">Mobile App</li>
                    <li data-filter=".filter-ai">AI & IoT</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($karyas as $karya)
                    @php
                        $imageUrl = str_starts_with($karya->image_path, 'assets/') 
                            ? asset($karya->image_path) 
                            : Storage::url($karya->image_path);
                    @endphp
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ strtolower(explode(' ', $karya->category)[0] ?? 'web') }}">
                        <div class="portfolio-content h-100">
                            <img src="{{ $imageUrl }}" class="img-fluid" alt="{{ $karya->title }}">
                            <div class="portfolio-info">
                                <h4>{{ $karya->title }}</h4>
                                <p>{{ $karya->category }} - {{ $karya->student_name }}</p>
                                <a href="{{ $imageUrl }}" title="{{ $karya->title }}"
                                    data-gallery="portfolio-gallery-{{ strtolower(explode(' ', $karya->category)[0] ?? 'web') }}" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="{{ url('/portfolio-details') }}" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->
                    @endforeach
                </div><!-- End Portfolio Container -->
            </div>
        </div>
    </section><!-- /Portfolio Section -->
@endsection
