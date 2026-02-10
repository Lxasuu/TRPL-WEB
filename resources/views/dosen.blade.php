@extends('layouts.app')

@section('title', 'Dosen - TRPL Politeknik Meta Industri')

@section('body-class', 'dosen-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Dosen</li>
                </ol>
            </div>
        </nav>
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Dosen Praktisi</h1>
                        <p class="mb-0">Belajar langsung dari para ahli dan praktisi berpengalaman di industri
                            teknologi informasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Page Title -->

    <!-- Team Section -->
    <section id="team" class="team section">
        <div class="container">
            <div class="row gy-4">
                @foreach($dosens as $dosen)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset($dosen->image_path) }}" class="img-fluid" alt="{{ $dosen->name }}">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>{{ $dosen->name }}</h4>
                            <span>{{ $dosen->title }}</span>
                            <p>{{ $dosen->bio }}</p>
                        </div>
                    </div>
                </div><!-- End Team Member -->
                @endforeach
            </div>
        </div>
    </section><!-- /Team Section -->
@endsection
