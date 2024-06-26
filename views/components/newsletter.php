<section class="newsletter" id="newsletter">
    <div>
        <h3><span class="block">Ne ratez</span> aucune miette</h3>
        <p>Abonnez-vous à notre infolettre 📫</p>
    </div>

    <form action="insert-subscriber" method="POST">

        <?php if(isset($_GET["required_inputs"])) : ?>
            <div class="user-interaction">
                <p>Toutes les informations sont requises</p>
            </div>
        <?php endif ?>

        <div class="inputs">
            <input type="text" name="firstname" placeholder="Prénom">
            <input type="text" name="lastname" placeholder="Nom">
            <input type="email" name="email" placeholder="Adresse courriel">
        </div>

        <input type="submit" value="Abonnez-vous">
    </form>
</section>