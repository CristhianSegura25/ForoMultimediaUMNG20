
<?php
	session_start();
	require_once "conexionadb.php";

	$nombreingreso=$_POST['nombreingreso'];
	$passwordingreso=$_POST['passwordingreso'];

	$_SESSION['nombreingreso']=$nombreingreso;

	$consulta2="SELECT*FROM Lista_Usuarios where ((usuario='$nombreingreso') or (correo='$nombreingreso'))AND contrasena='$passwordingreso'";
	$consultadmin2="SELECT tipo FROM Lista_Usuarios";
	if($f2=mysqli_fetch_array($consulta2)){
		if($consultadmin2==1){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo'<script>alert("BIENVENIDO ADMINISTRADOR")</script>';
			echo "<script>location.href='home.php'</";
		}
	}

	$sql=mysql_query("SELECT * FROM login WHERE email='$nombreingreso'");
	if($f=mysqli_fetch_array($sql)){
		if($passwordingreso==$f['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			header("Localizacion: index2.php"):
		}
		else{
			echo '<script> alert("Contraseña Incorrecta") </script>';

			echo "<script> location.href='home.php' </script>"
		}
	}
	else{
		echo '<script> alert("Este usuario no existe, por favor registrarse para poder ingresar") </script>'

		echo "<script> location.href='home.php' </script>"
	}

	

	$consulta="SELECT*FROM Lista_Usuarios where ((usuario='$nombreingreso') or (correo='$nombreingreso'))AND contrasena='$passwordingreso'";
	$consultadmin="SELECT tipo FROM Lista_Usuarios";
	if($f=mysqli_fetch_array($consulta)){
		if($consultadmin==0){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			header("location:home.php");
		}
	}
	$resultado=mysqli_query($conexion,$consulta);
	// $filas=mysqli_num_rows($resultado);

	// if($filas){
	
	// 	header("location:home.php");

	// }
	// else{
	// 	include("login.php");
?>
		<!-- 	<p class="error"><b>ERROR EN LA AUTENTIFICACION</b></p> -->

<?php
	mysqli_free_result($resultado);
	mysqli_close($conexion);

?>