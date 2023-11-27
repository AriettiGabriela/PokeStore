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
        <h2 id="h2form">CARGAR NUEVO PRODUCTO</h2>
        <form action="" method="post" enctype="multipart/form-data" class="formmod">
            <label>NOMBRE</label>
            <input type="text" name="nombre">
            <br><br>
            <label>MODELO</label>
            <input type="text" name="modelo">
            <br><br>
            <label>PRECIO</label>
            <input type="text" step=".01" name="precio">
            <br><br>
            <input type="submit" name="guardar_cambios" value="Cargar Producto">
            <button type="submit" name="Cancelar" formaction="tablaprod.php">Cancelar</button>
        </form>
    </div>
    <?php
    // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
    if (array_key_exists('guardar_cambios', $_POST)) {


        $newnombre = $_POST['nombre'];
        $newmodelo = $_POST['modelo'];
        $newprecio = (float)$_POST['precio'];

        $conexion = mysqli_connect("127.0.0.1:3308", "root", "");
        mysqli_select_db($conexion, "pokemon");
        $consulta = "INSERT INTO productos (id,nombre,modelo,precio) VALUES ('','$newnombre','$newmodelo','$newprecio')";
        mysqli_query($conexion, $consulta);

        header('location: tablaprod.php', '_self');
    } ?>

</body>

</html>