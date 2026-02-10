@extends('layouts.app')

@section('title', 'TRPL - Politeknik Meta Industri Cikarang')

@section('body-class', 'index-page')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Teknologi Rekayasa Perangkat Lunak</h1>
            <p data-aos="fade-up" data-aos-delay="100">Program Studi Sarjana Terapan</p>
            <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
              <a href="#pricing" class="btn-get-started">Daftar Sekarang <i class="bi bi-arrow-right"></i></a>
              <a href="https://www.youtube.com/watch?v=SEBV0KFypEw"
                class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i
                  class="bi bi-play-circle"></i><span>Tour Campus VIrtual</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Tentang Kami</h3>
              <h2>Teknologi Rekayasa Perangkat Lunak</h2>
              <p>
                Program Studi Teknologi Rekayasa Perangkat Lunak (TRPL) Politeknik Meta Industri merupakan program
                pendidikan vokasi yang berfokus pada pengembangan perangkat lunak berbasis kebutuhan industri. Program
                ini dirancang untuk menghasilkan lulusan yang kompeten dalam analisis, perancangan, pengembangan,
                pengujian, serta pemeliharaan perangkat lunak dengan menerapkan standar dan teknologi terkini.
              </p>
              <div class="text-center text-lg-start">
                <a href="{{ url('/about') }}"
                  class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Selengkapnya</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          @foreach($stats as $stat)
          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="{{ $stat->icon }} flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="{{ $stat->value }}" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>{{ $stat->label }}</p>
              </div>
            </div>
          </div><!-- End Stats Item -->
          @endforeach

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sertifikasi</h2>
        <p>Program Sertifikasi Global</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="/assets/img/features.png" class="img-fluid" alt="">
          </div>

          <div class="col-xl-6 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-patch-check"></i>
                  <h3>Cisco Networking</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-patch-check"></i>
                  <h3>Oracle Database</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-patch-check"></i>
                  <h3>AWS Cloud</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-patch-check"></i>
                  <h3>Microsoft Azure</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-patch-check"></i>
                  <h3>Google Analytics</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-patch-check"></i>
                  <h3>Red Hat Linux</h3>
                </div>
              </div><!-- End Feature Item -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Features Section -->

    <section id="alt-features" class="alt-features section">
      <div class="container">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Fasilitas</h2>
          <p>Fasilitas Pembelajaran</p>
        </div>

        <div class="row gy-5 align-items-center">

          <!-- KIRI: PENJELASAN -->
          <div class="col-xl-7" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6 icon-box">
                <i class="bi bi-pc-display-horizontal"></i>
                <div>
                  <h4>Lab Komputer High-Spec</h4>
                  <p>Laboratorium komputer dengan spesifikasi terkini.</p>
                </div>
              </div>

              <div class="col-md-6 icon-box">
                <i class="bi bi-book"></i>
                <div>
                  <h4>Perpustakaan Digital</h4>
                  <p>Akses buku digital dan jurnal ilmiah.</p>
                </div>
              </div>

              <div class="col-md-6 icon-box">
                <i class="bi bi-easel"></i>
                <div>
                  <h4>Smart Classroom</h4>
                  <p>Ruang kelas modern berbasis multimedia.</p>
                </div>
              </div>

              <div class="col-md-6 icon-box">
                <i class="bi bi-wifi"></i>
                <div>
                  <h4>Koneksi Internet Cepat</h4>
                  <p>Wi-Fi berkecepatan tinggi di seluruh area.</p>
                </div>
              </div>

              <div class="col-md-6 icon-box">
                <i class="bi bi-box-seam"></i>
                <div>
                  <h4>Software Berstandar Industri</h4>
                  <p>Oracle, Cisco, AWS, dan tools profesional.</p>
                </div>
              </div>

              <div class="col-md-6 icon-box">
                <i class="bi bi-people"></i>
                <div>
                  <h4>Area Kolaborasi</h4>
                  <p>Ruang diskusi dan kolaborasi tim.</p>
                </div>
              </div>

            </div>
          </div>

          <!-- KANAN: GAMBAR -->
          <div class="col-xl-5" data-aos="fade-up" data-aos-delay="300">
            <div class="facility-grid">

              <!-- besar -->
              <div class="facility-card big">
                <img src="/assets/img/Venue/Lab-Elektro-dan-Jaringan.jpg" alt="Smart Classroom">
                <div class="facility-overlay">
                  <h6>Lab Elektro Dan Jaringan</h6>
                  <p>Multimedia & interaktif</p>
                </div>
              </div>

              <!-- kecil 1 -->
              <div class="facility-card">
                <img src="/assets/img/Venue/Lab-Komputer-Industri-768x512.jpg" alt="Lab Komputer">
                <div class="facility-overlay">
                  <h6>Lab Komputer Industri</h6>
                  <p>PC High-Spec untuk praktik</p>
                </div>
              </div>

              <!-- kecil 2 -->
              <div class="facility-card">
                <img src="/assets/img/Venue/Lab-Optimasi.jpg" alt="Lab Optimasi">
                <div class="facility-overlay">
                  <h6>Lab Optimasi</h6>
                  <p>Akses jurnal & literatur</p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kurikulum</h2>
        <p>Teknologi Rekayasa Perangkat Lunak<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <i class="bi bi-code-square icon"></i>
              <h3>Pemrograman Berorientasi Objek</h3>
              <p>Penguasaan konsep fundamental Java, C#, serta implementasi design patterns dalam pengembangan produk.
              </p>
              <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <i class="bi bi-globe icon"></i>
              <h3>Pengembangan Perangkat Lunak Web</h3>
              <p>Membangun aplikasi web modern menggunakan ekosistem Fullstack (React, Node.js, Next.js) yang scalable.
              </p>
              <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-database icon"></i>
              <h3>Basis Data Terdistribusi</h3>
              <p>Manajemen data skala besar dengan PostgreSQL dan MongoDB untuk mendukung performa sistem yang optimal.
              </p>
              <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <i class="bi bi-phone icon"></i>
              <h3>Mobile App Development</h3>
              <p>Pembuatan aplikasi mobile lintas platform dengan Flutter dan Kotlin yang mengutamakan UI/UX interaktif.
              </p>
              <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item item-indigo position-relative">
              <i class="bi bi-shield-check icon"></i>
              <h3>Software Quality Assurance</h3>
              <p>Menjamin kualitas kode melalui automated testing, continuous integration, dan security auditing.</p>
              <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item item-pink position-relative">
              <i class="bi bi-cpu icon"></i>
              <h3>Kecerdasan Buatan (AI)</h3>
              <p>Implementasi Machine Learning dan Data Science untuk solusi cerdas berbasis data menggunakan Python.
              </p>
              <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Penerimaan</h2>
        <p>Jalur Pendaftaran Mahasiswa Baru<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-tem">
              <h3 style="color: #20c997;">Jalur Reguler</h3>
              <div class="icon">
                <i class="bi bi-person-badge" style="color: #20c997;"></i>
              </div>
              <ul>
                <li>Lulusan SMA/SMK/MA</li>
                <li>Tanpa Batas Usia</li>
                <li>Seleksi Berkas</li>
                <li>Ujian Potensi Akademik</li>
                <li>Wawancara</li>
              </ul>
              <a href="#" class="btn-buy">Daftar Sekarang</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-tem">
              <span class="featured">Favorit</span>
              <h3 style="color: #0dcaf0;">Jalur Beasiswa</h3>
              <div class="icon">
                <i class="bi bi-award" style="color: #0dcaf0;"></i>
              </div>
              <ul>
                <li>Prestasi Akademik/Non</li>
                <li>Beasiswa KIP-Kuliah</li>
                <li>Beasiswa Industri</li>
                <li>Beasiswa Yayasan</li>
                <li>Potongan Biaya Kuliah</li>
              </ul>
              <a href="{{ url('/beasiswa') }}" class="btn-buy">Info Beasiswa</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="pricing-tem">
              <h3 style="color: #fd7e14;">Jalur Karyawan</h3>
              <div class="icon">
                <i class="bi bi-briefcase" style="color: #fd7e14;"></i>
              </div>
              <ul>
                <li>Untuk Karyawan Aktif</li>
                <li>Waktu Kuliah Fleksibel</li>
                <li>Blended Learning</li>
                <li>Networking Industri</li>
                <li>Kurikulum Praktis</li>
              </ul>
              <a href="#" class="btn-buy">Daftar Kerja</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="pricing-tem">
              <h3 style="color: #0d6efd;">Jalur RPL</h3>
              <div class="icon">
                <i class="bi bi-journal-check" style="color: #0d6efd;"></i>
              </div>
              <ul>
                <li>Rekognisi Pembelajaran Lampau</li>
                <li>Konversi Pengalaman Kerja</li>
                <li>Mempersingkat Masa Studi</li>
                <li>Lulus Lebih Cepat</li>
                <li>Biaya Lebih Hemat</li>
              </ul>
              <a href="#" class="btn-buy">Info RPL</a>
            </div>
          </div><!-- End Pricing Item -->

        </div><!-- End pricing row -->

      </div>

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>F.A.Q</h2>
        <p>Frequently Asked Questions</p>
      </div><!-- End Section Title -->

      <div class="container">
        
        <!-- Live Search Bar -->
        <div class="row justify-content-center mb-5" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="faq-search-wrapper">
              <i class="bi bi-search"></i>
              <input type="text" id="faqSearchInput" placeholder="Cari pertanyaan atau kata kunci..." class="faq-search-input">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="faq-container" id="faqContainer">
              @foreach($faqs as $faq)
              <div class="faq-item {{ $loop->first ? 'faq-active' : '' }}" data-aos="fade-up" data-aos-delay="{{ 100 + $loop->index * 50 }}">
                <h3>{{ $faq->question }}</h3>
                <div class="faq-content">
                  <p>{{ $faq->answer }}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->
              @endforeach
              
              <!-- No Results Message -->
              <div id="faqNoResults" class="text-center py-5 d-none" style="opacity: 0.7;">
                <i class="bi bi-search mb-3 d-block" style="font-size: 2rem;"></i>
                <p>Maaf, kami tidak menemukan pertanyaan yang cocok.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <style>
        .faq-search-wrapper {
          position: relative;
          background: #ffffff;
          border: 1px solid #e2e8f0;
          border-radius: 16px;
          padding: 12px 24px;
          box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
          display: flex;
          align-items: center;
          transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
          max-width: 600px;
          margin: 0 auto;
        }

        .faq-search-wrapper:focus-within {
          box-shadow: 0 20px 25px -5px rgba(99, 102, 241, 0.1), 0 10px 10px -5px rgba(99, 102, 241, 0.04);
          transform: translateY(-2px);
          border-color: #6366f1;
        }

        .faq-search-wrapper i {
          color: #6366f1;
          font-size: 1.25rem;
          margin-right: 16px;
        }

        .faq-search-input {
          border: none;
          background: transparent;
          width: 100%;
          font-size: 1rem;
          outline: none;
          color: #1e293b;
          font-weight: 500;
        }

        .faq-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 25px;
        }

        .faq .faq-container .faq-item {
          background: #ffffff;
          border: 1px solid #e2e8f0;
          border-radius: 20px;
          padding: 35px 45px;
          transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
          cursor: pointer;
          position: relative;
          display: flex;
          flex-direction: column;
          height: 100%;
          overflow: hidden;
        }

        .faq .faq-container .faq-item:hover {
          border-color: #6366f1;
          box-shadow: 0 10px 20px -5px rgba(99, 102, 241, 0.1);
        }

        .faq .faq-container .faq-item.faq-active {
          border-color: #6366f1;
          background: linear-gradient(135deg, #ffffff 0%, #f8faff 100%);
          box-shadow: 0 25px 30px -10px rgba(99, 102, 241, 0.12);
        }

        .faq .faq-container .faq-item h3 {
          font-family: 'Outfit', sans-serif;
          font-size: 1.125rem;
          font-weight: 700;
          color: #1e293b;
          margin: 0;
          padding-right: 50px;
          transition: color 0.3s ease;
          line-height: 1.5;
        }

        .faq .faq-container .faq-item.faq-active h3 {
          color: #4f46e5;
        }
        
        .faq .faq-container .faq-item .faq-content {
          max-height: 0;
          overflow: hidden;
          transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
          opacity: 0;
        }

        .faq .faq-container .faq-item.faq-active .faq-content {
          max-height: 500px;
          opacity: 1;
          padding-top: 25px;
        }

        .faq-content p {
          font-size: 0.95rem;
          line-height: 1.7;
          color: #475569;
          margin: 0;
        }

        .faq-toggle {
          position: absolute;
          right: 35px;
          top: 40px;
          font-size: 1rem;
          color: #94a3b8;
          transition: all 0.3s ease;
          display: flex;
          align-items: center;
          justify-content: center;
          width: 36px;
          height: 36px;
          border-radius: 50%;
          background: #f1f5f9;
        }

        .faq-item:hover .faq-toggle {
          color: #6366f1;
          background: #eef2ff;
        }

        .faq .faq-container .faq-item.faq-active .faq-toggle {
          transform: rotate(180deg);
          color: #ffffff;
          background: #6366f1;
        }

        /* Subtle indicator */
        .faq .faq-container .faq-item::before {
          content: '';
          position: absolute;
          left: 0;
          top: 0;
          height: 100%;
          width: 0;
          background: #6366f1;
          transition: width 0.3s ease;
          z-index: 1;
        }

        .faq .faq-container .faq-item.faq-active::before {
          width: 8px;
        }

        @media (max-width: 768px) {
            .faq-container {
                grid-template-columns: 1fr;
            }
            .faq-item {
                padding: 30px;
            }
        }
      </style>

      <script>
        document.addEventListener('DOMContentLoaded', function() {
          const searchInput = document.getElementById('faqSearchInput');
          const faqItems = document.querySelectorAll('.faq-item');
          const noResults = document.getElementById('faqNoResults');
          const faqToggles = document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle');

          // Toggle functionality
          faqItems.forEach(item => {
            item.addEventListener('click', function() {
              const wasActive = this.classList.contains('faq-active');
              
              // Close all other items
              faqItems.forEach(i => i.classList.remove('faq-active'));
              
              // Toggle current item
              if (!wasActive) {
                this.classList.add('faq-active');
              }
            });
          });

          // Live Search Search Functionality
          searchInput.addEventListener('input', function() {
            const query = this.value.toLowerCase().trim();
            let matches = 0;

            faqItems.forEach(item => {
              const h3 = item.querySelector('h3');
              const p = item.querySelector('.faq-content p');
              const text = (h3.innerText + ' ' + p.innerText).toLowerCase();

              if (text.includes(query)) {
                item.classList.remove('d-none');
                matches++;
                
                // Reset active state for search if query is specific
                if (query.length > 2) {
                  item.classList.add('faq-active');
                }
              } else {
                item.classList.add('d-none');
                item.classList.remove('faq-active');
              }
            });

            if (matches === 0) {
              noResults.classList.remove('d-none');
            } else {
              noResults.classList.add('d-none');
            }
          });
        });
      </script>

    </section><!-- /Faq Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Showcase</h2>
        <p>Karya Terbaik Mahasiswa TRPL</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Semua</li>
            <li data-filter=".filter-web">Web App</li>
            <li data-filter=".filter-mobile">Mobile App</li>
            <li data-filter=".filter-ai">AI & IoT</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Sistem Informasi Akademik</h4>
                  <p>Web App - Laravel & React</p>
                  <a href="assets/img/portfolio/app-1.jpg" title="Sistem Informasi Akademik"
                    data-gallery="portfolio-gallery-web" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="{{ url('/portfolio-details') }}" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-mobile">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>E-Commerce Mobile</h4>
                  <p>Mobile App - Flutter</p>
                  <a href="assets/img/portfolio/product-1.jpg" title="E-Commerce Mobile"
                    data-gallery="portfolio-gallery-mobile" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="{{ url('/portfolio-details') }}" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-ai">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Smart Agriculture IoT</h4>
                  <p>AI & IoT - Python & Arduino</p>
                  <a href="assets/img/portfolio/branding-1.jpg" title="Smart Agriculture IoT"
                    data-gallery="portfolio-gallery-ai" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="{{ url('/portfolio-details') }}" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>What they are saying about us<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                  quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                  quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                  tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                  minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                  labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Fakultas</h2>
        <p>Dosen Praktisi Profesional</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/manase-sahat.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Manase Sahat H. S., M.Kom.</h4>
                <span>Koordinator Prodi | Lektor | S2</span>
                <p>Dosen Tetap Program Studi Teknologi Rekayasa Perangkat Lunak. Berfokus pada pengembangan sistem
                  informasi industri.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/nita.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Nita Winda Sari, S.Kom., M.Kom.</h4>
                <span>Dosen Tetap | S2</span>
                <p>Dosen Tetap Program Studi Teknologi Rekayasa Perangkat Lunak. Berfokus pada pengajaran dan penelitian
                  di bidang teknologi rekayasa perangkat lunak.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/fritz-gamaliel.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Fritz Gamaliel, S.Kom., M.T.</h4>
                <span>Lektor | S2</span>
                <p>Dosen Tetap Program Studi Teknologi Rekayasa Perangkat Lunak. Berfokus pada pengembangan sistem
                  berbasis teknologi informasi dan rekayasa perangkat lunak.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/miswadi.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Miswadi, S.Kom., M.Kom.</h4>
                <span>Dosen Tetap | S2</span>
                <p>Dosen Tetap Program Studi Teknologi Rekayasa Perangkat Lunak. Berfokus pada implementasi sistem
                  informasi dan manajemen data industri.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Berita</h2>
        <p>Update Berita Prodi Teknologi Rekayasa Perangkat Lunak</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                <span class="post-date">December 12</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                  </div>
                </div>

                <hr>

                <a href="{{ url('/blog-details') }}" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                <span class="post-date">July 17</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                  </div>
                </div>

                <hr>

                <a href="{{ url('/blog-details') }}" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                <span class="post-date">September 05</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                  </div>
                </div>

                <hr>

                <a href="{{ url('/blog-details') }}" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

        </div>

      </div>

    </section><!-- /Recent Posts Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div><!-- End Section Title -->

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
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
              data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->
@endsection