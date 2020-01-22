<?php

include 'conexion.php';

// Recogida de parámetros GET
$funcion = $_GET["func"];

echo ("Nos pide los datos de la función...: ".$funcion."<br />");

// switch para desviar a una u otra función
if($funcion == 'getUsuarios'){
    getUsuarios($conexion);
}elseif($funcion == 'getComics'){
    getComics($conexion);
}elseif ($funcion == 'getCaracteres') {
    getCaracteres($conexion);
}elseif ($funcion == 'getUsuarioById') {
    getUsuarioById($conexion);
}



function getUsuarios($conexion){
    $sql = "SELECT * FROM usuarios";
    $sel = mysqli_query($conexion, $sql);

    $data = array();
	while ($row = mysqli_fetch_assoc($sel)) {
        //print_r($row);
		$data[] = $row;
	}

	$response = array(
        "data" => $data
    );

    echo json_encode($response);
}

function getUsuarioById($conexion){
    $id = $_GET["id"];
    $sql = "SELECT * FROM usuarios where id = $id";
    $sel = mysqli_query($conexion, $sql);

    $data = array();
	while ($row = mysqli_fetch_assoc($sel)) {
        //print_r($row);
		$data[] = $row;
	}

	$response = array(
        "data" => $data
    );

    echo json_encode($response);
}

function getComics($conexion){
    $sql = "SELECT * FROM comics";
    $sel = mysqli_query($conexion, $sql);

    $data = array();
	while ($row = mysqli_fetch_assoc($sel)) {
        //print_r($row);
		$data[] = $row;
	}

	$response = array(
        "data" => $data
    );

    echo json_encode($response);
}

function getCaracteres($conexion){
    $sql = "SELECT * FROM caracteres";
    $sel = mysqli_query($conexion, $sql);

    $data = array();
	while ($row = mysqli_fetch_assoc($sel)) {
        //print_r($row);
		$data[] = $row;
	}

	$response = array(
        "data" => $data
    );

    echo json_encode($response);
}


?>
