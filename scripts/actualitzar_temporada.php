<?php

include "../includes/database.php";

$id = $_POST["IDTemporada"];
$nom = $_POST["Nom"];
$any = $_POST["Any"];

$query = "UPDATE Temporada SET Nom = '$nom', Any = '$any' WHERE IDTemporada = '$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../temporades.php');
}else{
    echo mysqli_error($dbh);
}

?>