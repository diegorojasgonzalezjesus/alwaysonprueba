<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navinet.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Transferir entre Cuentas</h2><br>

		<form role="form" name="registro" action="php/registro.php" method="post">
		  <div class="form-group">
		    <label for="username">Ingrese el RUT al cual quiere Depositar </label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Ingresar el Rut">
		  </div>
		  <div class="form-group">
		    <label for="username"> Monto a Depositar </label>
		    <input type="text" class="form-control" id="monto" name="monto" placeholder="Ingresar el Monto">
		  </div>
		  
		  <button type="submit" class="btn btn-default">Transferir</button>
		</form>
		</div>
		</div>
		</div>

		<script src="js/valida_registro.js"></script>
	</body>
</html>