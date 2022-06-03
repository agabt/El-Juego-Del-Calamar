<?php

include "../includes/database.php";

$id = $_GET["IDJugador"];

$query = "DELETE FROM Jugador WHERE IDJugador='$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../jugadors.php');
}else{
    echo mysqli_error($dbh);
}

?>