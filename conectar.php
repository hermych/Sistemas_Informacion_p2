<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	session_start();

	$_SESSION['username']=$username;

	// include('database.php');
	$conexion = mysqli_connect("localhost","root","","bdsistemacomercial");
	$consulta = "SELECT * FROM usuario where username = '$username' and password = '$password'";

	$resultado= mysqli_query($conexion, $consulta);

	$filas = mysqli_num_rows($resultado);

	if ($filas) {
		# code...
		header("location:bienvenido.php");
	}else{
?>
<?php
	include("index.php");
?>
	<script>
		alert("Acceso no autorizado");
	</script>
<?php 
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>