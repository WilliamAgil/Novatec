<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>
	<head>
        <title>.: CUENTA :.</title>
        
        <style>

            .wel {

                padding: center;
            }

	</style>


		
	</head>
	<body>
	

<div class="wel">
		<h2>Bienvenido a tu perfil</h2>
		<br>
		<br>




</div>

	<button><a href="./php/logout.php">Salir</a></button>
	</body>
</html>