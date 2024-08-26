<?php
require_once('bd_config.php');

try {

	$conn = new PDO("mysql:host=" . __HOST_BD . ";dbname=" . __NAME_BD, __USER_BD, __PASS_BD);


	foreach ($conn->query("SELECT * FROM  registros WHERE email='" . $_REQUEST['email'] . "';") as $row) {
		echo "<script>alert('El email ya existe');window.location='index.php';</script>";
		die();
	}

	foreach ($conn->query("SELECT * FROM  registros WHERE telefono='" . $_REQUEST['telefono'] . "';") as $row) {
		echo "<script>alert('El numero de telefono ya existe');window.location='index.php';</script>";
		die();
	}

	$sql = "INSERT INTO registros (nombre,apellido,email,telefono,barrio) 
		values ('" . $_REQUEST['nombre'] . "', '" . $_REQUEST['apellido'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['telefono'] . "','" . $_REQUEST['barrio'] . "');";

	// Ejecutar la consulta

	if ($conn->query($sql) == true) {
		// Obtener el ID generado
		$last_id = $conn->lastInsertId();

		
		$sql = "select * from cupones where activo='1' order by id limit 1";
		foreach ($result = $conn->query($sql)as $row) 
			 {
				echo($sql );
				$codigo=$row["codigo_descuento"] ;
				
				$idcodigo=$row["id"] ;
				
				$sql = "update cupones set activo='0' where id=$idcodigo";
				echo($sql);
				$conn->query($sql);

				$sql = "INSERT INTO cupones_registros(id_registo, id_cupon) 
			    values ($last_id ,$idcodigo);";

				echo($sql);

				$conn->query($sql);


			}
		
		// Redireccionar a otra página con el ID en la URL
		$url = "Location: codigo.php?success=ok&id=$last_id&codigo=$codigo";
		header($url);
		exit();
	} else {
		echo "Error al insertar datos: ";
	}

	// Cerrar la conexión
	//$conn->close(); 

} catch (PDOException $pe) {
	die("No pudo establecer conexion a " . __NAME_BD . " :" . $pe->getMessage());
	//die("Error!");
}

/*$conn = new PDO("mysql:host=".__HOST_BD.";dbname=".__NAME_BD, __USER_BD, __PASS_BD);*/