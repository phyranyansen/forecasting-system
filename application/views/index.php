
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="frontend/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url().'assets/frontend/assets/img/apple-touch-icon.png';?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
    <!-- Vendor CSS Files -->
    <link href="<?= base_url().'assets/frontend/assets/vendor/aos/aos.css';?>" rel="stylesheet">
    <link href="<?= base_url().'assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
    <link href="<?= base_url().'assets/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css';?>" rel="stylesheet">
    <link href="<?= base_url().'assets/frontend/assets/vendor/boxicons/css/boxicons.min.css';?>" rel="stylesheet">
    <link href="<?= base_url().'assets/frontend/assets/vendor/glightbox/css/glightbox.min.css';?>" rel="stylesheet">
    <link href="<?= base_url().'assets/frontend/assets/vendor/swiper/swiper-bundle.min.css';?>" rel="stylesheet">
  
    <!-- Template Main CSS File -->
  <link href="<?= base_url().'assets/frontend/assets/css/style.css';?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.3.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="https://pergikuliner.com/restaurants/surabaya/alfarizqy-bakery-semolowaru">www.foodierate.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+6281330211233</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?= base_url(); ?>">Alfarizqy<span> Bakery</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown"><a href="<?= base_url('sign-in'); ?>"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
           
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Selamat datang di <span>aplikasi sistem peramalan</span></h1>
      <h2>Silahkan login untuk mengakses sistem peramalan!</h2>
      <div class="d-flex">
        <a href="<?= base_url('sign-in'); ?>" class="btn-get-started scrollto">Get Started</a>
        </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>About Us</h3>
          <p>Alfarizqy Bakery merupakan sebuah toko roti yang menyediakan berbagai jenis roti yang disajikan</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="<?= base_url().'assets/frontend/assets/img/roti.jpeg';?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Alfarizqy Bakery</h3>
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Layanan</h5>
                  <p>Kami menyajikan berbagai jenis roti dan tersedia layanan untuk pesanan dalam bentuk catering</p>
                </div>
              </li>
              <li>
                <i class="bx bx-map"></i>
                <div>
                  <h5>Lokasi</h5>
                  <p> Jl. Semolowaru No. 1, Semolowaru, Surabaya, Jawa Timur</p>
                </div>
              </li>
              <li>
                <i class="bx bx-time"></i>
                <div>
                  <h5>Jam Buka</h5>
                <p>   Senin - Minggu : 7:00 - 21:00</p> 
                </div>
              </li>
            </ul>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
           </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Jl. Semolowaru No.1, Semolowaru, Kec. Sukolilo, Kota SBY, Jawa Timur 60119</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>www.foodierate.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+6281330211233</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.4786624803737!2d112.77049341432108!3d-7.299995073787186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa50cf939343%3A0xab87ff2ebf988366!2sJl.%20Semolowaru%20No.1%2C%20Semolowaru%2C%20Kec.%20Sukolilo%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060119!5e0!3m2!1sen!2sid!4v1630204820221!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen="" loading="lazy"></iframe>
        </div>

         

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">



    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <?= date('Y') ?><strong><span> Alfarizqy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Developed by <a href="https://bootstrapmade.com/">Phyranyansen</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url().'assets/frontend/assets/vendor/aos/aos.js';?>"></script>
  <script src="<?= base_url().'assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js';?>"></script>
  <script src="<?= base_url().'assets/frontend/assets/vendor/glightbox/js/glightbox.min.js';?>"></script>
  <script src="<?= base_url().'assets/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js';?>"></script>
  <script src="<?= base_url().'assets/frontend/assets/vendor/php-email-form/validate.js';?>"></script>
  <script src="<?= base_url().'assets/frontend/assets/vendor/purecounter/purecounter.js';?>"></script>
  <script src="<?= base_url().'assets/frontend/assets/vendor/swiper/swiper-bundle.min.js';?>"></script>
  <script src="<?= base_url().'assets/frontend/assets/vendor/waypoints/noframework.waypoints.js';?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url().'assets/frontend/assets/js/main.js';?>"></script>

</body>

</html>