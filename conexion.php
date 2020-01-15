<?php
    $username = "";
    $password = "";
    $hostname = "";
    $db="";

    $conexion = mysqli_connect($hostname, $username, $password) or die("Unable to connect to MySQL");

    $selected = mysqli_select_db($conexion_old, $db) or die("Could not select database");

?>