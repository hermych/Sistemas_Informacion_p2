<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="img/gotita.png" type="image/x-icon" href="imagenes/sh.ico">
	<link REL="StyleSheet" HREF="css/estilos_login.css" TYPE="text/css">

	<title>Sedapal</title>

<!-- fuente-->
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 

	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">


	
</head>
<body>
	<div class="conteiner">

		<div class="cont-login">

			<div class="div-logo"> 
				
				<img src="img/logo_sedapal.pe_.png" height="100" width="200" alt="">
				
			</div>
			
			
			<form class= "form"  action=""   onsubmit="return validar()">

					<h2>Bienvenido</h2>

					<div class="div-input" for="">
						<h3>Usuario:</h3>
						<input class="input" id="user"   type="text">
					</div>

					<div class="div-input" for="">
						<h3>Contraseña:</h3>
						<input class="input" id="pass"  type="password">
					</div>
						
					<input type="submit" value="Ingresar" class="btn"/>

					<div class="link-text">
						
						<a href="#">Restablecer Contraseña</a>
						
					</div>
			</form>

		</div>

	</div>
<script src="js/validarLogin.js"></script>
	<!-- alert sweet -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>
</html>