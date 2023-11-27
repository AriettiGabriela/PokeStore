<?php
$conexion = mysqli_connect("127.0.0.1:3308", "root", "");
mysqli_select_db($conexion, "pokemon");

$id = $_GET['id'];
$consulta = "SELECT * FROM starters WHERE id='$id'";
$respuesta = mysqli_query($conexion, $consulta);
$datos = mysqli_fetch_array($respuesta);

$nombre = $datos["nombre"];
$tipo = $datos["tipo"];
$region = $datos["region"];
$categoria = $datos["categoria"];
$habilidad = $datos["habilidad"];
$peso = $datos["peso"];
$altura = $datos["altura"];
$precio = $datos["precio"];

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
        <h2 id="h2form">INGRESAR NUEVOS DATOS</h2>
        <form action="" method="post" enctype="multipart/form-data" class="formmod">
            <label># EN LA POKEDEX</label>
            <input type="text" name="id" value="<?php echo "$id"; ?>">
            <br><br>
            <label>NOMBRE</label>
            <input type="text" name="nombre" value="<?php echo "$nombre"; ?>">
            <br><br>
            <label>TIPO</label>
            <input type="text" name="tipo" value="<?php echo "$tipo"; ?>">
            <br><br>
            <label>REGION</label>
            <input type="text" name="region" value="<?php echo "$region"; ?>">
            <br><br>
            <label>CATEGORIA</label>
            <input type="text" name="categoria" value="<?php echo "$categoria"; ?>">
            <br><br>
            <label>HABILIDAD</label>
            <input type="text" name="habilidad" value="<?php echo "$habilidad"; ?>">
            <br><br>
            <label>PESO</label>
            <input type="text" name="peso" value="<?php echo "$peso"; ?>">
            <br><br>
            <label>ALTURA</label>
            <input type="text" name="altura" value="<?php echo "$altura"; ?>">
            <br><br>
            <label>PRECIO</label>
            <input type="text" name="precio" value="<?php echo "$precio"; ?>">
            <br><br>
            <input type="submit" name="guardar_cambios" value="Guardar Cambios">
            <button type="submit" name="Cancelar" formaction="tablastarters.php">Cancelar</button>
        </form>
    </div>
    <?php
    // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
    if (array_key_exists('guardar_cambios', $_POST)) {

        $newid = $_POST['id'];
        $newnombre = $_POST['nombre'];
        $newtipo = $_POST['tipo'];
        $newregion = $_POST['region'];
        $newcategoria = $_POST['categoria'];
        $newhabilidad = $_POST['habilidad'];
        $newpeso = $_POST['peso'];
        $newaltura = $_POST['altura'];
        $newprecio = $_POST['precio'];

        $consulta = "UPDATE starters SET nombre='$newnombre', tipo='$newtipo', region='$newregion', categoria='$newcategoria', habilidad='$newhabilidad', peso='$newpeso', altura='$newaltura', precio='$newprecio' WHERE id=$id";

        mysqli_query($conexion, $consulta);

        header('location: tablastarters.php', '_self');
    } ?>

</body>

</html>