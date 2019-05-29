<?php 
session_start();
$conn = new mysqli('localhost', 'root', '', 'examen');
if($conn->connect_error) {
	echo 'Existió un error en la conexión ' . $conn->connect_error;
	exit;
}
function redirect($url) {
	header('Location: ' . $url);
	exit;
}
function getProducts($conn) {
	$user_id = $_SESSION['user']['id'];
	$sql = "SELECT *
		FROM producto
		WHERE id_fk='$user_id'";
		$res = $conn->query($sql);
		if ($conn->error) {
			redirect('../admin.php?error_message=Ocurrió un error: ' . $conn->error);
		}
		$products = [];
		if($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {
				$products[] = $row;
			}
		}
		return $products;
}

if ($_SERVER['SCRIPT_NAME'] != '/clase-9-examen-Arom96/index.php' && $_SERVER['SCRIPT_NAME'] != '/clase-7-prueba-Arom96/php/proceso_login.php' && !isset($_SESSION['user'])) {
	redirect($_SERVER["HTTP_HOST"] . '/clase-9-examen-Arom96/index.php');
} elseif( $_SERVER['SCRIPT_NAME'] == '/clase-9-examen-Arom96/index.php' && isset($_SESSION['user']) ) {

	redirect($_SERVER["HTTP_HOST"] . '/clase-9-examen-Arom96/inicio.php');
}