<?php 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="" crossorigin="anonymous">

</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
    <h1>Iniciar Sesión</h1>
      <form action="php/process_login.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" class="form-control" placeholder="Ingrese nombre de usuario" name="usuario" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" placeholder="Contraseña" name="clave" required>
  </div>
  <button type="submit" class="btn btn-primary">Iniciar</button>
</form>
<br>
<form action="registro.php">
	<button type="submit" class="btn btn-primary">Registrar Usuario</button>
</form>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>

<script src="js/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>
</body>
</html>

