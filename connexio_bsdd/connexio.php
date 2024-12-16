<?php 

$conn = mysqli_connect("localhost","feng","2004","test");

if(!$conn){
    echo "No s'ha pogut connectar correctament".mysqli_connect_error();
}
else{
    echo "OK";
}
$query = mysqli_query($conn,"INSERT INTO usuari (dni, nom, cognom) VALUES ('X1234567K', 'Xia', 'Feng')");

if($query){
    echo "s'ha insertat correctament"
}
else{
    echo "no s'ha insertat".mysqli_query_error();
}

    
?>
