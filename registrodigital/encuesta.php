<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Unidos por una Pasion Mundialista</title>
  <meta content="Concurso de costumbres Argentinas -Unidos por una Pasion Mundialista " name="description">
  <meta content="Mundial, qatar, 2022, messi, selección, argentinas, argentina, di maria, campeones, concurso, medialunas, facturas, premio, encuesta, copa, mundo , mundial" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v4.9.2
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->




  <main id="main">

    <!-- ======= About Section ======= -->
   

    <!-- ======= Resume Section ======= -->
    <?php
    if(isset($_POST['id'])==false) {
      echo "No se encontró ningún ID.";
        
  }else{
    $id = $_POST['id'];
  }
    ?>
    <section id="encuesta" class="resume">

    <div class="container" data-aos="fade-up">
      <div class="row mt-1">
        <div class="row">
          

          <div class="col-lg-12 col-md-12 mt-5 mt-md-0">
          <div class="section-title text-center">
            <h1>Participá de nuestra encuesta</h1>
            <h3>Para nosotros es muy importante conocer tu opinión</h3>
            <p>es por eso que te pedimos que llenes esta pequeña encuesta, no tardará mas de 5 minutos y así poder seguir mejorando cada día</p>
          </div>

          
        </div>
      </div>
    </div>
        

      <div class="row mt-1">

        <div class="col-lg-2">
          

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">
          

          <form action="processencuesta.php" method="POST">
          <div class="row"> 
            <div class="section-title">
              <!-- <label for="medialuna">Nombre</label> -->
              <input class="" type="text" name="id" id="id" value="<?php echo  $id; ?>">
              <br>
              <div class="col-md-12 form-group mt-3">
                <h3>¿Te gustan nuestras Medialunas de manteca?</h3>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="medialuna" id="medialuna1" value="si">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="medialuna" id="medialuna2" value="no">
                  <label class="form-check-label-control" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="medialuna" id="medialuna3" value="no_sabe" >
                  <label class="form-check-label" for="inlineRadio3">No sabe, no contesta</label>
                </div>
                
                
              </div>
              <br>
                <!-- <label for="apellido">Apellido</label> -->
                <div class="col-md-12 form-group mt-3">

                  <h3>¿Te gustan nuestras Pizzas?</h3>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pizza" id="pizza1" value="si">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pizza" id="pizza2" value="no">
                  <label class="form-check-label-control" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pizza" id="pizza3" value="no_sabe" >
                  <label class="form-check-label" for="inlineRadio3">No sabe, no contesta</label>
                </div>
                
              </div>
              <br>
              <!-- <label for="nacimiento">Telefono</label> -->
              <div class="col-md-12 form-group mt-3 ">

                <h3>¿Prefierís armar tu combo?</h3>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="combo" id="combo1" value="si">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="combo" id="combo2" value="no">
                  <label class="form-check-label-control" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="combo" id="comboo3" value="no_sabe" >
                  <label class="form-check-label" for="inlineRadio3">No sabe, no contesta</label>
                </div>
              </div>
                <br>
              <div class="col-md-12 form-group mt-3 ">
                <h3>¿Probaste nuestras Hamburguesas?</h3>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="hamburguesas" id="hamburguesas1" value="si">
                  <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="hamburguesas" id="hamburguesas2" value="no">
                  <label class="form-check-label-control" for="inlineRadio2">No</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="hamburguesas" id="hamburguesas3" value="no_sabe" >
                  <label class="form-check-label" for="inlineRadio3">No sabe, no contesta</label>
                </div>

                
              </div>
            

            </div>

          </div>
      
           <br>
           
      
             <div class="text-center"><input class="buttom" type="submit" value="Siguiente"></div>
            
          </form>

        
      </div>
      </section>

        </div>




   

   

   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Costumbres</h3>
      <p>Síguenos en nuestras redes sociales</p>
      <div class="social-links">
  
        <a href="https://www.facebook.com/CostumbresAr" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/CostumbresAr" class="instagram"><i class="bx bxl-instagram"></i></a>

      </div>
      <div class="copyright">
        &copy; 2022 Copyright <strong><span>Costumbres Argentinas</span></strong>. Todos los derechos reservados.
      </div>
      <div class="credits">

        SARGENTO CABRAL 2430 - 
        541155334400 - 
        info@costumbres.com.ar


        <br>Diseño y desarrollo <a href="https://costumbres.com.ar/">Marketing Costumbres</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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