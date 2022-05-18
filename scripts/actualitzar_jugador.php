<?php

include "../includes/database.php";

$id = $_POST["ID"];
$nom = $_POST["Nom"];
$pais = $_POST["Pais"];
$cp = $_POST["CP"];

$query = "UPDATE Jugador SET Nom = '$nom', Pais = '$pais', CP = '$cp' WHERE ID = '$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../jugadors.php');
}else{
    echo mysqli_error($dbh);
}

?>