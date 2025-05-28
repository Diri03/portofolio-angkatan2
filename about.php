<?php 
  include "admin/config/koneksi.php";

  $queryProfile = mysqli_query($config, "SELECT * FROM about ORDER BY id DESC");
  $rowProfile = mysqli_fetch_assoc($queryProfile);

  $page = "about";

  function umur($birthday){
    $lahir = strtotime($birthday);
    $lahirTahun = (int)date("Y", $lahir);
    $lahirBulan = (int)date("m", $lahir);
    $lahirHari = (int)date("d", $lahir);
    $todayTahun = (int)date("Y");
    $todayBulan = (int)date("m");
    $todayHari = (int)date("d");

    $usia = $todayTahun - $lahirTahun;
    if ($todayBulan == $lahirBulan) {
      if ($todayHari < $lahirHari) {
        return $usia--;
      }
    }elseif ($todayBulan < $lahirBulan) {
      return $usia--;
    }else {
      return $usia;
    }
  }

  $querySkill = mysqli_query($config, "SELECT * FROM kemampuan ORDER BY bar DESC");
  $rowsSkill = mysqli_fetch_all($querySkill, MYSQLI_ASSOC);

  $queryFact = mysqli_query($config, "SELECT * FROM fakta ORDER BY id");
  $rowsFact = mysqli_fetch_all($queryFact, MYSQLI_ASSOC);

  $queryTest = mysqli_query($config, "SELECT * FROM testimoni ORDER BY id");
  $rowsTest = mysqli_fetch_all($queryTest, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About - Kelly Bootstrap Template</title>
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

<body class="about-page">

  <?php include "inc/header.php"; ?>

  <main class="main">

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Saya</h2>
        <p><?php echo isset($rowProfile["content"]) ? $rowProfile["content"] : "" ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="admin/uploads/<?php echo $rowProfile["photo"]; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2><?php echo isset($rowProfile["title"]) ? $rowProfile["title"] : "" ?></h2>
            <!-- <p class="fst-italic py-3">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <p class="fst-italic py-3"> </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo isset($rowProfile["birthday"]) ? date("d F Y", strtotime($rowProfile["birthday"])) : "" ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?php echo isset($rowProfile["website"]) ? $rowProfile["website"] : "" ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo isset($rowProfile["phone"]) ? $rowProfile["phone"] : "" ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo isset($rowProfile["city"]) ? $rowProfile["city"] : "" ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo umur($rowProfile["birthday"]) . " tahun"; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo isset($rowProfile["degree"]) ? $rowProfile["degree"] : "" ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo isset($rowProfile["email"]) ? $rowProfile["email"] : "" ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><?php echo isset($rowProfile["freelance"]) ? $rowProfile["freelance"] : "" ?></span></li>
                </ul>
              </div>
            </div>
            <p class="py-3" style="text-align: justify;">
              <?php echo isset($rowProfile["detailTitle"]) ? $rowProfile["detailTitle"] : "" ?>
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kemampuan</h2>
        <p></p>
      </div><!-- End Section Title -->
       <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">
          <div class="col-lg-6">
            <?php foreach ($rowsSkill as $key => $sk) { ?>
              <?php if ((int)$key % 2 == 0) { ?>
                <div class="progress">
                  <span class="skill"><span><?php echo $sk["skill"]; ?></span> <i class="val"><?php echo $sk["bar"]; ?>%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $sk["bar"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><!-- End Skills Item -->
              <?php } ?>
            <?php } ?>
          </div>

          <div class="col-lg-6">
            <?php foreach ($rowsSkill as $key => $sk) { ?>
              <?php if ((int)$key % 2 == 1) { ?>
                <div class="progress">
                  <span class="skill"><span><?php echo $sk["skill"]; ?></span> <i class="val"><?php echo $sk["bar"]; ?>%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $sk["bar"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><!-- End Skills Item -->
              <?php } ?>
            <?php } ?>
          </div>
        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Fakta</h2>
        <p> </p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <?php foreach ($rowsFact as $key => $f) { ?>

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $f["count"]; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p><?php echo $f["name"]; ?></p>
              </div>
            </div><!-- End Stats Item -->

          <?php } ?>

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimoni</h2>
        <p> </p>
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
              }
            }
          </script>
          <div class="swiper-wrapper">

            <?php foreach ($rowsTest as $key => $t) { ?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="admin/uploads/<?php echo $t["photo"]; ?>" class="testimonial-img object-fit-cover" alt="" width="120"  height="120">
                  <h3><?php echo $t["name"]; ?></h3>
                  <h4><?php echo $t["profesion"]; ?></h4>
                  <div class="stars">
                    <?php for ($i=0; $i < $t["rating"]; $i++) { ?>
                      <i class="bi bi-star-fill"></i>
                    <?php } ?>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span><?php echo $t["quote"]; ?></span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
            <?php } ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

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