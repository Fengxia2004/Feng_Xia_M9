<?php
session_start();

if (isset($_SESSION['usuari'])) {
    header('Location: tenda.php'); 
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuari = $_POST['usuari'] ?? '';
    $contrasenya = $_POST['contrasenya'] ?? '';

    $usuari_valid = 'Feng';
    $contrasenya_valid = 'pirineus';

    if ($usuari === $usuari_valid && $contrasenya === $contrasenya_valid) {
        $_SESSION['usuari'] = $usuari; 
        header('Location: tenda.php'); 
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Inicia Sessió</h1>

    <?php
    if (isset($error)) {
        echo "<p>$error</p>";
    }
    ?>

    <form action="login.php" method="POST">
        <label for="usuari">Usuari:</label>
        <input type="text" name="usuari" id="usuari" required><br>

        <label for="contrasenya">Contrasenya:</label>
        <input type="password" name="contrasenya" id="contrasenya" required><br>

        <input type="submit" value="Iniciar Sessió">
    </form>

</body>
</html>
