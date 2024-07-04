<section class="newsletter" id="newsletter">
    <div>
        <h3><span class="block">Ne ratez</span> aucune miette</h3>
        <p>Abonnez-vous à notre infolettre 📫</p>
    </div>

    <?php if(isset($_GET["required_inputs"])): ?>
        <div class="user-interaction error">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <p>Veuillez remplir tous les champs pour vous inscrire à notre infolettre 🍻</p>
        </div>
    <?php endif ?>

    <?php if(isset($_GET["registration_failed"])): ?>
        <div class="user-interaction error">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <p>Désolé, une erreur est survenue. Essayez de nouveau plus tard 🤞</p>
        </div>
    <?php endif ?>

    <?php if(isset($_GET["registration_successful"])): ?>
        <div class="user-interaction success">
            <i class="bi bi-check-circle-fill"></i>
            <p>Inscription réussie! Merci de rejoindre notre infolettre 🥳</p>
        </div>
    <?php endif ?>

    <form action="insert-subscriber" method="POST">
        <div class="inputs">
            <input type="text" name="firstname" placeholder="Prénom">
            <input type="text" name="lastname" placeholder="Nom">
            <input type="email" name="email" placeholder="Adresse courriel">
        </div>

        <input type="submit" value="Abonnez-vous">
    </form>
</section>