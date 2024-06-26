<main class="login">

    <div class="full-logo">
        <a href="index">
            <img src="public/img/logo.svg" alt="Logo du Pub G6 dans une boîte avec bordure et le nom du pub au centre">
        </a>
    </div>

    <!-- <p>
        <span class="block bold">Vous êtes perdu? Pas de souci!</span> 
        Cliquez <a href="index">ici</a> pour retourner à la page d'accueil et découvrir notre délicieux menu 😋
    </p> -->

    <h4>Connexion à l'administration</h4>

    <form action="insert-subscriber" method="POST">
        <div class="inputs">
            <input type="email" name="email" placeholder="Adresse courriel">
            <input type="password" name="password" placeholder="Mot de passe">
        </div>

        <input type="submit" value="Se connecter">
    </form>

    <a href="index">Retour vers le site</a>
</main>