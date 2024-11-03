<?php
$majoredat = isset($_COOKIE["majoredat"]) ? $_COOKIE["majoredat"] : "no";
$idioma = isset($_COOKIE["idioma"]) ? $_COOKIE["idioma"] : "ca";
$moneda = isset($_COOKIE["moneda"]) ? $_COOKIE["moneda"] : "eur";


$productes = [
    "ca" => [
        "major" => "Gràcies per ser major d'edat!",
        "menor" => "No podem vendre alcohol si ets menor d'edat.",
        "producte1" => "T'oferim el vi “Les Terrasses” a un preu de 39 €.",
        "producte2" => "T'oferim la cervesa “Cerveza Artesanal” a un preu de 25 €."
    ],
    "es" => [
        "major" => "¡Gracias por ser mayor de edad!",
        "menor" => "No podemos vender alcohol si eres menor de edad.",
        "producte1" => "Te ofrecemos el vino “Les Terrasses” a un precio de 39 €.",
        "producte2" => "Te ofrecemos la cerveza “Cerveza Artesanal” a un precio de 25 €."
    ],
    "en" => [
        "major" => "Thank you for being of legal age!",
        "menor" => "We cannot sell alcohol if you are underage.",
        "producte1" => "We offer the wine “Les Terrasses” for 39 €.",
        "producte2" => "We offer the beer “Cerveza Artesanal” for 25 €."
    ]
];


?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informació de la Bodega</title>
</head>
<body>
    <h1>Informació de la Bodega</h1>
    <?php if ($majoredat === "sí"): ?>
        <p><?php echo $productes[$idioma]["major"]; ?></p>
        <p><?php echo $productes[$idioma]["producte1"]; ?></p>
        <p><?php echo $productes[$idioma]["producte2"]; ?></p>
    <?php else: ?>
        <p><?php echo $productes[$idioma]["menor"]; ?></p>
    <?php endif; ?>
</body>
</html>
