<!DOCTYPE html>
<html>

<?php include "includes/head.php" ?>

<body>
    <?php include "includes/header.php" ?>
    <section>
        <h1>Joc</h1>
    </section>
    <section>
        <table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nom</td>
                    <td>Pais</td>
                </tr>
                <?php
                $query = "SELECT * FROM Joc";
                $result = mysqli_query($dbh, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>" . $row['ID'] . "</td>
                            <td>" . $row['Nom'] . "</td>
                            <td>" . $row['Pais'] . "</td>
                            </tr>";
                } ?>
            </thead>
        </table>
    </section>
    <?php include "includes/footer.php" ?>
</body>

</html>

