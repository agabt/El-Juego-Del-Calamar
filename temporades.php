<!DOCTYPE html>
<html>

<?php include "includes/head.php" ?>

<body>
    <?php include "includes/header.php" ?>
    <section>
        <h1>Temporades</h1>
    </section>
    <section>
    <a class="btn btn-primary" href="insertar nous/insertar una nova temporada.php">INSERTAR NOVA TEMPORADA</a>
    </section>
    <section>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Any</td>
                </tr>
                <?php
                $query = "SELECT * FROM Temporada";
                $result = mysqli_query($dbh, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>" . $row['ID'] . "</td>
                            <td>" . $row['Any'] . "</td>
                            <td>
                            <a class='btn btn-primary' href='insertar nous/insertar una nova temporada.php?ID=" . $row['ID'] . "'><i class='bi bi-pencil-fill'></i></a>
                            <a class='btn btn-danger' href='scripts/borrar_temporada.php?ID=" . $row['ID'] . "'><i class='bi bi-trash3-fill'></i></a>
                            </td>
                            </tr>";
                } ?>
            </thead>
        </table>
    </section>
    <?php include "includes/footer.php" ?>
</body>

</html>