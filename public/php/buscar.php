<?php
session_start();
$conexion = mysqli_connect("127.0.0.1:3308", "root", "");
mysqli_select_db($conexion, "pokemon");

$buscar = $_POST["buscar"];
ucfirst(strtolower($buscar));

$consulta = "SELECT * FROM productos WHERE nombre='$buscar'";
$resultado = mysqli_query($conexion, $consulta);
$consulta2 = "SELECT * FROM productos WHERE modelo='$buscar'";
$resultado2 = mysqli_query($conexion, $consulta2);
$consulta3 = "SELECT * FROM starters WHERE nombre='$buscar'";
$resultado3 = mysqli_query($conexion, $consulta3);
$consulta4 = "SELECT * FROM starters WHERE tipo='$buscar'";
$resultado4 = mysqli_query($conexion, $consulta4);
$consulta5 = "SELECT * FROM starters WHERE region='$buscar'";
$resultado5 = mysqli_query($conexion, $consulta5);
$consulta6 = "SELECT * FROM starters WHERE categoria='$buscar'";
$resultado6 = mysqli_query($conexion, $consulta6);
$consulta7 = "SELECT * FROM starters WHERE habilidad='$buscar'";
$resultado7 = mysqli_query($conexion, $consulta7);

if (mysqli_num_rows($resultado) >= 1) {
    header("location: https://github.com/AriettiGabriela/PokeStore");
} elseif (mysqli_num_rows($resultado2) >= 1) {
} elseif (mysqli_num_rows($resultado3) >= 1) {
} elseif (mysqli_num_rows($resultado4) >= 1) {
} elseif (mysqli_num_rows($resultado5) >= 1) {
} elseif (mysqli_num_rows($resultado6) >= 1) {
} elseif (mysqli_num_rows($resultado7) >= 1) {
} else {
    header("location: https://getbootstrap.com/docs/5.3/forms/overview/");
}
