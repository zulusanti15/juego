<?php

include_once("conexion.php");

$sentecia = "SELECT * FROM producto";
/* $sentecia = "SELECT * FROM producto WHERE consola LIKE '%" . $producto_criteria . "%'"; */
$spmd = $conexion->prepare($sentecia);
$spmd->execute();
$datos = array();

while ($row = $spmd->fetch(PDO::FETCH_ASSOC)) {

    $datos[] = $row;
}
echo json_encode($datos);
