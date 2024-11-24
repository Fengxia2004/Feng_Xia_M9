<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $password && !empty($username)) {
        $_SESSION['username'] = $username;
        header('Location: pagina1.php');
        exit;
    } else {
        echo "<p style='color:red;'>Usuari o contrasenya incorrectes. Torna a intentar-ho.</p>";
        echo "<a href='index.html'>Torna al formulari de login</a>";
    }
}
?>
