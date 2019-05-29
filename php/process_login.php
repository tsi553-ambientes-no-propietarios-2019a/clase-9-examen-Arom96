<?php 

if($_POST) {
	if (isset($_POST['usuario']) 
		&& isset($_POST['clave']) 
		&& !empty($_POST['usuario']) 
		&& !empty($_POST['clave'])) {

		$conn = new mysqli('localhost', 'root', '', 'examen');

		$usuario = $_POST['usuario'];
		$clave = $_POST['clave'];

		$sql = "SELECT *
		FROM usuario
		WHERE usuario='$usuario'
		AND clave=MD5('$clave')";

		$res = $conn->query($sql);

		if ($conn->error) {
			header("Local: ../index.php?error_message=Ocurrió un error: " . $conn->error);
		}

		if($res->num_rows > 0) {
				while ($row = $res->fetch_assoc()) {
					$_SESSION['user'] = [
						'rol' => $row['rol'],
						'usuario' => $row['usuario'],
						'id' => $row['id']
					];
					$rol = $_SESSION['user']['rol'];
					if ($rol=='administrador') {
						header("Local: ../admin.php");
					}elseif ($rol=='cliente') {
						header("Local: ../cliente.php");
					}
			
				}
		} else {
			header("Local:../index.php?error_message=Usuario o clave incorrectos! ");
		}


	} else {
		header("Local: ../index.php?error_message=Ingrese todos los datos!");
	}
} else {
	header("Local: ../index.php");
}