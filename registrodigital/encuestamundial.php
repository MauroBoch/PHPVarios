<!DOCTYPE html>
<html>
<head>
	<title>Encuesta Mundial</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css"/>

</head>
<body>


<div style="width: 100%;background-color: #000;padding:10px;"><center><img src="https://costumbres.com.ar/wp-content/themes/costumbresar/img/costumbresar-logo.png"></center></div>
<br><br>
<center>
<div style="width: 80%">
    <table id="encuesta_qatar" class="display table" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>¿Te gustan nuestras Medialunas de manteca?</th>
                    <th>¿Te gustan nuestras Pizza?</th>
                    <th>¿Prefierís armar tu combo?</th>
                    <th>¿Probaste nuestras Hamburguesas?</th>                   
                </tr>
            </thead>
            <tbody>

<?php

require_once('bd_config.php');

try {
    
    $conn = new PDO("mysql:host=".__HOST_BD.";dbname=".__NAME_BD, __USER_BD, __PASS_BD);


        
        foreach ($conn->query("SELECT * FROM  encuesta_qatar;") as $row ){
            echo "<tr>  <td>".$row['id']."</td><td> ".$row['medialuna']."</td><td>".$row['pizza']."</td><td> ".$row['combo']."</td><td> ".$row['hamburguesas']."</td> </tr>";
        }
      
       
} catch (PDOException $pe) {
    die("No pudo establecer conexion a ".__NAME_BD." :" . $pe->getMessage());
}



?>


              
            </tbody>
           
        </table>
</div>
</center>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>


<script type="text/javascript">
    
    $(document).ready(function() {

setTimeout(function(){


    $('#encuesta_qatar').DataTable({
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



