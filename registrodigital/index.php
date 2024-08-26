<!DOCTYPE html>
<html lang="es">
<?php
require_once('bd_config.php');

try {

  $conn = new PDO("mysql:host=" . __HOST_BD . ";dbname=" . __NAME_BD, __USER_BD, __PASS_BD);

  $conn->query("CREATE DATABASE IF NOT EXISTS registros_digital");

  $conn->query("CREATE TABLE IF NOT EXISTS registros (
							    id MEDIUMINT NOT NULL AUTO_INCREMENT,
								nombre VARCHAR(30) NOT NULL default '',
								apellido VARCHAR(30) NOT NULL default '',
								email VARCHAR(50) NOT NULL default '',
								telefono VARCHAR(30) NOT NULL default '',
								barrio VARCHAR(30) NOT NULL default '',
								stmp datetime DEFAULT CURRENT_TIMESTAMP,
      					stmpUpdated datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
							    PRIMARY KEY (id)
							);");


  $conn->query("CREATE TABLE IF NOT EXISTS cupones (
								id MEDIUMINT NOT NULL AUTO_INCREMENT,
								codigo_descuento VARCHAR(30) NOT NULL default '',
								stmp datetime DEFAULT CURRENT_TIMESTAMP,
      					stmpUpdated datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
								activo  char(1) NOT NULL default '1',
								PRIMARY KEY (id)

							);");



  $conn->query("CREATE TABLE IF NOT EXISTS usuarios (
								id MEDIUMINT NOT NULL AUTO_INCREMENT,
								usuario VARCHAR(30) NOT NULL default '',
								password VARCHAR(30) NOT NULL default '',
								stmp datetime DEFAULT CURRENT_TIMESTAMP,
      					stmpUpdated datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
								activo  char(1) NOT NULL default '1',
							     PRIMARY KEY (id)

	);");



  $conn->query("CREATE TABLE IF NOT EXISTS cupones_registros (
                  id MEDIUMINT NOT NULL AUTO_INCREMENT,
                  id_registo int NOT NULL ,
                  id_cupon int NOT NULL ,
                  stmp datetime DEFAULT CURRENT_TIMESTAMP,
                  stmpUpdated datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                PRIMARY KEY (id)
);");

  $conn->query("CREATE TABLE IF NOT EXISTS cupones_usuarios (
                  id MEDIUMINT NOT NULL AUTO_INCREMENT,
                  id_usuario int NOT NULL ,
                  id_cupon int NOT NULL ,
                  stmp datetime DEFAULT CURRENT_TIMESTAMP,
                  stmpUpdated datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                PRIMARY KEY (id)
);");
} catch (PDOException $pe) {
  die("No pudo establecer conexion");
  //die("Error!");
} ?>

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

        <h1>Registrate</h1>

          <p>Llená el formulario, aceptá los términos y condiciones.</p>
        </div>

        <div class="row mt-1 px-5">

        

          <div class="col-lg-12  mt-lg-0">


            <form action="process.php" method="POST">
              <div class="row ">
                <!-- <label for="nombre">Nombre</label> -->
                <div class="col-md-12 form-group mt-3">
                  <label>Nombre</label>
                  <input type="text" name="nombre" class="form-control" id="nombre" placeholder="" required name="nombre">
                </div>

                <!-- <label for="apellido">Apellido</label> -->
                <div class="col-md-12 form-group mt-3">
                  <label>Apellido</label>
                  <input type="text" name="apellido" class="form-control" id="apellido" placeholder="" required name="apellido">
                </div>

                <!-- <label for="nacimiento">Telefono</label> -->





                <div class="col-md-12 form-group mt-3 ">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="" required name="email">
                </div>




                <div class="col-md-12 form-group mt-3 ">
                  <label>Telefono</label>
                  <input type="text" class="form-control" name="telefono" id="telefono" placeholder="" required name="telefono" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                </div>


                <div class="col-md-12 form-group mt-3">
                  <label>Barrio</label>
                  <input type="text" name="barrio" class="form-control" id="barrio" placeholder="" required name="barrio">
                </div>


              </div>

              <br>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                <label class="form-check-label" for="defaultCheck1">
                  Acepto los términos y condiciones
                  <p>ver <a href="terminos_condiciones.php">términos y condiciones</a>.</p>
                </label>
                
              </div>

              <div class="text-center"><input class="btn btn-light" type="submit" value="Siguiente"></div>

            </form>


          </div>
    </div>
    </section>	
    
    <section class="footer">
                          <div class="container text-center">
                                  
                            <div class="credits">

                              <p> SARGENTO CABRAL 2430 - 541155334400 - info@costumbres.com.ar</p>

                              
                            </div>

                                              
                            <div class="copyright ">
                                    <p>&copy; 2024 Copyright <strong><span>Costumbres Argentinas</span></strong>. 
                                  </br>Todos los derechos reservados.
                                  </br>Diseño y desarrollo Marketing Costumbres</p>
                                  </div>
                          </div>
            </section><!-- End Footer -->
    


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