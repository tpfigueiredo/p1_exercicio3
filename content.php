<?php
	
	if(!empty($_GET['pg'])){
		$pagina = $_GET['pg'].".php";
		require("$pagina");
		}else{
			require("home.php");
			}
?>