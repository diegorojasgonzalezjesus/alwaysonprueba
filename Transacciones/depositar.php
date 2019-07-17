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
		<h2>Depositar</h2>

		<form role="form" name="depositar" action="php/depositar.php" method="post">
			<div class="form-group">
				<label for="username">Ingrese el Rut a Depositar </label>
				<input type="text" class="form-control" id="rut" name="rut" placeholder="Ingrese el rut">
			 </div>
		  <div class="form-group">
		    <label for="username">Ingrese el Monto </label>
		    <input type="text" class="form-control" id="monto" name="monto" placeholder="Ingrese el Monto">
		  </div>
		  
		  <button type="submit" class="btn btn-default">Depositar</button>
		</form>
		</div>
		</div>
		</div>

		
	</body>
</html>