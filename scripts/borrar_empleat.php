<?php

include "../includes/database.php";

$idempleat = $_GET["IDEmpleat"];

$query = "DELETE FROM Empleat WHERE IDEmpleat='$idempleat'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../empleats.php');
}else{
    echo mysqli_error($dbh);
}

?>