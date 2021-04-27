
<?php
	require_once "conexionadb.php";

	$nombreingreso=$_POST['nombreingreso'];
	$passwordingreso=$_POST['passwordingreso'];
	session_start();
	$_SESSION['nombreingreso']=$nombreingreso;
	$consulta="SELECT*FROM Lista_Usuarios where ((usuario='$nombreingreso') or (correo='$nombreingreso'))AND contrasena='$passwordingreso'";
	$resultado=mysqli_query($conexion,$consulta);
	$filas=mysqli_num_rows($resultado);

	if($filas){
	
		header("location:home.php");

	}
	else{
		include("login.php");
?>
			<p class="error"><b>ERROR EN LA AUTENTIFICACION</b></p>

<?php
	}
	mysqli_free_result($resultado);
	mysqli_close($conexion);

?>