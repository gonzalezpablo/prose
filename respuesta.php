<?php

	$usuNombre = $_POST['usuNombre'];
	$usuPass = $_POST['usuPass'];
	$mensaje= "";

	if($usuNombre === 'ana@gmail.com' AND $usuPass === '1234'){


		header("Location: https://siter.google.com/view/proyecto-ecuaor/inicio");
	}else{
		header("Location: formLogin1.php");
	}




?>