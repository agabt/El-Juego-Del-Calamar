<?php

include "../includes/database.php";

$nom = $_POST["Nom"];
$carrer = $_POST["Carrer"];
$ciutat = $_POST["Ciutat"];
$data_naixament = $_POST["Data_naixament"];
$cp = $_POST["CP"];
$pais = $_POST["Pais"];

$query = "INSERT INTO Jugador (Nom,Carrer,Ciutat,Data_naixament,CP,fkIDPais) 
            VALUES('$nom', '$carrer', '$ciutat', '$data_naixament', '$cp', '$pais')";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../jugadors.php');
}else{
    echo mysqli_error($dbh);
}

?>