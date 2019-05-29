<?php 
if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="" crossorigin="anonymous">

</head>
<body>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	

	<div class="container">
  <div class="row">
    <div class="col-sm">

    </div>
    <div class="col-sm">
    	<h1>Registro De Usuarios</h1>
    	<form action="php/process_registration.php" method="post">
  <div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control"  placeholder="Nombre..." name="nombre" required>
  </div>
  <div class="form-group">
    <label>Tipo De Usuario</label>
    <select name="rol" class="custom-select">
  <option selected>Seleccione usuario</option>
  <option value="usuario">Cliente</option>
  <option value="administrador">Adminisrador</option>
</select>
  </div>
  <div class="form-group">
    <label>Nombre De Usuario</label>
    <input type="text" class="form-control"  placeholder="Nombre Usuario..." name="usuario" required>
  </div>
  <div class="form-group">
      <label>Contraseña</label>
      <input type="password" class="form-control"  placeholder="Contraseña..." name="clave" required>
    </div>
    <div class="form-group">
      <label>Confirmar Contraseña</label>
      <input type="password" class="form-control" placeholder="Confirmar Contraseña" name="confirmarclave" required>
    </div>
  <div class="form-row">
    
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>
<script src="js/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>
</body>
</html>