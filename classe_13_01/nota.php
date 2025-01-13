<?php

$nota = $_GET['nota'];

$conn = mysqli_connect("localhost","feng","2004","test");

if(!$conn){
    echo"No s'ha pogut connectar a la BBDD";
}
else{
    $sql="SELECT * FROM usuari WHERE nota > $nota";
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($query);
    echo"Hi ha $rows alumnes amb més d'un $nota";
}
?>