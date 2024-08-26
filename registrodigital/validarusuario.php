<?php
require_once('bd_config.php');

try {

	$conn = new PDO("mysql:host=" . __HOST_BD . ";dbname=" . __NAME_BD, __USER_BD, __PASS_BD);
	session_start();
	$idUsuario = 0;
	$sql = "select * from usuarios where activo='1' and usuario='" . $_REQUEST['usuario'] . "' and password='" . $_REQUEST['password'] . "' order by id limit 1";
	foreach ($result = $conn->query($sql) as $row) {
		$idUsuario = $row["id"];
		$_SESSION['id'] = $row["id"];
		$_SESSION['usuario'] = $row["usuario"];
	}

	if ($idUsuario > 0) {
		// Redireccionar a otra página con el ID en la URL
		IF($row["usuario"]=="Admin")
		{
			$url = "Location: registros.php";
		}else{
			$url = "Location: validarcodigo.php";
		}
		
		header($url);
		exit();
	} else {
		$url = "Location: login.php";
		header($url);
		exit();


	}

	// Cerrar la conexión
	//$conn->close(); 

} catch (PDOException $pe) {
	die("No pudo establecer conexion a " . __NAME_BD . " :" . $pe->getMessage());
	//die("Error!");
}

/*$conn = new PDO("mysql:host=".__HOST_BD.";dbname=".__NAME_BD, __USER_BD, __PASS_BD);*/