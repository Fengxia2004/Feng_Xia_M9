<?php 
session_start(); 

if (!isset($_SESSION['user_log'])) {
    header("Location: index.html");
    exit(); 
}

$user_log = $_SESSION['user_log'];
$rol = $_SESSION['rol']; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Acceso</title>
</head>
<body style="background-color: #A9F5F2;">

    <h1 style="color: #333; text-align: center; font-size: 36px; margin-bottom: 20px;">
        Hola, <?php echo $user_log; ?>. Rol: <?php echo $rol; ?>
    </h1>

    <h2>Opcionss</h2>
    
    <?php if ($rol == 'professor'): ?>
        <a href="registre_incidencies.php">Registrar incidència</a><br>
        <a href="incidencies.php">Consultar les meves incidències</a>

    <?php elseif ($rol == 'administrador'): ?>
        <a href="registre_incidencies.php">Registrar incidència</a><br>
        <a href="incidencies.php">Consultar totes les incidències</a>
    <?php endif; ?>

    <br><br>
    <form action="logout.php" method="post">
        <input type="submit" name="logout" value="Cerrar sesión">
    </form> 

</body>
</html>
