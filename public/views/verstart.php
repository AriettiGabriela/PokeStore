<?php
$conexion = mysqli_connect("127.0.0.1:3308", "root", "");
mysqli_select_db($conexion, "pokemon");
$id = $_GET['id'];
$consulta = "SELECT * FROM starters WHERE id='$id'";
$repuesta = mysqli_query($conexion, $consulta);
$datos = mysqli_fetch_array($repuesta);
$img = $datos["img1"];
$nombre = $datos["nombre"];
$tipo = $datos["tipo"];
$region =$datos["region"];
$categoria =$datos["categoria"];
$habilidad =$datos["habilidad"];
$peso =$datos["peso"];
$altura =$datos["altura"];
$precio = $datos["precio"];
$link = $datos["link"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS del bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styledatos.css">
</head>

<body class="bodyframe">
    <section>
        <div class="container">
            <div class="row">
                <div class="ver">
                    <img class="imgver" src="<?php echo $img ?>">
                    <div class="titlever">
                        <h2 class="nombrever"><?php echo $nombre ?></h2>
                        <h3 class="modelover">Región: <?php echo $region ?></h3>
                        <h3 class="modelover">Tipo: <?php echo $tipo ?> Categoría: <?php echo $categoria ?></h3>
                        <h3 class="modelover">Habilidad: <?php echo $habilidad ?></h3>
                        <h3 class="modelover">Peso: <?php echo $peso ?> Altura: <?php echo $altura ?></h3>
                        <h3 class="preciover">$ <?php echo $precio ?></h3>
                        <button class="botonver"><a href="<?php echo $link ?>" target="_blank">COMPRAR </a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>