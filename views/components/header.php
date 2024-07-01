<header>
    <div>
        <a href="index" class="logo">
            PubG6
        </a>
    
        <nav>
            <ul>
                <li><a href="index">Accueil</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#about">À propos</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

        <span class="material-icons burger" @click="toggleMenu">
            {{menuIcon}}
        </span>
    </div>
</header>

<section class="panel" :class="{open:panel}" v-if="panel">
    <nav>
        <ul>
            <li><a href="index">Accueil</a></li>
            <li><a href="#menu" @click="toggleMenu()">Menu</a></li>
            <li><a href="#about" @click="toggleMenu()">À propos</a></li>
            <li><a href="#contact" @click="toggleMenu()">Contact</a></li>
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

        <div class="link-panel">
            <address>
                <a href="https://maps.app.goo.gl/57r7Hm2uGvza4cvk8" target="_blank">
                    <span class="block">297, rue St-Georges,</span>
                    <span class="block">Saint-Jérôme (Québec)</span>
                    <span class="block">J7Z 5A2,</span>
                </a>
            </address>

            <a href="tel:4504361531">450-436-1531</a>
        </div>
    </section>
</section>