<?php

if(!empty($_POST)){
	if(isset($_POST["rut"])&&isset($_POST["monto"])){
		if($_POST["rut"]!=""&&$_POST["monto"]!=""){
			include "conexion.php";
			
			$found=false;
			
			
			$sql = "INSERT INTO deposito(rut,saldo) VALUES ('$_POST[rut]','$_POST[monto]')";
				
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"deposito exitoso\");window.location='../depositar.php';</script>";
			}
		}
	}
}



?>