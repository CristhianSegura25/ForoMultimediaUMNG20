<?php
require_once "conexionadb.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(!empty(trim($_POST["usuario"])) && !empty(trim($_POST["correo"])) && !empty(trim($_POST["contrasena"]))){
		$usuario=$_POST['usuario'];
		$correo=$_POST['correo'];
		$contrasena=$_POST['contrasena'];

		$sql="SELECT usuario,correo from Lista_Usuarios where usuario='$usuario'AND correo='$correo'";
		$repetido=$conn->query($sql);
		if(mysqli_num_rows($repetido)>0){
			echo "ERROR:USUARIO/CORREO YA EN USO";
			die;
		}
		else{
		?><script>
        	window.alert("Se registro Correctamente");
      	</script>
      	<?php
		}
		$sql="INSERT INTO Lista_Usuarios(usuario,correo,contrasena,tipo) VALUES ('$usuario','$correo','$contrasena','0')";
		?>
		
		<?php
		if($conn->query($sql)===false){
			die($conn->error);
		}
	}
}

?>