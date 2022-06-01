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
                        <td>Pais</td>
                        <td>CP</td>
                        <td>Temporada Participada</td>
                        <td>Opcions</td>
                    </tr>
                    <?php
                    $query = "SELECT Jugador.ID AS IDJugador, Jugador.Nom AS NomJugador, 
                    Jugador.Pais AS PaisJugador, Jugador.CP AS CPJugador, Jugador.fk_temporada, 
                    Temporada.ID, Temporada.Any AS AnyTemporada FROM Jugador 
                    INNER JOIN Temporada ON Jugador.fk_temporada = Temporada.ID";
                    $result = mysqli_query($dbh, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>" . $row['IDJugador'] . "</td>
                            <td>" . $row['NomJugador'] . "</td>
                            <td>" . $row['PaisJugador'] . "</td>
                            <td>" . $row['CPJugador'] . "</td>
                            <td>" . $row['AnyTemporada'] . "</td>
                            <td>
                            <a class='btn btn-primary' href='insertar nous/insertar un nou jugador.php?ID=" . $row['ID'] . "'><i class='bi bi-pencil-fill'></i></a>
                            <a class='btn btn-danger' href='scripts/borrar_jugador.php?ID=" . $row['ID'] . "'><i class='bi bi-trash3-fill'></i></a>
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