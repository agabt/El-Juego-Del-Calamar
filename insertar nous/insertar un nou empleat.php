<!DOCTYPE html>
<html>

<?php include "../includes/head.php" ?>

<body>
    <? include "../includes/header.php" ?>

    <?php
    $empleat = null;
    if (isset($_GET['ID'])) {
        $id_empleat = $_GET['ID'];
        $query = "SELECT * FROM Empleat WHERE ID = '$id_empleat' ";
        $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
        $empleat = mysqli_fetch_assoc($result);
    }

    $action = '../scripts/nou_empleat.php';
    if ($empleat != null) {
        $action = '../scripts/actualitzar_empleat.php';
    }
    ?>

    <section class="mb-5 mt-5">
        <h1 class="mb-5 mt-5">
            <?php
            if ($empleat == null) {
                echo 'NOU EMPLEAT';
            } else {
                echo 'EDITA L`EMPLEAT';
            }
            ?>
        </h1>

    </section>
    <section>
        <form action="<?= $action ?>" method="POST">
            <div class="form-group">
                <fieldset>
                    <h6>Nom</h6>
                    <input type="text" name="Nom" maxlength="100" placeholder="Nom" required />
                    <small id="emailHelp" class="form-text text-muted">No compartirem l'email amb ningú.</small>
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>Pais</h6>
                    <input type="text" name="Pais" maxlength="2" placeholder="Pais" required />
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>CP</h6>
                    <input type="text" name="CP" placeholder="Codi Postal" maxlength="10" required />
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset class="fieldset_enviar">
                    <button type="submit" class="button_crear">Enviar</button>
                </fieldset>
            </div>
            <div class="form-group">
                <?php
                if ($empleat) {
                    echo "<input type='hidden' value='" . $empleat['ID'] . "' name='ID'>";
                }
                ?>
            </div>
        </form>
    </section>
</body>
<?php include "../includes/footer.php" ?>

</html>