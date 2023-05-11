<?php

$usuarioCon = 'root';
$contraCon = '';

try {
    $conexion = new PDO("mysql:host=localhost;dbname=juegos;", "root", "");
} catch (PDOException $e) {
    print "Error en conexion";
    die();
}

/* $conexion = new mysqli("localhost", "root", "", "pruebabd"); */
