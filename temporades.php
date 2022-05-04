<!DOCTYPE html>
<html>

<?php include "includes/head.php" ?>

<body>
    <?php include "includes/header.php" ?>
    <section>
        <h1>Temporades</h1>
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
                            </tr>";
                } ?>
            </thead>
        </table>
    </section>
    <?php include "includes/footer.php" ?>
</body>

</html>