<?php
session_start();

$conexion = mysqli_connect("127.0.0.1:3308", "root", "");
mysqli_select_db($conexion, "pokemon");

$mail = $_POST["mail"];
$pass = $_POST["pass"];

$consulta = "SELECT * FROM users WHERE mail='$mail'";
$resultado = mysqli_query($conexion, $consulta);

