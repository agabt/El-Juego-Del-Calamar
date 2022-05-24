<?php

include "../includes/database.php";

$id = $_GET["ID"];

$query = "DELETE FROM Temporada WHERE ID='$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../temporades.php');
}else{
    echo mysqli_error($dbh);
}

?>