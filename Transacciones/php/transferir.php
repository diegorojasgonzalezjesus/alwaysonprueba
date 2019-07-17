<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["monto"]) ){
		if($_POST["username"]!=""&&$_POST["monto"]!=""){
			include "conexion.php";
			
			$found=false;
			
			$sql = "INSERT INTO loginusuario(rut) VALUES ('$_POST[username]')";
			$sql = "INSERT INTO deposito(rut) VALUES ('$_POST[username]')";	
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../login.php';</script>";
			}
		}
	}
}



?>