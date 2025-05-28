<?php 
  include "admin/config/koneksi.php";

  $page = "index";

  $queryHome = mysqli_query($config, "SELECT * FROM home");
  $rowHome = mysqli_fetch_assoc($queryHome);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Kelly Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="depan/assets/img/favicon.png" rel="icon">
  <link href="depan/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="depan/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="depan/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="depan/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="depan/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="depan/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="depan/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <?php include "inc/header.php"; ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="admin/uploads/<?php echo $rowHome["photo"]; ?>" alt="" data-aos="fade-in">

      <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2><?php echo $rowHome["name"]; ?></h2>
            <p><?php echo $rowHome["description"]; ?></p>
            <a href="about.php" class="btn-get-started">About Me</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

  </main>

  <?php include "inc/footer.php"; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="depan/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="depan/assets/vendor/php-email-form/validate.js"></script>
  <script src="depan/assets/vendor/aos/aos.js"></script>
  <script src="depan/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="depan/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="depan/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="depan/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="depan/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="depan/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="depan/assets/js/main.js"></script>

</body>

</html>