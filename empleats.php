<!DOCTYPE html>
<html>

<?php include "includes/head.php" ?>

<body>
    <div class="container">
        <?php include "includes/header.php" ?>
        <section>
            <h1 class="centrat">Empleats</h1>
        </section>
        <section class="centrat">
            <a class="btn btn-primary mb-5" href="insertar nous/insertar un nou empleat.php">INSERTAR NOU EMPLEAT</a>
        </section>
        <section class="centrat">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nom</td>
                        <td>Sou</td>
                        <td>Rang</td>
                        <td>Data naixament</td>
                        <td>Opcions</td>
                    </tr>
                    <?php
                    $query = "SELECT * FROM Empleat";
                    $result = mysqli_query($dbh, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>" . $row['IDEmpleat'] . "</td>
                            <td>" . $row['Nom'] . "</td>
                            <td>" . $row['Sou'] . "</td>
                            <td>" . $row['Rang'] . "</td>
                            <td>" . $row['Data_naixament'] . "</td>
                            <td>
                            <a class='btn btn-primary' href='insertar nous/insertar un nou empleat.php?IDEmpleat=" . $row['IDEmpleat'] . "'><i class='bi bi-pencil-fill'></i></a>
                            <a class='btn btn-danger' href='scripts/borrar_empleat.php?IDEmpleat=" . $row['IDEmpleat'] . "'><i class='bi bi-trash3-fill'></i></a>
                            </td>
                            </tr>";
                    } ?>
                </thead>
            </table>
        </section>
        </section>
        <?php include "includes/footer.php" ?>
    </div>
</body>

</html>