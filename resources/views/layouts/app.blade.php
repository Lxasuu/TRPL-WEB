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
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

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
    /* Fixed Header Spacing Fixes */
    .page-title {
        padding-top: 100px !important;
        position: relative;
        background: linear-gradient(135deg, rgba(99, 102, 241, 0.05) 0%, rgba(255, 255, 255, 1) 100%) !important;
    }

    .page-title .heading {
        padding: 40px 0 20px 0 !important;
    }

    .page-title .breadcrumbs {
        padding: 15px 0 !important;
        background: rgba(0, 0, 0, 0.02);
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    /* Restrict hero padding to prevent large gap */
    .hero {
        padding-top: 120px !important;
    }

    /* WhatsApp Floating Button */
    .whatsapp-float {
        position: fixed;
        bottom: 30px;
        right: 80px;
        z-index: 9999;
        display: flex;
        align-items: center;
        background-color: #fff;
        color: #444 !important;
        padding: 6px 20px 6px 6px;
        border-radius: 50px;
        text-decoration: none;
        font-family: 'Outfit', sans-serif;
        font-weight: 500;
        font-size: 14px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.12);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .whatsapp-float:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        background-color: #fcfcfc;
    }
    .whatsapp-float i {
        background-color: #25d366;
        color: #fff;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        margin-right: 12px;
        box-shadow: 0 2px 8px rgba(37, 211, 102, 0.3);
    }
    @media (max-width: 768px) {
        .whatsapp-float {
            bottom: 20px;
            right: 70px;
            padding: 5px 15px 5px 5px;
            font-size: 13px;
        }
        .whatsapp-float i {
            width: 32px;
            height: 32px;
            font-size: 16px;
            margin-right: 8px;
        }
    }

    /* Blog Image Standardization */
    .recent-posts .post-img img {
        width: 100%;
        aspect-ratio: 16 / 9;
        object-fit: cover;
        object-position: center;
        display: block;
    }
    
    /* Ensure the container height matches */
    .recent-posts .post-item {
        display: flex;
        flex-direction: column;
    }
    
    .recent-posts .post-content {
        flex-grow: 1;
    }

    /* Karya Mahasiswa Image Standardization */
    .portfolio-content img {
        width: 100%;
        aspect-ratio: 3 / 2;
        object-fit: cover;
        object-position: center;
        display: block;
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
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

  <!-- WhatsApp Floating Button -->
  <a href="https://api.whatsapp.com/send/?phone=628111223738&text=Hai+PoltekMETA%2C+mau+tanya+dong%3F&type=phone_number&app_absent=0" class="whatsapp-float" target="_blank">
    <i class="bi bi-whatsapp"></i>
    <span>Tanya Politeknik Meta Industri</span>
  </a>

</body>

</html>
