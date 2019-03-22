<?php
    include "php/conexion.php";

    $enlace = mysqli_connect("localhost", "root", "", "db_novatecideas");
    
    
    if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }

   
    $Sql1="SELECT estado FROM ideas WHERE id_Idea =19";
    $consulta = mysqli_query($enlace, $Sql1)or die ('Error');
    $dato= mysqli_fetch_array($consulta) ;
      
   
   

    if( $dato["estado"] != 'propuesta'){
        echo 'idea fuera de etapa de estudio';
    }

    else{
        $Sql1 = "UPDATE ideas \n"
        . "     SET 	estado = IF(votos < \"12\",\"propuesta\",\"comite\"),\n"
        . "		votos =votos+1\n"
        . "     WHERE id_Idea = 19";

    
       mysqli_query($enlace, $Sql1);
    }
    echo '    prueba';
    
    
    mysqli_free_result($consulta);
    mysqli_close($enlace);
?>

       
             
       
