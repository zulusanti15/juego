<?php

include_once('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $producto = $_POST['producto'];
    $cliente = $_POST['nombre'];
    $montoSin = $_POST['montoSin'];
    $montoCon = $_POST['montoCon'];
    $descuento = $_POST['descuento'];

    //INSERTAR EN LA TABLA VENDER
    $sql = 'INSERT INTO venta(id, producto, cliente, montoSinDescuento, montoConDescuento, descuento) VALUES(NULL,?,?,?,?,?)';
    $resultado = $conexion->prepare($sql);
    $resultado->execute(array(strtolower($producto), strtolower($cliente), strtolower($montoSin), $montoCon, $descuento));
    $resp = $resultado->fetch();

    header('Location: index.php');
}
