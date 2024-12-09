<?php
session_start();

if (!isset($_SESSION['visites'])) {
    $_SESSION['visites'] = 0; 
}
$_SESSION['visites']++;

if ($_SESSION['visites'] % 2 == 0) {
    echo "Benvingut de nou, esperem que tingui un bon dia";
} else {
    echo "Benvingut, gràcies per la visita!";
}

if (isset($_SESSION['usuari'])) {
    echo "Usuari logat: " . $_SESSION['usuari'];
}
if (isset($_SESSION['usuari']) && $_SESSION['visites'] == 10) {
    echo $_SESSION['usuari'] . "Agraïm la teva fidelitat, utilitza el codi PROMO24 per un 30% de descompte!";
}
elseif (!isset($_SESSION['usuari']) && $_SESSION['visites'] == 20){
    echo "Agraïm la teva fidelitat, utilitza el codi PROMO24 per un 20% de descompte!";
}

?>

