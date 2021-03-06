<?php

	if (empty($_POST)) {
		require "form.php";
		die();
	}

	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	$lugar = $_POST['lugar'];
	$errores = [];

	if(empty($nombre) || !is_string($nombre)) {
		array_push($errores, "Debe ingresar un nombre.");
	}

	if(empty($edad) || !is_numeric($edad)) {
		array_push($errores, "Debe ingresar su edad.");
	}

	if(empty($lugar) || !is_string($lugar)) {
		array_push($errores, "Debe seleccionar un país.");
	}

	if (count($errores)) {

		if(count($errores) == 3) {
			array_unshift($errores, "Hay errores en todos los campos.");
		}
		
	require __DIR__.'/form.php';
	die();
	}

	$ok = "Sus datos se han enviado correctamente.";
	require __DIR__.'/vistas/procesar_vista.php'; 