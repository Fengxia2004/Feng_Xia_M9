<?php
session_start();

if (!isset($_SESSION['cistella'])) {
    header('Location: index.html');
    exit;
}

$preuLlibre = 10;
$preuBoligraf = 2;

$totalLlibres = $_SESSION['cistella']['llibres'] * $preuLlibre;
$totalBoligrafs = $_SESSION['cistella']['boligrafs'] * $preuBoligraf;
$totalCompra = $totalLlibres + $totalBoligrafs;
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resum de la Compra</title>
</head>
<body>
    <h1>Resum de la Compra</h1>
    <p>Llibres: <?php echo $_SESSION['cistella']['llibres']; ?> unitats - <?php echo $totalLlibres; ?> €</p>
    <p>Bolígrafs: <?php echo $_SESSION['cistella']['boligrafs']; ?> unitats - <?php echo $totalBoligrafs; ?> €</p>
    <h2>Total: <?php echo $totalCompra; ?> €</h2>
    <a href="confirmar_compra.php">Confirmar compra</a>
    <br>
    <a href="index.html">Continuar comprant</a>
</body>
</html>
