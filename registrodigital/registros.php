<!DOCTYPE html>
<html>
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

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css"/>


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/style2.css">

</head>

<body>


<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <div class="section-title ">
        <h1>Ver usuarios registrados</h1>

      </div>
    </div>
  </section>
  <div class="row "> 

    <div class="col-lg-12  mt-lg-0"><br><br>
        <div class="d-flex flex-column justify-content-center">
                <table id="registros" class="display table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>telefono</th>
                                <th>barrio</th>
                                <th>fecha</th>
                                
                            </tr>
                        </thead>
                        <tbody>
        </div>    
    </div>
</div>
<?php

require_once('bd_config.php');


try {
	session_start();

	if (!isset($_SESSION['usuario'])) {
		$url = "Location: registrodigital/login.php";
		header($url);
		exit();
	} else {
		$idusuario = $_SESSION['id'];
	}
} catch (PDOException $pe) {
	die("No pudo establecer conexion a " . __NAME_BD . " :" . $pe->getMessage());
	//die("Error!");
}

try {
    
    $conn = new PDO("mysql:host=".__HOST_BD.";dbname=".__NAME_BD, __USER_BD, __PASS_BD);


    foreach ($conn->query("SELECT * FROM  registros ;") as $row ){
        
            echo "<tr>  <td>".$row['id']."</td><td> ".$row['nombre']."</td><td>".$row['apellido']."</td>
            <td> ".$row['email']."</td><td> ".$row['telefono']."</td><td> ".$row['barrio']."</td><td> ".$row['stmp']."</td>";
        }
      
       
} catch (PDOException $pe) {
    die("No pudo establecer conexion a ".__NAME_BD." :" . $pe->getMessage());
}



?>


              
            </tbody>
           
        </table>


<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>


<script type="text/javascript">
    
    $(document).ready(function() {

setTimeout(function(){


    $('#registros').DataTable({
            dom: 'Bfrtip',
            responsive: true,
            nowrap: false,
            buttons: [
                'copy',
                'excel',
                'csv',
                'pdf'
            ]
    });
},2000)

} );
</script>

</body>
</html>

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

