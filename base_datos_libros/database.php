<?php
$servidor = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_datos = 'libros';

$conexion = new Mysqli ($servidor, $usuario, $contrasena, $base_datos)
    or die ("Error en conexion");
?>