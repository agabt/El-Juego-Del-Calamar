<?php

include "../includes/database.php";

$id = $_POST["ID"];
$nom = $_POST["Nom"];
$pais = $_POST["Pais"];

$query = "UPDATE Joc SET Nom = '$nom', Pais = '$pais' WHERE ID = '$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../jocs.php');
}else{
    echo mysqli_error($dbh);
}

?>