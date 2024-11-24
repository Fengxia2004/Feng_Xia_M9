<?php
session_start();

if (!isset($_SESSION['cistella'])) {
    $_SESSION['cistella'] = ['llibres' => 0, 'boligrafs' => 0];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['afegir'])) {
    $quantitatLlibres = intval($_POST['quantitat_llibres'] ?? 0);
    $quantitatBoligrafs = intval($_POST['quantitat_boligrafs'] ?? 0);

    $_SESSION['cistella']['llibres'] += $quantitatLlibres;
    $_SESSION['cistella']['boligrafs'] += $quantitatBoligrafs;
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cistella de la Compra</title>
</head>
<body>
    <h1>Cistella de la Compra</h1>
    <p>Llibres: <?php echo $_SESSION['cistella']['llibres']; ?> unitats</p>
    <p>Bolígrafs: <?php echo $_SESSION['cistella']['boligrafs']; ?> unitats</p>
    <a href="index.html">Tornar a la botiga</a>
    <br>
    <a href="resum_compra.php">Finalitzar compra</a>
</body>
</html>
