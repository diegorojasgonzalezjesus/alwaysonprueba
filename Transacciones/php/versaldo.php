<?php

if(!empty($_POST)){
	if(isset($_POST["username"])){
		if($_POST["username"]!=""){
			include "conexion.php";
			
			$sql1= "select * from loginusuario where rut ='$_POST[username]' inner join deposito on loginusuario.rut=deposito.rut ";
			$resultado=mysql_query($sqll);
			$query = include->query($sql1);
			while ($r=$query->fetch_array($resultado)) {
				echo "<p>El saldo disponible <b> ".$r['saldo'];
				
			}
						

		}
	}
}



?>