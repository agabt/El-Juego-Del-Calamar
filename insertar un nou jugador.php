<!DOCTYPE html>
<html>

<?php include "includes/head.php" ?>

<?php
$client = null;
if (isset($_GET['ID'])) {
    $id_client = $_GET['ID'];
    $query = "SELECT * FROM clients WHERE id = '$id_client' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $client = mysqli_fetch_assoc($result);
}

$action = 'scripts/insert-client.php';
if ($client != null) {
    $action = 'scripts/update-client.php';
}
?>

<body>
    <? include "includes/header.php" ?>

    <section class="mb-5 mt-5">
        <?php
        include 'includes/header.html';
        ?>
        <h1 class="mb-5 mt-5">
            <?php
            if ($client == null) {
                echo 'NOU CLIENT';
            } else {
                echo 'EDITA EL CLIENT';
            }
            ?>
        </h1>

    </section>

    <section>
        <h2>Insertar un nou jugador</h2>
    </section>
    <section>
        <form action="scripts/nou_jugador.php" method="POST">
            <div>
                <fieldset>
                    <h6>Nom</h6>
                    <input type="text" name="Nom" maxlength="100" placeholder="Nom" required />
                </fieldset>
            </div>
            <div>
                <fieldset>
                    <h6>Pais</h6>
                    <input type="text" name="Pais" maxlength="2" placeholder="Pais" required />
                </fieldset>
            </div>
            <div>
                <fieldset>
                    <h6>CP</h6>
                    <input type="text" name="CP" placeholder="Codi Postal" required />
                </fieldset>
            </div>
            <div>
                <fieldset class="fieldset_enviar">
                    <button type="submit" class="button_crear">Enviar</button>
                </fieldset>
            </div>
        </form>
    </section>
</body>
<?php include "includes/footer.php" ?>