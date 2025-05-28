<?php 
  include "admin/config/koneksi.php";

  $page = "portofolio";

  $queryCategory = mysqli_query($config, "SELECT * FROM category ORDER BY ID DESC");
  $rowCategory = mysqli_fetch_all($queryCategory, MYSQLI_ASSOC);

  // $queryPortofolio = mysqli_query($config, "SELECT * FROM portofolio ORDER BY ID DESC");
  // $rowPortofolio = mysqli_fetch_all($queryPortofolio, MYSQLI_ASSOC);

  $queryPortofolio = mysqli_query($config, "SELECT category.name, portofolio.* FROM portofolio 
    LEFT JOIN category ON category.id = portofolio.id_category
    ORDER BY portofolio.id DESC");
  $rowPortofolio = mysqli_fetch_all($queryPortofolio, MYSQLI_ASSOC);
  // foreach ($rowPortofolio as $key => $data) {
  //    print_r($data["title"]);
  // }
  // die;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio - Kelly Bootstrap Template</title>
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

<body class="portfolio-page">

  <?php include "inc/header.php"; ?>

  <main class="main">

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p> </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <!-- tessss -->
            <?php foreach ($rowCategory as $key => $value) { ?>
              <li data-filter=".filter-<?php echo $value["name"]; ?>"><?php echo ucwords($value["name"]); ?></li>
            <?php } ?>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            
            <?php foreach ($rowPortofolio as $key => $data) { ?>
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?php echo $data["name"]; ?>">
                <img src="admin/uploads/<?php echo $data["photo"]; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?php echo $data["title"]; ?></h4>
                  <p><?php echo $data["description"]; ?></p>
                  <a href="admin/uploads/<?php echo $data["photo"]; ?>" title="<?php echo  $data["title"] ?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portofolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            <?php } ?>

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

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