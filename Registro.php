<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="diseno.css">
	<link rel="shortcut icon" href="Luna.png">
	<title>Registrarse</title>
</head>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v16.0" nonce="wPvOnI6o"></script>
<body>
	<div class="registro">
	<table border="2px">
		<caption>¡Registrate a nuestro NightCare!</caption>
		<tr>
			<td>
				<?php
					include("conexion.php");
					
					$con = conectar();

					echo "Se realizó exitosamente la conexíón";
				?>
				<form action="index.html">
					<p>Identidad</p><input type="text" name="ID" placeholder="Sin guiones ni espacios"><br>
					<p>Nombre:</p> <input type="text" name="Nombre" placeholder="Jorge Portillo"><br>
					<p>Parentesco:</p> 
					<select>
						<option selected>-</option>
						<option>Padre</option>
						<option>Madre</option>
						<option>Hermano/Hermana</option>
						<option>Tutor/Tutora</option>
					</select><br>
					<p>Teléfono:</p> <input type="tel" name="telefono" placeholder="Importante"><br>
					<p>Telefono Secundario:</p> <input type="tel" name="telefono2" placeholder="Recomendado"><br>
					<h2><b>Datos del Niño:</b></h2> 
					<p>Identidad del niño</p><input type="text" name="ID_N" placeholder="SIn guiones ni espacios"><br>
					<p>Nombre:</p> <input type="text" name="Nombre-nino" placeholder="Jorgito Jr"><br>
					<p>Fecha de Nacimiento:</p> <input type="date" name="Nacimiento" placeholder=""><br>
					<p>Género:</p> 
					<select>
						<option selected>Elija una opción</option>
						<option>Masculino</option>
						<option>Femenino</option>
					</select><br>
					<p>Correo electrónico:</p><input type="email" name="user" placeholder="usuario@gmail.com"><br>
					<p>Contraseña:</p><input type="password" name="contrasena"><br> 
					<h4>Acepto términos y condiciones establecidos por NightCare</h4> <input type="checkbox" name="TyC">
					<br><br>
					<input type="submit" name="Aceptar" placeholder="Aceptar" value="Aceptar">
				</form>
			</td>
		</tr>
		<tr>
			<td>
				<p>¿Ya tienes cuenta? </p><a style="text-decoration: none ; color: #FFC300;" href="login.html"><b>Iniciar Sesión</b></a></span>
			</td>
		</tr>
	</table>
	</div>
</body>
</html>