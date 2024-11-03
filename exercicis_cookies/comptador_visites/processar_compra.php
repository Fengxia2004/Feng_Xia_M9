<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descompte = isset($_POST['descompte']) ? (int)$_POST['descompte'] : 0;
    echo "<h1>Compra Realitzada</h1>";
    echo "<p>Has aplicat un descompte del $descompte% en la teva compra.</p>";
    
    // Reiniciar el comptador de visites després de la compra
    setcookie('visites', 0, time() - 3600);
} else {
    echo "<p>Error: No s'ha pogut processar la compra.</p>";
}
?>

