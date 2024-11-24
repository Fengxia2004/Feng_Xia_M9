<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.html');
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Pàgina 2</title>
</head>
<body>
    <h1>Hola de nou, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>Aquesta és la pàgina d'informació 2.</p>
    <a href="pagina1.php">Tornar a la pàgina 1</a>
    <br>
    <a href="tancar_sessio.php">Tancar sessió</a>
</body>
</html>
