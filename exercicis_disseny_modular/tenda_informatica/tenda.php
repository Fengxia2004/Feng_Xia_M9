<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenda</title>
</head>
<body>
    <h1>Benvingut a la nostra tenda!</h1>
    <p>Aquí tens els productes:</p>
    <ul>
        <li>MacBook - 800€</li>
        <li>gtx-4090 - 1200€</li>
        <li>pantalla 4K - 300€</li>
    </ul>

    <?php include 'descomptes.php'; ?>

    <p><a href="tenda2.php">Més productes</a></p>
    <?php include 'footer.php'; ?>
</body>
</html>
