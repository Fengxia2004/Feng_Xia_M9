<?php
if (isset($_SESSION['usuari'])) {
    if ($_SESSION['visites'] == 10) {
        echo "<p>Descompte especial per a {$_SESSION['usuari']}: utilitza el codi <strong>PROMO24</strong> per un 30% de descompte!</p>";
    }
} else {
    if ($_SESSION['visites'] == 20) {
        echo "<p>Descompte especial: utilitza el codi <strong>PROMO24</strong> per un 20% de descompte!</p>";
    }
}

if ($_SESSION['visites'] < 10 || ($_SESSION['visites'] < 20 && !isset($_SESSION['usuari']))) {
    echo "<p>No tens descomptes aplicables en aquest moment.</p>";
}
?>
