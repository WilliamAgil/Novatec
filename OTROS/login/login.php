<?php session_start(); ?>
<html>
	<head>
        <title>Formulario de Registro</title>
        <style>

			body {
					
				background-image: url("img/bg.gif");


			}

            .lyr {
                padding: 220px 1300px 75px;
            }


            
			

	</style>

		
	</head>
	<body>
	

<div class="lyr">
		<h2>Login</h2>

		<form role="form" name="login" action="php/login.php" method="post">
		  <div class="form-group">
		    <label for="username">Nombre de usuario</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>
			<br>

		  <button type="submit" class="btn btn-default">Acceder</button>
			<br>
			<br>
			<button><a href="index.php">Volver</a></button>
		</form>

</div>
		<script src="js/valida_login.js"></script>
	</body>
</html>