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


                <?php
                $conexion = mysqli_connect("127.0.0.1:3308", "root", "");
                mysqli_select_db($conexion, "pokemon");

                $consulta1 = 'SELECT * FROM productos';
                $datos1 = mysqli_query($conexion, $consulta1);
                $consulta2 = 'SELECT * FROM starters';
                $datos2 = mysqli_query($conexion, $consulta2);
                while ($reg = mysqli_fetch_array($datos1)) { ?>
                    <div class="card">
                        <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen']) ?>">
                        <a href="ver.php?id=<?php echo $reg['id']; ?>" class="card-body">
                            <h3 class="card-title"><?php echo ucwords($reg['nombre']) ?></h3>
                            <span>$ <?php echo $reg['precio']; ?></span>
                        </a>
                    </div>
                <?php }
                while ($reg2 = mysqli_fetch_array($datos2)) { ?>
                    <div class="card">
                        <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg2['imagen']) ?>">
                        <a href="ver.php?id=<?php echo $reg2['id']; ?>" class="card-body">
                            <h3 class="card-title"><?php echo ucwords($reg2['nombre']) ?></h3>
                            <span>$ <?php echo $reg2['precio']; ?></span>
                        </a>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </section>
    <!-- JavaScript del bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>