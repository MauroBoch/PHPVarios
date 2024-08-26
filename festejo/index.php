<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Concurso de Arte -  Grupo Almar</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body background="assets/img/fondo.jpg" class="img-fluid">

  <!-- ======= Top Bar ======= -->
  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

     <!-- <h1 class="logo mr-auto"><a href="">Medilab</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="" class=""><img src="assets/img/logo.jpg" height="100px" alt=""  ></a>

 <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="">Inicio</a></li>
          <li><a href="#2"> Junior: 3 a 5 años</a></li>
          <li><a href="#6"> Infantil: 6 a 9 años</a></li>
          <li><a href="#11"> Teens: 10 a 14 años</a></li>
         
          


         

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#appointment" class="appointment-btn scrollto">Arte</a>

    </div>
  </header><!-- End Header -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">
<br/><br/><br/><br/><br/><br/>
        <div class="section-title" >
          <h2>
        Queremos celebrar con vos el MES del NIÑO.</h2>
        </div>
      </div>

      <div class="container-fluid" id="2">
       <div class="section-title" >
          <h2>Categoría junior: 3 a 5 años</h2>
          
        </div>
        <div class="row no-gutters">
        
        <?php
		$mysqli = new mysqli('localhost', 'root', '', 'festejo');

        // ¡Oh, no! Existe un error 'connect_errno', fallando así el intento de conexión
        if ($mysqli->connect_errno) {
            // La conexión falló. ¿Que vamos a hacer? 
            // Se podría contactar con uno mismo (¿email?), registrar el error, mostrar una bonita página, etc.
            // No se debe revelar información delicada
        
            // Probemos esto:
            echo "Lo sentimos, este sitio web está experimentando problemas.";
        
            // Algo que no se debería de hacer en un sitio público, aunque este ejemplo lo mostrará
            // de todas formas, es imprimir información relacionada con errores de MySQL -- se podría registrar
            echo "Error: Fallo al conectarse a MySQL debido a: \n";
            echo "Errno: " . $mysqli->connect_errno . "\n";
            echo "Error: " . $mysqli->connect_error . "\n";
            
            // Podría ser conveniente mostrar algo interesante, aunque nosotros simplemente saldremos
            exit;
        }

        // Realizar una consulta SQL
        $sql = "SELECT * FROM Dibujos WHERE seccion =1";
        if (!$resultado = $mysqli->query($sql)) {
            // ¡Oh, no! La consulta falló. 
            echo "Lo sentimos, este sitio web está experimentando problemas.";
        
            // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
            // cómo obtener información del error
            echo "Error: La ejecución de la consulta falló debido a: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }

        // ¡Uf, lo conseguimos!. Sabemos que nuestra conexión a MySQL y nuestra consulta
        // tuvieron éxito, pero ¿tenemos un resultado?
        if ($resultado->num_rows === 0) {
            // ¡Oh, no ha filas! Unas veces es lo previsto, pero otras
            // no. Nosotros decidimos. En este caso, ¿podría haber sido
            // actor_id demasiado grande? 
            echo "Sin dibujos";
           // exit;
        }
        
        // Ahora, sabemos que existe solamente un único resultado en este ejemplo, por lo
        // que vamos a colocarlo en un array asociativo donde las claves del mismo son los
        // nombres de las columnas de la tabla
        
        
        // Ahora, vamor a obtener cinco actores aleatorios y a imprimir sus nombres en una lista.
        // El manejo de errores va a ser menor aquí, aunque ya sabemos como hacerlo
        $sql = "SELECT * FROM Dibujos WHERE seccion =1";
        if (!$resultado = $mysqli->query($sql)) {
            echo "Lo sentimos, este sitio web está experimentando problemas.";
            exit;
        }

		// Imprimir nuestros cinco actores aleatorios en una lista, y enlazar cada uno

        while ($actor = $resultado->fetch_assoc()) {
        ?>
         <div class="col-lg-3 col-md-4"  style="background-color:#FFFFCC">
            <div class="gallery-item">
              <a href="assets/img/gallery/<?php echo $actor['id']; ?>.png" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/<?php echo $actor['id']; ?>.png" height="250px" width="250px" alt="" >
              </a>
              
            </div>
             <p ><?php echo $actor['titulo']; ?>&nbsp;<img src="assets/img/like.png"  data-toggle="modal" onClick="PreSeleccion('<?php echo $actor['id']; ?>');" data-target="#exampleModal" style="cursor:pointer"/></p>
          </div>
        
           
        <?php
 
        }

// El script automáticamente liberará el resultado y cerrará la conexión
// a MySQL cuando finalice, aunque aquí lo vamos a hacer nostros mismos
$resultado->free();
$mysqli->close();
?>
    
    <div class="container-fluid" id="6">
       <div class="section-title" >
          <h2>Categoría infantil: 6 a 9 años</h2>
          
        </div>
        <div class="row no-gutters">
        
        <?php
		$mysqli = new mysqli('localhost', 'root', '', 'festejo');

        // ¡Oh, no! Existe un error 'connect_errno', fallando así el intento de conexión
        if ($mysqli->connect_errno) {
            // La conexión falló. ¿Que vamos a hacer? 
            // Se podría contactar con uno mismo (¿email?), registrar el error, mostrar una bonita página, etc.
            // No se debe revelar información delicada
        
            // Probemos esto:
            echo "Lo sentimos, este sitio web está experimentando problemas.";
        
            // Algo que no se debería de hacer en un sitio público, aunque este ejemplo lo mostrará
            // de todas formas, es imprimir información relacionada con errores de MySQL -- se podría registrar
            echo "Error: Fallo al conectarse a MySQL debido a: \n";
            echo "Errno: " . $mysqli->connect_errno . "\n";
            echo "Error: " . $mysqli->connect_error . "\n";
            
            // Podría ser conveniente mostrar algo interesante, aunque nosotros simplemente saldremos
            exit;
        }

        // Realizar una consulta SQL
        $sql = "SELECT * FROM Dibujos WHERE seccion =2";
        if (!$resultado = $mysqli->query($sql)) {
            // ¡Oh, no! La consulta falló. 
            echo "Lo sentimos, este sitio web está experimentando problemas.";
        
            // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
            // cómo obtener información del error
            echo "Error: La ejecución de la consulta falló debido a: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }

        // ¡Uf, lo conseguimos!. Sabemos que nuestra conexión a MySQL y nuestra consulta
        // tuvieron éxito, pero ¿tenemos un resultado?
        if ($resultado->num_rows === 0) {
            // ¡Oh, no ha filas! Unas veces es lo previsto, pero otras
            // no. Nosotros decidimos. En este caso, ¿podría haber sido
            // actor_id demasiado grande? 
            echo "Sin dibujos";
           
        }
        
        // Ahora, sabemos que existe solamente un único resultado en este ejemplo, por lo
        // que vamos a colocarlo en un array asociativo donde las claves del mismo son los
        // nombres de las columnas de la tabla
        
        
        // Ahora, vamor a obtener cinco actores aleatorios y a imprimir sus nombres en una lista.
        // El manejo de errores va a ser menor aquí, aunque ya sabemos como hacerlo
        $sql = "SELECT * FROM Dibujos WHERE seccion =2";
        if (!$resultado = $mysqli->query($sql)) {
            echo "Lo sentimos, este sitio web está experimentando problemas.";
            exit;
        }

		// Imprimir nuestros cinco actores aleatorios en una lista, y enlazar cada uno

        while ($actor = $resultado->fetch_assoc()) {
        ?>
         <div class="col-lg-3 col-md-4"  style="background-color:#FFFFCC">
            <div class="gallery-item">
              <a href="assets/img/gallery/<?php echo $actor['id']; ?>.png" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/<?php echo $actor['id']; ?>.png" height="250px" width="250px" alt="" >
              </a>
              
            </div>
             <p ><?php echo $actor['titulo']; ?>&nbsp;<img src="assets/img/like.png" data-toggle="modal" onClick="PreSeleccion('<?php echo $actor['id']; ?>');" data-target="#exampleModal" style="cursor:pointer"/></p>
          </div>
        
           
        <?php
 
        }

// El script automáticamente liberará el resultado y cerrará la conexión
// a MySQL cuando finalice, aunque aquí lo vamos a hacer nostros mismos
$resultado->free();
$mysqli->close();
?>
        
        <div class="container-fluid">
       <div class="section-title"  id="11">
          <h2>Categoría teens: 10 a 14 años</h2>
          
        </div>
        <div class="row no-gutters">
        
        <?php
		$mysqli = new mysqli('localhost', 'root', '', 'festejo');

        // ¡Oh, no! Existe un error 'connect_errno', fallando así el intento de conexión
        if ($mysqli->connect_errno) {
            // La conexión falló. ¿Que vamos a hacer? 
            // Se podría contactar con uno mismo (¿email?), registrar el error, mostrar una bonita página, etc.
            // No se debe revelar información delicada
        
            // Probemos esto:
            echo "Lo sentimos, este sitio web está experimentando problemas.";
        
            // Algo que no se debería de hacer en un sitio público, aunque este ejemplo lo mostrará
            // de todas formas, es imprimir información relacionada con errores de MySQL -- se podría registrar
            echo "Error: Fallo al conectarse a MySQL debido a: \n";
            echo "Errno: " . $mysqli->connect_errno . "\n";
            echo "Error: " . $mysqli->connect_error . "\n";
            
            // Podría ser conveniente mostrar algo interesante, aunque nosotros simplemente saldremos
            exit;
        }

        // Realizar una consulta SQL
        $sql = "SELECT * FROM Dibujos WHERE seccion =3";
        if (!$resultado = $mysqli->query($sql)) {
            // ¡Oh, no! La consulta falló. 
            echo "Lo sentimos, este sitio web está experimentando problemas.";
        
            // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
            // cómo obtener información del error
            echo "Error: La ejecución de la consulta falló debido a: \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
        }

        // ¡Uf, lo conseguimos!. Sabemos que nuestra conexión a MySQL y nuestra consulta
        // tuvieron éxito, pero ¿tenemos un resultado?
        if ($resultado->num_rows === 0) {
            // ¡Oh, no ha filas! Unas veces es lo previsto, pero otras
            // no. Nosotros decidimos. En este caso, ¿podría haber sido
            // actor_id demasiado grande? 
            echo "Sin dibujos";
          
        }
        
        // Ahora, sabemos que existe solamente un único resultado en este ejemplo, por lo
        // que vamos a colocarlo en un array asociativo donde las claves del mismo son los
        // nombres de las columnas de la tabla
        
        
        // Ahora, vamor a obtener cinco actores aleatorios y a imprimir sus nombres en una lista.
        // El manejo de errores va a ser menor aquí, aunque ya sabemos como hacerlo
        $sql = "SELECT * FROM Dibujos WHERE seccion =3";
        if (!$resultado = $mysqli->query($sql)) {
            echo "Lo sentimos, este sitio web está experimentando problemas.";
           
        }

		// Imprimir nuestros cinco actores aleatorios en una lista, y enlazar cada uno

        while ($actor = $resultado->fetch_assoc()) {
        ?>
         <div class="col-lg-3 col-md-4"  style="background-color:#FFFFCC">
            <div class="gallery-item">
              <a href="assets/img/gallery/<?php echo $actor['id']; ?>.png" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/<?php echo $actor['id']; ?>.png" height="250px" width="250px" alt="" >
              </a>
              
            </div>
             <p ><?php echo $actor['titulo']; ?>&nbsp;<img src="assets/img/like.png" data-toggle="modal" onClick="PreSeleccion('<?php echo $actor['id']; ?>');" data-target="#exampleModal" style="cursor:pointer"/></p>
          </div>
        
           
        <?php
 
        }

// El script automáticamente liberará el resultado y cerrará la conexión
// a MySQL cuando finalice, aunque aquí lo vamos a hacer nostros mismos
$resultado->free();
$mysqli->close();
?>
        
        
    </section><!-- End Gallery Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    
    <div class="container d-md-flex py-4">

      
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
<b>Desarrollado por M. Bochons</b>
      </div>
    </div>
  </footer><!-- End Footer -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titu">Ingresa Documento</h5>
        <input type="text" id="txtVotado" name="txtVotado" style="display:none">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <input type="password" id="documento" onkeypress="return SoloNumero(this,event);">
      </div>
      <div class="modal-footer">
        <button type="button" id="btnCerrar" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
       <button type="button" class="btn btn-primary" onClick="Votar(document.getElementById('txtVotado').value,document.getElementById('documento').value);">Aceptar</button>
      </div>
    </div>
  </div>
</div>
  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script type="text/javascript">

function PreSeleccion(valor)
{
document.getElementById('txtVotado').value=valor;

 }


function Votar(id,legajo) {


             $.ajax({
                   url: 'votar.php?id=' + id + '&legajo=' + legajo ,
                 success: function (respuesta) {

                     alert(respuesta);
document.getElementById('btnCerrar').click();


                 },
                 error: function () {
                     console.log("No se ha podido obtener la información");
                 }
             });
         }

</script>

<script language="JavaScript">

    function SoloNumero(txt, evt) {
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode == 46) {
        //Check if the text already contains the . character
        if (txt.value.indexOf('.') === -1) {
          return true;
        } else {
          return false;
        }
      } else {
        if (charCode > 31 &&
          (charCode < 48 || charCode > 57))
          return false;
      }
      return true;
    }

</script>
</body>

</html>