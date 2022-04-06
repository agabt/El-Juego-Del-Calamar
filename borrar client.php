<!DOCTYPE html>
<html>

<?php include "includes/head.php" ?>

<body>
    <? include "includes/header.php" ?>

<section>
        <form>
            <div>
                <fieldset>
                    <h3>BORRAR CLIENT</h3>
                </fieldset>
            </div>
            <div>
                <fieldset>
                    <h6>Nom</h6>
                    <input type="text" maxlength="50" placeholder="Nom" required />
                </fieldset>
            </div>
            <div>
                <fieldset>
                    <h6>Email</h6>
                    <input type="email" placeholder="Email" required />
                </fieldset>
            </div>
            <div>
                <fieldset>
                    <h6>Data de naixament</h6>
                    <input type="date" required />
                </fieldset>
            </div>
            <div>
                <fieldset>
                    <h6>Número</h6>
                    <input type="number" min="4000" max="99999999" placeholder="Número" />
                </fieldset>
            </div>
            <div>
                <fieldset class="fieldset_enviar">
                    <button type="submit" class="button_borrar">Borrar</button>
                </fieldset>
            </div>
        </form>
    </section>

    </form>
    </section>
</body>

    <?php include "includes/footer.php" ?>