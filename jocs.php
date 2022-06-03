<!DOCTYPE html>
<html>

<?php include "includes/head.php" ?>

<body>
    <div class="container">
        <?php include "includes/header.php" ?>
        <section>
            <h1 class="centrat">Joc</h1>
        </section>
        <section class="centrat">
            <a class="btn btn-primary mb-5" href="insertar nous/insertar un nou joc.php">INSERTAR NOU JOC</a>
        </section>
        <section class="centrat">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nom</td>
                        <td>Descripció</td>
                        <td>Opcions</td>
                    </tr>
                    <?php
                    $query = "SELECT * FROM joc";
                    $result = mysqli_query($dbh, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>" . $row['idjoc'] . "</td>
                            <td>" . $row['Nom'] . "</td>
                            <td>" . $row['Descripcio'] . "</td>
                            <td>
                            <a class='btn btn-primary' href='insertar nous/insertar un nou joc.php?idjoc=" . $row['idjoc'] . "'><i class='bi bi-pencil-fill'></i></a>
                            <a class='btn btn-danger' href='scripts/borrar_joc.php?idjoc=" . $row['idjoc'] . "'><i class='bi bi-trash3-fill'></i></a>
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