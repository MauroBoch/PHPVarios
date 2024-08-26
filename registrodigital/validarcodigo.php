<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="author" content="Daniel Colmenares">

  <title>Registro Costumbres Argentinas</title>
  <meta content="Registro Digital Costumbres Argentina " name="description">
  <meta content="argentinas, argentina, Registro, Barrios, Personas, Costumbres" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/style2.css">


</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->


  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <div class="section-title ">
        <h1>Registro de Cupones</h1>

      </div>
    </div>
  </section>

  <main id="main">

    <!-- ======= About Section ======= -->




    <!-- ======= Resume Section ======= -->
    <?php
    require_once('bd_config.php');

    try {
      session_start();

      if (!isset($_SESSION['usuario'])) {
        $url = "Location: registrodigital/login.php";
        header($url);
        exit();
      }
    } catch (PDOException $pe) {
      die("No pudo establecer conexion a " . __NAME_BD . " :" . $pe->getMessage());
      //die("Error!");
    }


    ?>
    <section id="validacion" class="resume">

      <div class="container" data-aos="fade-up">
        <div class="row mt-1">
          <div class="row">


            <div class="col-lg-12 col-md-12 mt-5 mt-md-0">
              <div class="section-title text-center">
                <h1>Validador de codigos</h1>
                <h3>Usuario:
                  <?php
                  echo ($_SESSION['usuario']);
                  ?>
                </h3>
                <p>Ingresar el codigo presentado por el cliente. </br> en caso de no tener el código podrás pedirle el número telefónico con que hizo el registro</p>
              </div>


            </div>
          </div>
        </div>


        <div class="row mt-1">

          <div class="col-lg-2">


          </div>

          <div class="section-title d-flex justify-content-center">

            <form action="processvalidarcodigo.php" method="POST">
              <input style="display:none;" type="text" name="id" id="id" value="<?php echo  $id; ?>">
              <div class="row">
                <div class="section-title">
                <div class="col-lg-12 col-md-12 form-group mt-3">
                    <label><h3>Codigo</h3></label>
                    <input type="text" name="cupon" class="form-control" id="cupon" placeholder="" required name="apellido">

                </div> 
  </br>  
                <label>
                <div class="h4">
                      <?php
                        if (isset($_GET['mensaje'])) 
                          echo($_GET['mensaje']);
                      ?>
                </div>  
                </label>

                </div>

              </div>

              <br>


              <div class="text-center"><input class="btn btn-light buttom" type="submit" value="Siguiente"></div>

            </form>


          </div>
    </section>

    </div>
    









  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>



  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>