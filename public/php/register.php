<?php
$usernew = $_POST["usernew"];
$mailnew = $_POST["mailnew"];
$passnew = $_POST["passnew"];

$conexion = mysqli_connect("127.0.0.1:3308", "root", "");
            mysqli_select_db($conexion, "pokemon");

$alta = 'INSERT INTO users (username,mail,contra,permiso) VALUE ('$usernew','$mailnew','$passnew','0')';

$datos = mysqli_query($conexion, $alta);

if ($usernew != $usercontrol && $passnew != $passcontrol) {
    header("location:../../index.html?error=2");
}
?>