<?php
require_once('bd_config.php');

try {
    
    $conn = new PDO("mysql:host=".__HOST_BD.";dbname=".__NAME_BD, __USER_BD, __PASS_BD);

	/*$conn->query("ALTER TABLE registros_digital ADD medialuna VARCHAR(10) NOT NULL");
		
	if($added !== FALSE)
	{
	   echo("The column has been added.");
	}else{
	   echo("The column has not been added.");
	}					     
	*/	
		
		$query="UPDATE registros set codigo_descuento ='ACTUAÑIZADO' where id='".$_REQUEST['id']."'";
		//echo($query);

		$conn->query($query);

		
		header("Location: gracias.html?success=ok");
		exit();


} catch (PDOException $pe) {
    die("No pudo establecer conexion a ".__NAME_BD." :" . $pe->getMessage());
}


