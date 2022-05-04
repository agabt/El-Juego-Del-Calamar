<?php

include "../includes/database.php";

$nom = $_POST["Nom"];
$pais = $_POST["Pais"];
$cp = $_POST["CP"];

$query = "INSERT INTO Jugador (Nom,Pais,CP) VALUES('$nom','$pais','$cp')";

mysqli_query($dbh, $query);

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../jugadors.php');
}else{
    echo mysqli_error($dbh);
}

?>