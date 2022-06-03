<?php

include "../includes/database.php";

$id = $_POST["IDJugador"];
$nom = $_POST["Nom"];
$carrer = $_POST["Carrer"];
$ciutat = $_POST["Ciutat"];
$data_naixament = $_POST["Data_naixament"];
$cp = $_POST["CP"];
$pais = $_POST["Pais"];

$query = "UPDATE Jugador SET Nom = '$nom', Carrer = '$carrer', Ciutat = '$ciutat',
 Data_naixament = '$data_naixament', CP = '$cp', fkIDPais = '$pais' WHERE IDJugador = '$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../jugadors.php');
}else{
    echo mysqli_error($dbh);
}

?>