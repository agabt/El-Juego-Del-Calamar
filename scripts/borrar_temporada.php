<?php

include "../includes/database.php";

$id = $_GET["IDTemporada"];

$query = "DELETE FROM Temporada WHERE IDTemporada='$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../temporades.php');
}else{
    echo mysqli_error($dbh);
}

?>