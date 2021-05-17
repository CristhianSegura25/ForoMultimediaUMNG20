
<?php
	session_start();
	require_once "conexionadb.php";

	$nombreingreso=$_POST['nombreingreso'];
	$passwordingreso=$_POST['passwordingreso'];

	session_start();

	$_SESSION['nombreingreso']=$nombreingreso;

	

	$resultado=mysqli_query($conn,$consulta);
	$filas=mysqli_num_rows($resultado);

	if($filas){
	
		header("location:home.php");

	}
	else{
		include("login.php");
?>
			<p class="error"><b>ERROR EN LA AUTENTIFICACION</b></p>

<?php
	mysqli_free_result($resultado);
	mysqli_close($conn);

?>