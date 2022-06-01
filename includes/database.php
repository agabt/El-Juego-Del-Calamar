<?php

$dbh = mysqli_connect('localhost', '', '');
if (!$dbh) {
echo "Error db_connect: error en mysqli_connect user: (mal usuario/password?)<br>";
die;
}

if (!mysqli_select_db($dbh, 'el_juego_del_calamar')) {
echo "Error db_connect: error en mysqli_select_db: _BBDD_NAME<br>";
die;
}
?>