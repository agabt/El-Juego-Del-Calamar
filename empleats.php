<!DOCTYPE html>
<html>

<?php include "includes/head.php" ?>

<body>
    <?php include "includes/header.php" ?>
    <section>
        <h1>Empleats</h1>
    </section>
    <a class="btn btn-primary" href="insertar nous/insertar un nou empleat.php">INSERTAR NOU EMPLEAT</a>
    <section>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nom</td>
                    <td>Pais</td>
                    <td>CP</td>
                    <td>Opcions</td>
                </tr>
                <?php
                $query = "SELECT * FROM Empleat";
                $result = mysqli_query($dbh, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>" . $row['ID'] . "</td>
                            <td>" . $row['Nom'] . "</td>
                            <td>" . $row['Pais'] . "</td>
                            <td>" . $row['CP'] . "</td>
                            <td>
                            <a class='btn btn-primary' href='insertar nous/insertar un nou empleat.php?ID=" . $row['ID'] . "'><i class='bi bi-pencil-fill'></i></a>
                            <a class='btn btn-danger' href='scripts/borrar_empleat.php?ID=" . $row['ID'] . "'><i class='bi bi-trash3-fill'></i></a>
                            </td>
                            </tr>";
                } ?>
            </thead>
        </table>
    </section>
    </section>
    <?php include "includes/footer.php" ?>
    <section>
</body>

</html>