<?php
$usernew = $_POST["usernew"];
$mailnew = $_POST["mailnew"];
$passnew = $_POST["passnew"];

$conexion = mysqli_connect("127.0.0.1:3308", "root", "");
mysqli_select_db($conexion, "pokemon");

$consulta = "SELECT * FROM users WHERE mail='$mailnew'";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) == 1) {
    header("location:../views/login.html?error=3");
} else {
    $alta = "INSERT INTO users (username,mail,contra,permiso) VALUE ('$usernew','$mailnew','$passnew','0')";

    $datos = mysqli_query($conexion, $alta);
    header("location:../views/login.html?error=2");
}