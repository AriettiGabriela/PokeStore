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
        <h2 id="h2form">CARGAR NUEVO POKEMON</h2>
        <form action="" method="post" enctype="multipart/form-data" class="formmod">
            <label># EN LA POKEDEX</label>
            <input type="text" name="id">
            <br><br>
            <label>NOMBRE</label>
            <input type="text" name="nombre">
            <br><br>
            <label>TIPO</label>
            <input type="text" name="tipo">
            <br><br>
            <label>REGION</label>
            <input type="text" name="region">
            <br><br>
            <label>HABILIDAD</label>
            <input type="text" name="habilidad">
            <br><br>
            <label>CATEGORIA</label>
            <input type="text" name="categoria">
            <br><br>
            <label>ALTURA</label>
            <input type="text" name="altura">
            <br><br>
            <label>PESO</label>
            <input type="text" name="peso">
            <br><br>
            <label>PRECIO</label>
            <input type="text" name="precio">
            <br><br>

            <input type="submit" name="guardar_cambios" value="Cargar Pokemon">
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
        $newpeso = (float)$_POST['peso'];
        $newaltura = (float)$_POST['altura'];
        $newprecio = (float)$_POST['precio'];

        $conexion = mysqli_connect("127.0.0.1:3308", "root", "");
        mysqli_select_db($conexion, "pokemon");
        $consulta = "INSERT INTO starters (id,nombre,tipo,region,altura,peso,categoria,habilidad,precio) VALUES ('$newid','$newnombre','$newtipo', '$newregion','$newaltura','$newpeso','$newcategoria','$newhabilidad','$newprecio')";

        mysqli_query($conexion, $consulta);

        header('location: tablastarters.php', '_self');
    } ?>

</body>

</html>