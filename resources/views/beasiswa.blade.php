@extends('layouts.app')

@section('title', 'Beasiswa - TRPL Politeknik Meta Industri')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Beasiswa</h1>
                        <p class="mb-0">Program bantuan pendidikan untuk mahasiswa berprestasi dan kurang mampu.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Beasiswa</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <section id="beasiswa" class="beasiswa section">
        <div class="container" data-aos="fade-up">

            <div class="section-title text-center">
                <h2>Program Beasiswa Prodi Teknologi Rekayasa Perangkat Lunak</h2>
                <p><strong>100% Mahasiswa Baru Pasti Dapat Beasiswa</strong></p>
            </div>

            <div class="beasiswa-wrap">
                <div class="beasiswa-tabs">
                    <button class="beasiswa-tab active" data-target="karyawan">Program Beasiswa Kelas
                        Karyawan</button>
                    <button class="beasiswa-tab" data-target="reguler">Program Beasiswa Kelas Reguler</button>
                </div>

                <!-- Karyawan -->
                <div class="beasiswa-panel active" id="karyawan">
                    @foreach($beasiswas->where('type', 'Karyawan') as $beasiswa)
                    <div class="beasiswa-card">
                        <h3>{{ $beasiswa->name }}</h3>
                        <p>{{ $beasiswa->description }}</p>
                        @if($beasiswa->provider != 'Politeknik Meta Industri')
                        <p><strong>Provider:</strong> {{ $beasiswa->provider }}</p>
                        @endif
                        <p><strong>Persyaratan:</strong> {{ $beasiswa->requirements }}</p>
                    </div>
                    @endforeach
                </div>

                <!-- Reguler -->
                <div class="beasiswa-panel" id="reguler">
                    @foreach($beasiswas->where('type', 'Reguler') as $beasiswa)
                    <div class="beasiswa-card">
                        <h3>{{ $beasiswa->name }}</h3>
                        <p>{{ $beasiswa->description }}</p>
                        <p><strong>Persyaratan:</strong> {{ $beasiswa->requirements }}</p>
                    </div>
                    @endforeach
                </div>

                <div class="beasiswa-cta">
                    <a class="btn-getstarted" href="https://politeknikmeta.ac.id" target="_blank" rel="noopener">
                        Klik Link Pendaftaran Beasiswa Prodi TRPL
                    </a>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('extra-js')
<script>
    // tab switch (pure JS, ringan)
    document.querySelectorAll('.beasiswa-tab').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.beasiswa-tab').forEach(b => b.classList.remove('active'));
            document.querySelectorAll('.beasiswa-panel').forEach(p => p.classList.remove('active'));
            btn.classList.add('active');
            document.getElementById(btn.dataset.target).classList.add('active');
        });
    });
</script>
@endsection
