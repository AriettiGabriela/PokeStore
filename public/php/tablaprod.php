<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Arietti Gabriela">
    <link rel="shortcut icon" href="../img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleMain.css">
    <title>Bienvenidos entrenadores!</title>
</head>

<body id="tablas">
    <div class="conTabla">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">MODELO</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">MODIFICAR</th>
                    <th scope="col">BORRAR</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conexion = mysqli_connect("127.0.0.1:3308", "root", "");
                mysqli_select_db($conexion, "pokemon");
                $consulta = 'SELECT * FROM productos';
                $datos = mysqli_query($conexion, $consulta);
                while ($reg = mysqli_fetch_array($datos)) { ?>
                    <tr>
                        <td><?php echo $reg['id']; ?></td>
                        <td><?php echo $reg['nombre']; ?></td>
                        <td><?php echo $reg['modelo']; ?></td>
                        <td>$ <?php echo $reg['precio']; ?></td>
                        <td><a href="modificarprod.php?id=<?php echo $reg['id']; ?>" target="ventanatablas"><span class="material-symbols-outlined">
                                    edit
                                </span></a>
                        </td>
                        <td><a href="borrar.php?id=<?php echo $reg['id']; ?>"><span class="material-symbols-outlined">
                                    delete
                                </span></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>