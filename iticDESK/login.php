<?php
session_start();

$conn = mysqli_connect("localhost", "feng", "2004", "feng_xia_iticdesk");

if (!$conn) {
    echo "No s'ha pogut connectar a la BBDD: " . mysqli_connect_error();
    exit();
}

$user_log= $_POST['user_log'];  
$password = $_POST['pswd'];

$sql_verificacio = "SELECT id, nom, cognom, contrasenya, rol FROM usuaris WHERE correu = '$user_log'"; 
$query_verificacio = mysqli_query($conn, $sql_verificacio);

if (mysqli_num_rows($query_verificacio) == 1) {
    $user_data = mysqli_fetch_assoc($query_verificacio);

    if ($password == $user_data['contrasenya']) { 
        $_SESSION['user_log'] = $user_log;  
        $_SESSION['user_login'] = $user_data['nom'] . ' ' . $user_data['cognom'];
        $_SESSION['rol'] = $user_data['rol'];

        header("Location: acces.php");
        exit();
    } else {
        echo "Contraseña incorrecta. Intenta de nuevo.";
        header("Location: index.html");
        exit();
    }
} else {
    echo "Usuario no encontrado. Intenta de nuevo.";
    header("Location: index.html");
    exit();
}

mysqli_close($conn);
?>
