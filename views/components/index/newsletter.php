<section class="newsletter" id="newsletter">
    <div>
        <!-- HEADER -->
        <header>
            <h2><span class="block">Ne ratez</span> aucune miette</h2>
            <p>Abonnez-vous à notre infolettre 📫</p>
        </header>

        <!-- MESSAGE UTILISATEUR -->
        <?php if (isset($_GET["required_inputs"])) : ?>
            <section class="user-interaction error">
                <p class="info-txt">
                    Veuillez remplir <span class="semi-bold">tous les champs</span> pour vous inscrire à notre infolettre.
                </p>
            </section>
        <?php endif ?>

        <?php if (isset($_GET["registration_failed"])) : ?>
            <section class="user-interaction error">
                <p class="info-txt">
                    Désolé, une erreur est survenue. <span class="semi-bold">Essayez plus tard.</span>
                </p>
            </section>
        <?php endif ?>

        <?php if (isset($_GET["registration_successful"])) : ?>
            <section class="user-interaction success">
                <p class="info-txt">
                    <span class="semi-bold">Inscription réussie!</span> Merci de rejoindre notre infolettre!
                </p>
            </section>
        <?php endif ?>

        <!-- FORMULAIRE INFOLETTRE -->
        <form action="insert-subscriber" method="POST">
            <div class="inputs">
                <input type="text" name="firstname" placeholder="Prénom">
                <input type="text" name="lastname" placeholder="Nom">
                <input type="email" name="email" placeholder="Adresse courriel">
            </div>

            <input type="submit" value="Abonnez-vous">
        </form>
    </div>
</section>