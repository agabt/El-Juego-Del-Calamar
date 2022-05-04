<!DOCTYPE html>
<html>

<?php include "includes/head.php" ?>

<body>
    <?php include "includes/header.php" ?>
    <section>
        <h1>Empleats</h1>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nom</td>
                    <td>Pais</td>
                    <td>CP</td>
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