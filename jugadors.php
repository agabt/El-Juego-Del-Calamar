<!DOCTYPE html>
<html>

<?php include "includes/head.php" ?>

<body>
    <div class="container">
        <?php include "includes/header.php" ?>
        <section>
            <h1 class="centrat">Jugadors</h1>
        </section>
        <section class="centrat">
            <a class="btn btn-primary mb-5" href="insertar nous/insertar un nou jugador.php">INSERTAR NOU JUGADOR</a>
        </section>
        <section class="centrat">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nom</td>
                        <td>Carrer</td>
                        <td>Ciutat</td>
                        <td>Data de naixament</td>
                        <td>CP</td>
                        <td>Pais d'origen</td>
                        <td>Opcions</td>
                    </tr>
                    <?php
                    $query = "SELECT IDJugador, Jugador.Nom AS NomJugador, 
                    Jugador.Carrer AS CarrerJugador, Jugador.Ciutat AS CiutatJugador, 
                    Data_naixament, Jugador.CP AS CPJugador, Jugador.fkIDPais, IDPais, Pais.Nom AS NomPais 
                    FROM Jugador INNER JOIN Pais ON Jugador.fkIDPais = Pais.IDPais";
                    $result = mysqli_query($dbh, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>" . $row['IDJugador'] . "</td>
                            <td>" . $row['NomJugador'] . "</td>
                            <td>" . $row['CarrerJugador'] . "</td>
                            <td>" . $row['CiutatJugador'] . "</td>
                            <td>" . $row['Data_naixament'] . "</td>
                            <td>" . $row['CPJugador'] . "</td>
                            <td>" . $row['NomPais'] . "</td>
                            <td>
                            <a class='btn btn-primary' href='insertar nous/insertar un nou jugador.php?ID=" . $row['IDJugador'] . "'><i class='bi bi-pencil-fill'></i></a>
                            <a class='btn btn-danger' href='scripts/borrar_jugador.php?ID=" . $row['IDJugador'] . "'><i class='bi bi-trash3-fill'></i></a>
                            </td>
                            </tr>";
                    } ?>
                </thead>
            </table>
        </section>
        <?php include "includes/footer.php" ?>
    </div>
</body>

</html>