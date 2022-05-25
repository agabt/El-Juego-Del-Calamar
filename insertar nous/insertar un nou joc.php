<!DOCTYPE html>
<html>

<?php include "../includes/head.php" ?>

<body>
    <? include "../includes/header.php" ?>

    <?php
    $joc = null;
    if (isset($_GET['ID'])) {
        $id_joc = $_GET['ID'];
        $query = "SELECT * FROM Joc WHERE ID = '$id_joc' ";
        $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
        $joc = mysqli_fetch_assoc($result);
    }

    $action = '../scripts/nou_joc.php';
    if ($joc != null) {
        $action = '../scripts/actualitzar_joc.php';
    }
    ?>

    <section class="mb-5 mt-5">
        <h1 class="mb-5 mt-5">
            <?php
            if ($joc == null) {
                echo 'NOU JOC';
            } else {
                echo 'EDITA EL JOC';
            }
            ?>
        </h1>

    </section>
    <section>
        <form action="<?= $action ?>" method="POST">
            <div class="form-group">
                <fieldset>
                    <h6>Nom</h6>
                    <input value="<?= $joc['Nom']; ?>" type="text" name="Nom" maxlength="100" placeholder="Nom" required />
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>Pais</h6>
                    <input value="<?= $joc['Pais']; ?>" type="text" name="Pais" maxlength="2" placeholder="Pais" required />
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
                if ($joc) {
                    echo "<input type='hidden' value='" . $joc['ID'] . "' name='ID'>";
                }
                ?>
            </div>
        </form>
    </section>
</body>
<?php include "../includes/footer.php" ?>

</html>