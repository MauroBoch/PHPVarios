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

    <?php
    require_once('bd_config.php');

    try {
        if (isset($_GET['id']) == false) {
          echo "No se encontró ningún ID.";
        } else {
          $id = $_GET['id'];
          $codigo=$_GET['codigo'];
        }

      
    } catch (PDOException $pe) {
      die("No pudo establecer conexion a " . __NAME_BD . " :" . $pe->getMessage());
      //die("Error!");
    }
    
    ?>
   
   
   
  

<div class="container-fluid">
		<div class="row ">
			<div class="col-lg-6 col-md-6 d-none d-md-block image-container">
      
      <div class="col-lg-12  mt-lg-0">
        <div class="container text-center p-5 bannercenter ">
          <div  data-aos="zoom-in" data-aos-delay="100">
        
            <img src="assets/img/logo1.png" class="img-fluid" alt="Costumbres">
            </br></br>
               
                 <h1>20% de descuento en tu compra</h1>
                 
                   <h5>registrate para obtener este y muchos más Beneficios</h5>
                
               
          </div>
        
        </div>
      </div>
      </div>
      

			<div class="col-lg-6 col-md-6 form-container">
				<div class="col-lg-10 col-md-8 col-sm-6 col-xs-12 form-box">
					
				<section id="registro" class="resume">

      <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
        <img src="assets/img/manitoarriba.gif" class="img-fluid" alt="">
        <h1>Gracias</h1>

          <p>Ahora podés disfrutar de tu descuento</p>
        </div>

        <div class="row mt-1 px-5">

        

          <div class="col-lg-12  mt-lg-0">

          <form action="encuesta.php" method="POST">
            <input style="display:none;" type="text" name="id" id="id" value="<?php echo  $id; ?>">
              <div class="row">
                <div class="section-title">
                  <!-- <label for="medialuna">Nombre</label> -->
                  
                  <br>
                  <div class="col-md-12 form-group mt-3">
                    <h3>Tu codigo es:</h3>
                    <div class="section-title text-center">
                      <h3><?php echo  $codigo; ?></h3>
                    </div>

                  </div>
                  <br>
                            

                </div>

              </div>

              <br>


              <!--
                <div class="text-center"><input class="buttom" type="submit" value="Siguiente"></div>
              -->

            </form>
            <div class="section-title text-center">
            <p>Muestrale al cajero tu codigo o tu número telefónico</p>
            </div>
          </div>
    </div>
    </section>	
    
    
    
    
    


				</div>
			</div>
		</div>
	</div>


  </body>
   
    
   
   
   
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