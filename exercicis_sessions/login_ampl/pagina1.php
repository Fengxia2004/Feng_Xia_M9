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
    <title>Pàgina 1</title>
</head>
<body>
    <h1>Benvingut, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>Aquesta és la pàgina d'informació 1.</p>
    <a href="pagina2.php">Anar a la pàgina 2</a>
    <br>
    <a href="logout.php">Tancar sessió</a>
</body>
</html>
