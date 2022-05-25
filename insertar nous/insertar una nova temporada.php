<!DOCTYPE html>
<html>

<?php include "../includes/head.php" ?>

<body>
    <? include "../includes/header.php" ?>

    <?php
    $temporada = null;
    if (isset($_GET['ID'])) {
        $id_temporada = $_GET['ID'];
        $query = "SELECT * FROM Temporada WHERE ID = '$id_temporada' ";
        $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
        $temporada = mysqli_fetch_assoc($result);
    }

    $action = '../scripts/nou_temporada.php';
    if ($temporada != null) {
        $action = '../scripts/actualitzar_temporada.php';
    }
    ?>

    <section class="mb-5 mt-5">
        <h1 class="mb-5 mt-5">
            <?php
            if ($temporada == null) {
                echo 'NOVA TEMPORADA';
            } else {
                echo 'EDITA LA TEMPORADA';
            }
            ?>
        </h1>

    </section>
    <section>
        <form action="<?= $action ?>" method="POST">
            <div class="form-group">
                <fieldset>
                    <h6>Any</h6>
                    <input value="<?= $temporada['Any']; ?>" type="date" name="Any" maxlength="100" placeholder="Any" required />
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
                if ($temporada) {
                    echo "<input type='hidden' value='" . $temporada['ID'] . "' name='ID'>";
                }
                ?>
            </div>
        </form>
    </section>
</body>
<?php include "../includes/footer.php" ?>

</html>