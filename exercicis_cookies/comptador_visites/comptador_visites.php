<?php
if (isset($_COOKIE['visites'])) {
    $visites = $_COOKIE['visites'] + 1;
} else {
    $visites = 1;
}
setcookie('visites', $visites, time() + 3600 * 24 * 30);

$descompte = 0;
if ($visites >= 10) {
    $descompte = 50;
} elseif ($visites >= 5) {
    $descompte = 20;
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Comptador de Visites i Descomptes</title>
</head>
<body>
    <h1>Benvingut a la nostra pàgina!</h1>
    <p>Nombre de visites: <?php echo $visites; ?></p>
    <?php if ($descompte > 0): ?>
        <p>Enhorabona! Tens un descompte del <?php echo $descompte; ?>% en la teva compra.</p>
    <?php endif; ?>

    <form method="post" action="processar_compra.php">
        <input type="number" name="descompte" value="<?php echo $descompte; ?>" hidden>
        <button type="submit">Comprar amb descompte</button>
    </form>
</body>
</html>
