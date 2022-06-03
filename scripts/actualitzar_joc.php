<?php

include "../includes/database.php";

$id = $_POST["idjoc"];
$nom = $_POST["Nom"];
$descripcio = $_POST["Descripcio"];

$query = "UPDATE joc SET Nom = '$nom', Descripcio = '$descripcio' WHERE idjoc = '$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../jocs.php');
}else{
    echo mysqli_error($dbh);
}

?>