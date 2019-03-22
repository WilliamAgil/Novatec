<?php
    include "php/conexion.php";

    $enlace = mysqli_connect("localhost", "root", "", "db_novatecideas");
    
    
    if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }

   
    $Sql1="SELECT id_user,estado,votos FROM ideas ";  //WHERE estado ='aprobada'
    $consulta = mysqli_query($enlace, $Sql1)or die ('que paso ');
    // //$dato= mysqli_fetch_array($consulta) ;
      
    // //if( $dato["estado"] != 'propuesta'){
    //     echo 'idea fuera de etapa de estudio';
    // }

    // else{
    //     $Sql1 = "UPDATE ideas \n"
    //     . "     SET 	estado = IF(votos < \"12\",\"propuesta\",\"comite\"),\n"
    //     . "		votos =votos+1\n"
    //     . "     WHERE id_Idea = 19";

    
    //    mysqli_query($enlace, $Sql1);
    // }
    // echo '    prueba';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Example</title>
  <meta charset="utf-8">
  
</head>
<body>
<table>
  	
		<thead>
		<tr>
			<th>ID USUARIO</th>
			<th>ESTADO</th>
			<th>VOTOS</th>
			
		</tr>
		</thead>
    <?php while ($row = mysqli_fetch_array($consulta)){?>
        <tr>
        <td><?php echo $row["id_user"] ?></td>
        <td><?php echo $row["estado"] ?></td>
        <td><?php echo $row['votos'] ?></td>
       </tr>
        
    <?php
    } 
    
    ?>
        </table>
    </body>
</html>


<!-- 
mysqli_free_result($consulta);
    mysqli_close($enlace); -->