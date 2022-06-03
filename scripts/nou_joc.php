<?php

include "../includes/database.php";

$nom = $_POST["Nom"];
$descripcio = $_POST["Descripcio"];

$query = "INSERT INTO joc (Nom,Descripcio) VALUES('$nom','$descripcio')";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../jocs.php');
}else{
    echo mysqli_error($dbh);
}

?>