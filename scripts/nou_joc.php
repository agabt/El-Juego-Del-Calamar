<?php

include "../includes/database.php";

$nom = $_POST["Nom"];
$pais = $_POST["Pais"];

$query = "INSERT INTO Joc (Nom,Pais) VALUES('$nom','$pais')";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../jocs.php');
}else{
    echo mysqli_error($dbh);
}

?>