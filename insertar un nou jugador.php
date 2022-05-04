<!DOCTYPE html>
<html>

<?php include "includes/head.php" ?>

<body>
    <? include "includes/header.php" ?>

    <section>
        <h1>Insertar un nou jugador</h1>
    </section>
    <section>
        <form action="scripts/nou_client.php" method="POST">
            <div>
                <fieldset>
                    <h3>Jugador</h3>
                </fieldset>
            </div>
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
                    <input type="text" name="CP" required />
                </fieldset>
            </div>
            <div>
                <fieldset class="fieldset_enviar">
                    <button type="submit" class="button_crear">Enviar</button>
                </fieldset>
            </div>
    </section>

    <?php include "includes/footer.php" ?>