<?php
	if(!empty($_GET['tl'])){
		$titulo = $_GET['tl'];
		echo "Você está em $titulo";
		}else{
			echo "Você está em Home";
			}
?>