<?php
$usernew = $_POST["usernew"];
$mailnew = $_POST["mailnew"];
$passnew = $_POST["passnew"];

$conexion = mysqli_connect("127.0.0.1:3308", "root", "");
mysqli_select_db($conexion, "pokemon");

$consulta = 'SELECT mail FROM users';
$datos1 = mysqli_query($conexion, $consulta);

while ($mails = mysqli_fetch_array($datos1)) {
    if ($mailnew == $mails['mail']) {
        header("location:../../index.html?error=3");
    } else {
        $alta = "INSERT INTO users (username,mail,contra,permiso) VALUE ('$usernew','$mailnew','$passnew','0')";

        $datos = mysqli_query($conexion, $alta);
        header("location:../../index.html?error=2");
    }
}
