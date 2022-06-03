<?php

include "../includes/database.php";

$id = $_GET["idjoc"];

$query = "DELETE FROM joc WHERE idjoc='$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../jocs.php');
}else{
    echo mysqli_error($dbh);
}

?>