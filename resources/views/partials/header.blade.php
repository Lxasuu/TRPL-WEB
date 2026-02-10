<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid px-4 position-relative d-flex align-items-center">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="/assets/img/logo-meta copy.png" alt="">
      <h1 class="sitename"></h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home<br></a></li>
        <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">Tentang</a></li>
        <li><a href="{{ url('/kurikulum') }}" class="{{ request()->is('kurikulum') ? 'active' : '' }}">Kurikulum</a></li>
        <li><a href="{{ url('/karya-mahasiswa') }}" class="{{ request()->is('karya-mahasiswa') ? 'active' : '' }}">Karya Mahasiswa</a></li>
        <li><a href="{{ url('/magang') }}" class="{{ request()->is('magang') ? 'active' : '' }}">Magang</a></li>
        <li><a href="{{ url('/dosen') }}" class="{{ request()->is('dosen') ? 'active' : '' }}">Dosen</a></li>
        <li><a href="{{ url('/beasiswa') }}" class="{{ request()->is('beasiswa') ? 'active' : '' }}">Beasiswa</a></li>
        <li><a href="{{ url('/kontak') }}" class="{{ request()->is('kontak') ? 'active' : '' }}">Kontak</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="btn-getstarted flex-md-shrink-0" href="https://pmb-mip.politeknikmeta.ac.id/login">Daftar Sekarang</a>

  </div>
</header>
