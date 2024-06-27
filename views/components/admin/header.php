<header class="header-admin">
    <nav>
        <a href="#" class="logo">Pub G6</a>
    </nav>

    <nav>
        <ul>
            <li><a href="#">Catégories</a></li>
            <li><a href="#">Plats</a></li>
            <li><a href="#">Sous-catégories</a></li>
            <li><a href="#">Membres</a></li>
        </ul>
        
        <span class="material-icons menu-burger" @click="toggleMenu" v-cloak>
            {{menuIcon}}
        </span>

    </nav>

    <nav class="links-nav">
        <a href="#">Retourner sur le site</a>
        <a href="disconnect-member">Se déconnecter</a>
    </nav>

</header>

<section class="panel" v-if="panel" v-cloak>
    <nav>
        <ul>
            <li><a href="#" @click="toggleMenu()">Catégories</a></li>
            <li><a href="#" @click="toggleMenu()">Plats</a></li>
            <li><a href="#" @click="toggleMenu()">Sous-catégories</a></li>
            <li><a href="#" @click="toggleMenu()">Membres</a></li>
        </ul>
    </nav>

    <div class="link-panel">
        <a href="#">Retourner sur le site</a>
        <a href="disconnect-member">Se déconnecter</a>
    </div>
</section>