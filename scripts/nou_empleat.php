<?php

include "../includes/database.php";

$nom = $_POST["Nom"];
$sou = $_POST["Sou"];
$rang = $_POST["Rang"];
$data_naixament = $_POST["Data_naixament"];

$query = "INSERT INTO Empleat (Nom,Sou,Rang,Data_naixament) VALUES('$nom','$sou','$rang','$data_naixament')";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../empleats.php');
}else{
    echo mysqli_error($dbh);
}

?>