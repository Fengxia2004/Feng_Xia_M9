<?php
session_start();

if (!isset($_SESSION['user_log'])) {
    header("Location: index.html");
    exit();
}

$user_log = $_SESSION['user_log'];
$rol = $_SESSION['user_rol'];

$conn = mysqli_connect("localhost", "feng", "2004", "feng_xia_iticdesk");

if (!$conn) {
    echo "No se pudo conectar a la base de datos.";
    exit();
}

if ($rol == 'professor') {
    $sql = "SELECT * FROM incidencies WHERE id_usuari = (SELECT id FROM usuaris WHERE correu = '$usuari') ORDER BY prioritat DESC, data_registre ASC";
} else {
    $sql = "SELECT * FROM incidencies ORDER BY prioritat DESC, data_registre ASC";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Consultar Incidències</title>
</head>
<body style="background-color: #A9F5F2;">
    <h1>Incidències Registrades</h1>
    <h2>Usuari: <?php echo $user_log; ?> </h2>
    <h2>Rol: <?php echo $rol; ?></h2>

    <table>
        <tr>
            <th>Referència</th>
            <th>Prioritat</th>
            <th>Títol</th>
            <th>Descripció</th>
            <th>Estat</th>
        </tr>

        <?php
        while ($incidencia = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $incidencia['num_referencia'] . "</td>";
            echo "<td>" . $incidencia['prioritat'] . "</td>";
            echo "<td>" . $incidencia['titol'] . "</td>";
            echo "<td>" . $incidencia['descripcio'] . "</td>";
            echo "<td>" . $incidencia['estat'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <br><br>
    <a href="acces.php">Tornar al home</a>
</body>
</html>
