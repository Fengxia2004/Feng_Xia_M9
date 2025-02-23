<?php
session_start();

if (!isset($_SESSION['user_log'])) {
    header("Location: index.html");
    exit();
}

$user_log = $_SESSION['user_log'];
$rol = $_SESSION['rol'];

$conn = mysqli_connect("localhost", "feng", "2004", "feng_xia_iticdesk");

if (!$conn) {
    echo "Error al conectar con la base de datos.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titol = $_POST['titol'];
    $descripcio = $_POST['descripcio'];
    $prioritat = $_POST['prioritat'];

    $sql_user = "SELECT id FROM usuaris WHERE correu = '$user_log'";
    $result_user = mysqli_query($conn, $sql_user);
    $user_data = mysqli_fetch_assoc($result_user);
    $user_id = $user_data['id'];

    $num_referencia = "REF" . date("YmdHis");
    $sql_insert = "INSERT INTO incidencies (num_referencia, prioritat, titol, descripcio, id_usuari) 
                   VALUES ('$num_referencia', '$prioritat', '$titol', '$descripcio', '$user_id')";

    if (mysqli_query($conn, $sql_insert)) {
        header("Location: incidencies.php");
        exit();
    } else {
        echo "Error al registrar la incidencia.";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrar Incidència</title>
</head>
<body style="background-color: #A9F5F2;">
    <h1>Registrar una nova incidència</h1>
    <h2>Usuari : <?php echo $user_log; ?> (Rol: <?php echo $rol; ?>)</h2>
    
    <form action="registre_incidencies.php" method="post">
        <label for="titol">Títol:</label><br>
        <input type="text" id="titol" name="titol" required><br><br>

        <label for="descripcio">Descripció:</label><br>
        <textarea id="descripcio" name="descripcio" required></textarea><br><br>

        <label for="prioritat">Prioritat:</label><br>
        <select id="prioritat" name="prioritat" required>
            <option value="Tipus I">Tipus I (Crítica)</option>
            <option value="Tipus II">Tipus II (Urgent)</option>
            <option value="Tipus III">Tipus III (Lleu)</option>
            <option value="Tipus IV">Tipus IV (No urgent)</option>
        </select><br><br>

        <input type="submit" value="Registrar Incidència">
    </form>

    <br><br>
    <a href="acces.php">Tornar al home</a>
</body>
</html>
