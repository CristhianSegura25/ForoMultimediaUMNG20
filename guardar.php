<?php
require_once "conexionadb.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(!empty(trim($_POST["usuario"])) && !empty(trim($_POST["correo"])) && !empty(trim($_POST["contrasena"]))){
		$usuario=$_POST['usuario'];
		$correo=$_POST['correo'];
		$contrasena=$_POST['contrasena'];

		// $pincript=password_hash($contrasena,PASSWORD_DEFAULT);

		$sql="SELECT usuario,correo from Lista_Usuarios where usuario='$usuario'AND correo='$correo'";
		$repetido=$conexion->query($sql);
		if(mysqli_num_rows($repetido)>0){
			echo "ERROR:USUARIO/CORREO YA EN USO";
			die;
		}

		$sql="INSERT INTO Lista_Usuarios(usuario,correo,contrasena) VALUES ('$usuario','$correo','$contrasena')";

		if($conexion->query($sql)===false){
			die($conexion->error);
		}
	}
}

?>