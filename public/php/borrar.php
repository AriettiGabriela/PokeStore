<?php
$conexion = mysqli_connect("127.0.0.1:3308", "root", "");
mysqli_select_db($conexion, "pokemon");

$id = $_GET['id'];