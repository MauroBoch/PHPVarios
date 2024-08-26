<?php
require_once('bd_config.php');

try {
	session_start();

	if (!isset($_SESSION['usuario'])) {
		$url = "Location: login.php";
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

	$conn = new PDO("mysql:host=" . __HOST_BD . ";dbname=" . __NAME_BD, __USER_BD, __PASS_BD);

	$idcodigo = 0;
	$codigovalido = false;
	$codigovalidotelefono = false;
	$codigoutilizado = false;

	$sql = "SELECT * from cupones where codigo_descuento='" . $_REQUEST['cupon'] . "';";
	echo ($sql);
	foreach ($conn->query($sql) as $row) {
		$codigovalido = true;
		$idcodigo = $row["id"];
	}

	if ($codigovalido == false) {
		$sql = "SELECT cupones.* FROM registros
		JOIN  cupones_registros ON registros.id=cupones_registros.id_registo
		JOIN  cupones ON cupones.id=cupones_registros.id_cupon
		WHERE telefono='" . $_REQUEST['cupon'] . "';";
		echo ($sql);
		foreach ($conn->query($sql) as $row) {
			$codigovalido = true;
			$codigovalidotelefono = true;
			$idcodigo = $row["id"];
		}
	}


	$sql = "SELECT * FROM  cupones_usuarios WHERE id_cupon=" . $idcodigo . ";";
	echo ($sql);
	foreach ($conn->query($sql) as $row) {
		$codigoutilizado = true;
	}




	if ($codigovalido == true) {
		if ($codigoutilizado ==	true) {
			$url = "Location: validarcodigo.php?mensaje=El codigo ya fue utilizado.";
			header($url);
			exit();
		} else {
			$sql = "INSERT INTO cupones_usuarios(id_usuario, id_cupon) 
			values ($idusuario ,$idcodigo);";

			echo ($sql);
			$conn->query($sql);
			if ($codigovalidotelefono) {
				$url = "Location: validarcodigo.php?mensaje=Cupon validado por telefono.";
			} else {
				$url = "Location: validarcodigo.php?mensaje=Cupon valido";
			}

			header($url);
			exit();
		}
	} else {
		$url = "Location: validarcodigo.php?mensaje=El codigo es invalido";
		header($url);
		exit();
	}
} catch (PDOException $pe) {
	die("No pudo establecer conexion a " . __NAME_BD . " :" . $pe->getMessage());
	//die("Error!");
}

/*$conn = new PDO("mysql:host=".__HOST_BD.";dbname=".__NAME_BD, __USER_BD, __PASS_BD);*/