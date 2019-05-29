<?php 

include('common/utils.php');

if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}

$products = getProducts($conn);
$id= $_SESSION['user']['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro Producto</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="" crossorigin="anonymous">

</head>
<body>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	

	<div class="container">
  <div class="row">
    <div class="col-sm">
    	<h1>Bienvenido <?php echo $_SESSION['user']['usuario']; ?></h1>
    	<br>
    	
		<a  href="php/salir.php" class="btn btn-success">Cerrar Sesión</a>
    </div>
    <div class="col-sm">
    	<h1>Registro Producto</h1>
    	<form action="php/process_newproduct.php" method="post">
  <div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control"  placeholder="Nombre Producto..." name="nombre" required>
  </div>
  <div class="form-group">
    <label>Precio</label>
    <input type="text" class="form-control"  placeholder="Precio.." name="precio" required>
  </div>
  <div class="form-row">
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
<br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php foreach ($products as $p) { ?>
				<tr>
					<td><?php echo $p['nombre'] ?></td>
					<td><?php echo $p['precio'] ?></td>
				</tr>
			<?php } ?>
    </tr>
  </tbody>
</table>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>

<script src="js/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>
</body>
</html>