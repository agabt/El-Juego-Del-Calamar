<!DOCTYPE html>
<html>

<?php include "../includes/head.php" ?>

<body>
    <? include "../includes/header.php" ?>

    <?php
    $empleat = null;
    if (isset($_GET['IDEmpleat'])) {
        $id_empleat = $_GET['IDEmpleat'];
        $query = "SELECT * FROM Empleat WHERE IDEmpleat = '$id_empleat' ";
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
                    <input value="<?= $empleat['Nom']; ?>" type="text" name="Nom" maxlength="100" placeholder="Nom" required />
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>Sou</h6>
                    <input value="<?= $empleat['Sou']; ?>" type="number" name="Sou" maxlength="10" placeholder="Sou" required />
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>Rang</h6>
                    <select name="Rang">
                        <option value="Cercle">Cercle</option>
                        <option value="Triangle">Triangle</option>
                        <option value="Cuadrat">Cuadrat</option>
                    </select>               
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>Data naixament</h6>
                    <input value="<?= $empleat['Data_naixament']; ?>" type="date" name="Data_naixament" placeholder="Data" maxlength="10" required />
                </fieldset>
            </div>
            <div>
                <small id="emailHelp" class="form-text text-muted">No compartirem les dades amb ningú.</small>
            </div>
            <div class="form-group">
                <fieldset class="fieldset_enviar">
                    <button type="submit" class="button_crear">Enviar</button>
                </fieldset>
            </div>
            <div class="form-group">
                <?php
                if ($empleat) {
                    echo "<input type='hidden' value='" . $empleat['IDEmpleat'] . "' name='IDEmpleat'>";
                }
                ?>
            </div>
        </form>
    </section>
</body>
<?php include "../includes/footer.php" ?>

</html>