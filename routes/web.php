<?php

use Illuminate\Support\Facades\Route;

use App\Models\Stat;
use App\Models\Dosen;
use App\Models\MataKuliah;
use App\Models\KaryaMahasiswa;
use App\Models\PenempatanMagang;
use App\Models\Beasiswa;
use App\Models\Faq;

Route::get('/', function () {
    $stats = Stat::all();
    $faqs = Faq::orderBy('order')->get();
    return view('welcome', compact('stats', 'faqs'));
});

Route::get('/about', function () {
    $stats = Stat::all();
    $dosens = Dosen::where('is_active', true)->take(4)->get();
    return view('about', compact('stats', 'dosens'));
});

Route::get('/kurikulum', function () {
    $mataKuliahs = MataKuliah::all()->groupBy('semester');
    return view('kurikulum', compact('mataKuliahs'));
});

Route::get('/karya-mahasiswa', function () {
    $karyas = KaryaMahasiswa::all();
    return view('karya-mahasiswa', compact('karyas'));
});

Route::get('/magang', function () {
    $magangs = PenempatanMagang::all();
    return view('magang', compact('magangs'));
});

Route::get('/dosen', function () {
    $dosens = Dosen::where('is_active', true)->get();
    return view('dosen', compact('dosens'));
});

Route::get('/beasiswa', function () {
    $beasiswas = Beasiswa::all();
    return view('beasiswa', compact('beasiswas'));
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

Route::get('/service-details', function () {
    return view('service-details');
});

Route::get('/starter-page', function () {
    return view('starter-page');
});
