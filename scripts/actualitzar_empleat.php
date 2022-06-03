<?php

include "../includes/database.php";

$id = $_POST["IDEmpleat"];
$nom = $_POST["Nom"];
$sou = $_POST["Sou"];
$rang = $_POST["Rang"];
$data_naixament = $_POST["Data_naixament"];

$query = "UPDATE Empleat SET Nom = '$nom', Sou = '$sou', Rang = '$rang', Data_naixament = '$data_naixament'WHERE IDEmpleat = '$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../empleats.php');
}else{
    echo mysqli_error($dbh);
}

?>