@extends('layouts.app')

@section('title', 'Starter Page - TRPL Politeknik Meta Industri')

@section('body-class', 'starter-page-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Starter Page</h1>
                        <p class="mb-0">Halaman dasar untuk pengembangan konten kustom.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Starter Page</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Starter Section</h2>
            <p>Extended Section Title</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <p>Gunakan halaman ini sebagai templat untuk halaman kustom Anda sendiri.</p>
        </div>

    </section><!-- /Starter Section Section -->
@endsection
