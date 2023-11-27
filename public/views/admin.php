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

<body>
    <nav>
        <h1>Poke Store</h1>
        <div class="iconos">
            <form action="../php/buscar.php" method="post">
                <input class="form-control form-control-lg" type="text" placeholder="buscar" aria-label=".form-control-lg example" name="buscar">
                <span class="material-symbols-outlined"><button class="clear">
                        search</button>
                </span>
            </form>
            <span class="material-symbols-outlined">
                shopping_cart
            </span>
            <span class="material-symbols-outlined" onclick="window.open('public/views/login.html','_self')">
                account_circle
            </span>
            <span class="material-symbols-outlined" onclick="window.open('../../index.html','_self')">
                logout
            </span>
        </div>
    </nav>
    <h2 id="saludo">PANEL DE ADMINISTRACION</h2>
    <div class="menutabla">
    <a href="../php/tablastarters.php" target="ventanatablas" class="atabla">STARTERS</a>
    <a href="../php/tablastarters.php" target="ventanatablas" class="atabla">AGREGAR STARTER</a>
    <a href="../php/tablaprod.php" target="ventanatablas" class="atabla">PRODUCTOS</a>
    <a href="../php/tablaprod.php" target="ventanatablas" class="atabla">AGREGAR PRODUCTO</a>
    </div>
    <iframe name="ventanatablas" src="../php/tablastarters.php" id="frametabla"></iframe>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>