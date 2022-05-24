<?php

include "../includes/database.php";

$id = $_POST["ID"];
$any = $_POST["Any"];

$query = "UPDATE Temporada SET Any = '$any' WHERE ID = '$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../temporades.php');
}else{
    echo mysqli_error($dbh);
}

?>