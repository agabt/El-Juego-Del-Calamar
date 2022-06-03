<?php

include "../includes/database.php";

$nom = $_POST["Nom"];
$any = $_POST["Any"];

$query = "INSERT INTO Temporada (Nom,Any) VALUES('$nom', '$any')";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../temporades.php');
}else{
    echo mysqli_error($dbh);
}

?>