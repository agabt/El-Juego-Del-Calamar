<?php

include "../includes/database.php";

$id = $_GET["ID"];

$query = "DELETE FROM Empleat WHERE ID='$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../empleats.php');
}else{
    echo mysqli_error($dbh);
}

?>