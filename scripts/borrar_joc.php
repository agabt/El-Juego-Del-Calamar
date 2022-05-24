<?php

include "../includes/database.php";

$id = $_GET["ID"];

$query = "DELETE FROM Joc WHERE ID='$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../jocs.php');
}else{
    echo mysqli_error($dbh);
}

?>