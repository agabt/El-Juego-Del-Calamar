<?php

include "../includes/database.php";

$id = $_POST["ID"];

$query = "DELETE FROM Jugador WHERE ID='$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../jugadors.php');
}else{
    echo mysqli_error($dbh);
}

?>