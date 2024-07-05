<main class="login">
    <div>
        <header>
            <a href="index" class="login-logo">
                <img src="public/img/logo.svg" alt="Logo du Pub G6 dans une boîte avec bordure et le nom du pub au centre">
            </a>

            <h4>Connexion à l'administration</h4>
        </header>

        <!-- MESSAGE UTILISATEUR -->
        <?php if (isset($_GET["required_inputs"])) : ?>
            <section class="user-interaction error">
                <p class="info-txt">
                    Veuillez remplir <span class="semi-bold">tous les champs</span> pour vous connecter à l'administration.
                </p>
            </section>
        <?php endif ?>

        <?php if (isset($_GET["invalid_information"])) : ?>
            <section class="user-interaction error">
                <p class="info-txt">
                    Oups... Vos identifiants <span class="semi-bold">ne correspondent pas.</span> Veuillez réessayer.
                </p>
            </section>
        <?php endif ?>

        <form action="connect-member" method="POST">
            <div class="inputs">
                <input type="email" name="email" placeholder="Adresse courriel">
                <input type="password" name="password" placeholder="Mot de passe">
            </div>

            <input type="submit" value="Se connecter">
        </form>

        <section class="retour">
            Tu es perdu?
            <a href="index">Retourne vers le site</a>
        </section>
    </div>
</main>