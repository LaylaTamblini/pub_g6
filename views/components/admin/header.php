<header class="header-admin">
    <nav>
        <a href="#" class="logo">Pub G6</a>
    </nav>

    <nav>
        <ul>
            <li><a href="#">Catégories</a></li>
            <li><a href="#">Plats</a></li>
            <!-- <li><a href="#">Sous-catégories</a></li> -->
            <li><a href="#">Membres</a></li>
        </ul>
        
        <span class="material-icons menu-burger" @click="toggleMenu" v-cloak>
            {{menuIcon}}
        </span>
    </nav>

    <a class="disconnect" href="disconnect-member">Se déconnecter</a>
</header>

<section class="panel panel-admin" v-if="panel" v-cloak>
    <nav>
        <ul>
            <li><a href="#" @click="toggleMenu()">Catégories</a></li>
            <li><a href="#" @click="toggleMenu()">Plats</a></li>
            <!-- <li><a href="#" @click="toggleMenu()">Sous-catégories</a></li> -->
            <li><a href="#" @click="toggleMenu()">Membres</a></li>
        </ul>
    </nav>

    <a class="disconnect-mobile" href="disconnect-member">Se déconnecter</a>
</section>