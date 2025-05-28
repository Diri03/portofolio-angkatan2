<?php 
  include "admin/config/koneksi.php";

  $page = "services";

  $queryService = mysqli_query($config, "SELECT * FROM services");
  $rows = mysqli_fetch_all($queryService, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Services - Kelly Bootstrap Template</title>
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

<body class="services-page">

  <?php include "inc/header.php"; ?>

  <main class="main">

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p> </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <?php foreach ($rows as $key => $data) { ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php for ($i=100; $i <= count($rows); $i+=100) { 
              echo $i;
            } ?>">
              <div class="service-item item-cyan position-relative">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                  </svg>
                  <i class="bi bi-<?php echo $data["icon"]; ?>"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3><?php echo $data["title"]; ?></h3>
                </a>
                <p><?php echo $data["content"]; ?></p>
              </div>
            </div><!-- End Service Item -->
          <?php } ?>

        </div>

      </div>

    </section><!-- /Services Section -->

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