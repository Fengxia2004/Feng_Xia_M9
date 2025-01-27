<?php

$nota = $_GET['nota'];

echo "$nota";

$conn = mysqli_connect("localhost","feng","2004","test");

if(!$conn){
    echo"No s'ha pogut connectar a la BBDD";
}
else{
    $sql="SELECT * FROM usuari WHERE nota > 5";
    $query = mysqli_query($conn, $sql);
    while( $row = mysqli_fetch_array($query)){
        echo "Nom: " . $row['nom'] . " Cognom: " . $row['cognom'] . " Nota: " . $row['nota'];
    }
    $result = mysqli_fetch_array($query);
    /*------------------INSERT----------------
    $insert_sql="INSERT INTO usuari('dni','nom','cognom','nota')Values ('123441245','Helena','Molano','3')";
    $query_insert= mysqli_query($conn, $insert_sql);
    $affected_rows=mysqli_affected_rows($conn);
    echo "Hi ha $affected_rows afectacions a la BBDD";
    ------------------SELECT---------------------
    $sql="SELECT * FROM usuari WHERE nota > $nota";
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($query);
    echo"Hi ha $rows alumnes amb més d'un $nota";*/
}

?>