<!DOCTYPE html>
<html>

<?php include "../includes/head.php" ?>

<body>
    <? include "../includes/header.php" ?>

    <?php
    $jugador = null;
    if (isset($_GET['IDJugador'])) {
        $id_jugador = $_GET['IDJugador'];
        $query = "SELECT * FROM Jugador WHERE IDJugador = '$id_jugador' ";
        $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
        $jugador = mysqli_fetch_assoc($result);
    }

    $action = '../scripts/nou_jugador.php';
    if ($jugador != null) {
        $action = '../scripts/actualitzar_jugador.php';
    }
    ?>

    <section class="mb-5 mt-5">
        <h1 class="mb-5 mt-5">
            <?php
            if ($jugador == null) {
                echo 'NOU JUGADOR';
            } else {
                echo 'EDITA EL JUGADOR';
            }
            ?>
        </h1>

    </section>
    <section class="">
        <form action="<?= $action ?>" method="POST">
            <div class="form-group">
                <fieldset>
                    <h6>Nom</h6>
                    <input value="<?= $jugador['Nom']; ?>" type="text" name="Nom" maxlength="100" placeholder="Nom" required />
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>Carrer</h6>
                    <input value="<?= $jugador['Carrer']; ?>" type="text" name="Carrer" maxlength="200" placeholder="Carrer" required />
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>Ciutat</h6>
                    <input value="<?= $jugador['Ciutat']; ?>" type="text" name="Ciutat" placeholder="Ciutat" maxlength="200" required />
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>Data de naixament</h6>
                    <input value="<?= $jugador['Data_naixament']; ?>" type="Date" name="Data_naixament" placeholder="Data de naixament" required />
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>CP</h6>
                    <input value="<?= $jugador['CP']; ?>" type="text" name="CP" placeholder="Codi Postal" maxlength="10" required />
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>Pais d'origen</h6>
                    <select name="Pais">
                        <?
                        $query = "SELECT * FROM Pais";
                        $result = mysqli_query($dbh, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value=" . $row['IDPais'] . ">" . $row['Nom'] . "</option>";
                        } ?>
                    </select>
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
                if ($jugador) {
                    echo "<input type='hidden' value='" . $jugador['IDJugador'] . "' name='IDJugador'>";
                }
                ?>
            </div>
        </form>
    </section>
</body>
<?php include "../includes/footer.php" ?>

</html>