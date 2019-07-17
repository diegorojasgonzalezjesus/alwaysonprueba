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
		<h2>Saldo Disponible</h2>

		<form role="form" name="registro" action="php/versaldo.php" method="post">
		  <div class="form-group">
		    <label for="username">Ingrese su RUT </label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Ingrese su Rut">
		  </div>
		  <button type="submit" class="btn btn-default">ver saldo</button>
		  <div id="result"></div>
		</form>
		</div>
		</div>
		</div>
	<script type="text/javascript" src="js/versaldo.js"></script>
	</body>
</html>