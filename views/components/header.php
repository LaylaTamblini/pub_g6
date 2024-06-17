<header>
    <nav>
        <a href="#" class="logo">Pub G6</a>
    </nav>

    <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">À propos</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        
        <span class="material-icons menu-burger" @click="toggleMenu" v-cloak>
            {{menuIcon}}
        </span>
    </nav>

</header>

<section class="panel" v-if="panel" v-cloak>
    <nav>
        <ul>
            <li><a href="#" @click="toggleMenu()">Accueil</a></li>
            <li><a href="#" @click="toggleMenu()">Menu</a></li>
            <li><a href="#" @click="toggleMenu()">À propos</a></li>
            <li><a href="#" @click="toggleMenu()">Contact</a></li>
        </ul>
    </nav>

    <section class="infos-panel">
        <div class="medias">
            <i class="bi bi-facebook"></i>
            <i class="bi bi-twitter-x"></i>
            <i class="bi bi-instagram"></i>
        </div>

        <div class="coordonnees">
            <address>
                297, rue St-Georges, 
                Saint-Jérôme (Québec) 
                J7Z 5A2
            </address>
            <p>450-436-1531</p>
        </div>
    </section>
</section>

<main ref="mainContent">
    <h1>Bonjour</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</main>