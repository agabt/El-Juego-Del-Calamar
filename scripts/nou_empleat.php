<?php

include "../includes/database.php";

$nom = $_POST["Nom"];
$pais = $_POST["Pais"];
$cp = $_POST["CP"];

$query = "INSERT INTO Empleat (Nom,Pais,CP) VALUES('$nom','$pais','$cp')";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../empleats.php');
}else{
    echo mysqli_error($dbh);
}

?>