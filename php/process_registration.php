<?php

if (isset($_POST['nombre']) && 
	isset($_POST['rol']) &&
	isset($_POST['usuario']) && 
	isset($_POST['clave']) && 
	isset($_POST['confirmarclave'])) {

		$conn = new mysqli('localhost', 'root', '', 'examen');

		$nombre = $_POST['nombre'];
		$rol = $_POST['rol'];
		$usuario = $_POST['usuario'];
		$clave = $_POST['clave'];
		$confirmarclave = $_POST['confirmarclave'];

		if($clave == $confirmarclave){
    
            $sql_insert = "INSERT INTO usuario
		                (nombre, rol, usuario, clave)
		                VALUES ('$nombre', '$rol','$usuario',MD5('$clave'))";

		       
		       $resul= $conn->query($sql_insert);

                if ($conn->error) {
                    header('Location: ../registro.php?error_message=El nombre de usuario ya existe!');
                }else{
                header('Location: ../index.php?error_message=Tienda registrada exitosamente, puede iniciar sesion');
	            exit;
	        }
        }else{
            header('Location: ../registro.php?error_message=Las contraseñas no coinciden!');
		    exit;
	}
}


?>