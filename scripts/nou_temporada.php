<?php

include "../includes/database.php";

$any = $_POST["Any"];

$query = "INSERT INTO Temporada (Any) VALUES('$any')";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../temporades.php');
}else{
    echo mysqli_error($dbh);
}

?>