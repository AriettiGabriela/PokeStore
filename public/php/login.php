<?php
session_start();

$conexion = mysqli_connect("127.0.0.1:3308", "root", "");
mysqli_select_db($conexion, "pokemon");

$mail = $_POST["mail"];
$pass = $_POST["pass"];

$consulta = "SELECT * FROM users WHERE mail='$mail'";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) == 1) {
    $verificar = mysqli_fetch_assoc($resultado);
    if ($verificar['contra'] == $pass) {
        header("location: ../views/main.html");
        if ($verificar['permiso'] == 0) {
            header("location: ../views/main.html");
        } else {
            header("location: ../views/admin.html");
        }
    } else {
        header("location:../../index.html?error=1");
    }
} else {
    header("location:../../index.html?error=1");
}
