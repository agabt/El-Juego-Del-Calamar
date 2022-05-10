<!DOCTYPE html>
<html>

<?php include "includes/head.php" ?>

<body>
    <? include "includes/header.php" ?>

    <section>
        <h2>Borrar jugador</h2>
    </section>
    <section>
        <form action="scripts/borrar_jugador.php" method="POST">
            <div>
                <fieldset>
                    <h6>ID</h6>
                    <input type="number" name="ID" minlength="0" maxlength="9999999999" placeholder="ID" required />
                </fieldset>
            </div>
            <div>
                <fieldset class="fieldset_enviar">
                    <button type="submit" class="button_borrar">Borrar</button>
                </fieldset>
            </div>
            <div>
                <fieldset>
                    <h6>Jugador que eliminaras</h6>
                    <label><?  ?></label>
                </fieldset>
            </div>
        </form>
    </section>
</body>

<?php include "includes/footer.php" ?>