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
                @php
                    $imageUrl = str_starts_with($dosen->image_path, 'assets/') 
                        ? asset($dosen->image_path) 
                        : Storage::url($dosen->image_path);
                @endphp
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ $imageUrl }}" class="img-fluid" alt="{{ $dosen->name }}">
                            @if($dosen->social_links)
                            <div class="social">
                                @foreach($dosen->social_links as $platform => $url)
                                    @if($url)
                                        <a href="{{ $url }}"><i class="bi bi-{{ strtolower($platform) == 'twitter-x' ? 'twitter-x' : (strtolower($platform) == 'linkedin' ? 'linkedin' : strtolower($platform)) }}"></i></a>
                                    @endif
                                @endforeach
                            </div>
                            @endif
                        </div>
                        <div class="member-info">
                            <h4>{{ $dosen->name }}</h4>
                            <span>{{ $dosen->title }}</span>
                            <div class="bio-content">{!! $dosen->bio !!}</div>
                        </div>
                    </div>
                </div><!-- End Team Member -->
                @endforeach
            </div>
        </div>
    </section><!-- /Team Section -->
@endsection
