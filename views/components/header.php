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
            <a href="https://www.facebook.com/" target="_blank">
                <i class="bi bi-facebook"></i>
            </a>
            
            <a href="https://x.com/" target="_blank">
                <i class="bi bi-twitter-x"></i>
            </a>

            <a href="https://www.instagram.com/" target="_blank">
                <i class="bi bi-instagram"></i>
            </a>
        </div>

        <div class="coordo-panel">
            <address>
                <a href="https://maps.app.goo.gl/57r7Hm2uGvza4cvk8" target="_blank">
                    <span>297, rue St-Georges,</span>
                    <span>Saint-Jérôme (Québec)</span>
                    <span>J7Z 5A2,</span>
                </a>
            </address>

            <a href="tel:4504361531">450-436-1531</a>
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