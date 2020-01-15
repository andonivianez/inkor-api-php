<?php

include 'conexion.php';

// Recogida de parámetros GET
$funcion = $_GET["func"];

echo ("Nos pide los datos de la función...: ".$funcion."<br />");

// switch para desviar a una u otra función
if($funcion == 'getUsuarios'){
    getUsuarios($conexion);
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


?>
