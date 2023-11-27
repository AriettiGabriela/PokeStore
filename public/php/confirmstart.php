<?php
$conexion = mysqli_connect("127.0.0.1:3308", "root", "");
mysqli_select_db($conexion, "pokemon");

$id = $_GET['id'];
$consulta = "SELECT * FROM starters WHERE id='$id'";
$respuesta = mysqli_query($conexion, $consulta);
$datos = mysqli_fetch_array($respuesta);
$nombre =$datos["nombre"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS del bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleMain.css">
</head>

<body id="tablas">
    <div class="estilomod">
        <h2 id="h2form">¿ESTAS SEGURO QUE DESEAS ELIMINAR <?php echo strtoupper($nombre); ?>?</h2>
        <h3>ESTA ACCIÓN NO PUEDE DESHACERSE</h3>
        <div class="btnborrar">
            <a href="borrarstarter.php?id=<?php echo $id; ?>" target="ventanatablas" class="atablaborrar">ELIMINAR</a>
            <a href="tablastarters.php" target="ventanatablas" class="atabla">CANCELAR</a>
        </div>
    </div>
</body>