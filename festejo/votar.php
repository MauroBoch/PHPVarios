<?php
$id= $_REQUEST['id'];
$legajo= $_REQUEST['legajo'];

 
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
        $sql = "SELECT * FROM  legajos WHERE documento=".$legajo;
        if (!$resultado = $mysqli->query($sql)) {
            // ¡Oh, no! La consulta falló. 
            echo "Lo sentimos, este sitio web está experimentando problemas.";
        
            // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
            // cómo obtener información del error
            echo "Documento invalido.";
            
            exit;
        }

 if ($resultado->num_rows === 0) {
            // ¡Oh, no ha filas! Unas veces es lo previsto, pero otras
            // no. Nosotros decidimos. En este caso, ¿podría haber sido
            // actor_id demasiado grande? 
            echo "El usuario ingresado no esta registrado para votar.";
           exit;
  }

 // Realizar una consulta SQL
        $sql = "select * from Dibujos where id=$id and seccion not in(select distinct  seccion from Dibujos where id in (SELECT id FROM `votos` WHERE documento=$legajo))";
       
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

 if ($resultado->num_rows === 0) {
            // ¡Oh, no ha filas! Unas veces es lo previsto, pero otras
            // no. Nosotros decidimos. En este caso, ¿podría haber sido
            // actor_id demasiado grande? 
            echo "Usted ya voto en esta categoria.";
           exit;
  }


 $sql = "INSERT INTO `votos`(`id`, `documento`) VALUES ($id,$legajo)";
if ($mysqli->query($sql) === TRUE) {
  echo "Gracias por participar.";
exit;
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
exit;
}


?>