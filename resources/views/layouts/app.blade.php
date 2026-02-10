<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'TRPL - Politeknik Meta Industri Cikarang')</title>
  <meta name="description"
    content="Program Studi Teknologi Rekayasa Perangkat Lunak - Politeknik Meta Industri Cikarang. Menghasilkan lulusan profesional di bidang rekayasa perangkat lunak.">
  <meta name="keywords"
    content="TRPL, Software Engineering, Politeknik Meta Industri, Cikarang, Kuliah IT, Rekayasa Perangkat Lunak">

  <!-- Favicons -->
  <link href="https://politeknikmeta.ac.id/favicon.ico" rel="icon">
  <link href="https://politeknikmeta.ac.id/favicon.ico" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- CSS Hotpatch for Header Bugs -->
  <style>
    .header {
        background-color: #ffffff !important;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05) !important;
        transition: all 0.4s ease !important;
    }
    .scrolled .header {
        background-color: rgba(255, 255, 255, 0.9) !important;
        backdrop-filter: blur(10px) !important;
        -webkit-backdrop-filter: blur(10px) !important;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.05) !important;
    }
    .page-title nav {
        padding-top: 120px !important;
    }
    /* Restrict hero padding to prevent large gap if needed */
    .hero {
        padding-top: 100px !important;
    }
  </style>
</head>

<body class="@yield('body-class', '')">

  @include('partials.header')

  <main class="main">
    @yield('content')
  </main>

  @include('partials.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
  <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // Initialize AOS
      if (typeof AOS !== 'undefined') {
        AOS.init({
          duration: 600,
          easing: 'ease-in-out',
          once: true,
          mirror: false
        });
      }

      // Initialize PureCounter
      if (typeof PureCounter !== 'undefined') {
        new PureCounter();
      }

      // Initialize GLightbox
      if (typeof GLightbox !== 'undefined') {
        const glightbox = GLightbox({
          selector: '.glightbox'
        });
      }
    });
  </script>

  @yield('extra-js')

</body>

</html>
