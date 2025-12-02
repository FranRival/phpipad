<?php
// Inicia sesión si es necesario
session_start();

// Aquí puedes poner variables o funciones
$title = "Mi Página PHP Simple";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        header, footer { background-color: #f2f2f2; padding: 10px; text-align: center; }
        main { margin: 20px 0; }
    </style>
</head>
<body>

<header>
    <h1><?php echo $title; ?></h1>
</header>

<main>
    <p>¡Hola! Esta es una página PHP muy simple.</p>
    <p>Una prueba de ipad</p>

    <?php
    // Ejemplo de lógica PHP
    $hora = date("H");
    if ($hora < 12) {
        echo "<p>Buenos días!</p>";
    } elseif ($hora < 18) {
        echo "<p>Buenas tardes!</p>";
    } else {
        echo "<p>Buenas noches!</p>";
    }
    ?>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Mi Página PHP</p>
</footer>

</body>
</html>
