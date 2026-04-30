<?php
$host = "localhost";
$usuario = "a25josguapat_apidaw";
$contrasenia = "Y0992759r";
$base_de_datos = "a25josguapat_apidaw";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;
