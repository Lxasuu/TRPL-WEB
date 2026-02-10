<footer id="footer" class="footer">

  <div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-6">
          <h4>Join Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe">
            </div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="{{ url('/') }}" class="d-flex align-items-center">
          <span class="sitename">Politeknik Meta Industri</span>
        </a>
        <div class="footer-contact pt-3">
          <p>Kawasan Industri Jababeka</p>
          <p>Cikarang, Bekasi, Jawa Barat</p>
          <p class="mt-3"><strong>Telepon:</strong> <span>+62 21 8983 0001</span></p>
          <p><strong>Email:</strong> <span>trpl@politeknikmeta.ac.id</span></p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Tautan Penting</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}">Beranda</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/about') }}">Tentang Kami</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/kurikulum') }}">Kurikulum</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="https://pmb-mip.politeknikmeta.ac.id/login">Pendaftaran</a>
          </li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Program Kami</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/kurikulum#web') }}">Web Engineering</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/kurikulum#web') }}">Mobile Engineering</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/kurikulum#web') }}">AI & Data Science</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/kurikulum#web') }}">Cloud Computing</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-12">
        <h4>Ikuti Kami</h4>
        <p>Dapatkan informasi terbaru seputar kampus dan dunia teknologi rekayasa perangkat lunak.</p>
        <div class="social-links d-flex">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span class="sitename-year">2026</span> <span>Copyright</span> <strong class="px-1 sitename">Politeknik Meta
        Industri Cikarang</strong>
      <span>All
        Rights Reserved</span>
    </p>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you've purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
        href=“https://themewagon.com>ThemeWagon -->
    </div>
  </div>

</footer>
