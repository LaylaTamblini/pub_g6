<header class="admin-header">
    <nav>
        <a href="#" class="logo">Pub G6</a>
    </nav>

    <nav>
        <ul>
            <li>
                <a href="#" @click.prevent="switchSection('categories')" :class="{active:section=='categories'}">
                    Catégories
                </a>
            </li>

            <li>
                <a href="#" @click.prevent="switchSection('dishes')" :class="{active:section=='dishes'}">
                    Plats
                </a>
            </li>

            <?php if($_SESSION["user_role"] == "Administrateur"): ?>
                <li>
                    <a href="#" @click.prevent="switchSection('staff')" :class="{active:section=='staff'}">
                        Membres
                    </a>
                </li>
            <?php endif ?>
        </ul>
        
        <span class="material-icons menu-burger" @click="toggleMenu" v-cloak>
            {{menuIcon}}
        </span>
    </nav>

    <a class="disconnect" href="disconnect-member">Se déconnecter</a>
</header>

<!-- Menu mobile hamburger -->
<section class="panel panel-admin" v-if="panel" v-cloak>
    <nav>
        <ul>
            <li>
                <a href="#" @click.prevent="toggleMenu(); switchSection('categories')" :class="{active:section=='categories'}">
                    Catégories
                </a>
            </li>
            
            <li>
                <a href="#" @click.prevent="toggleMenu(); switchSection('dishes')" :class="{active:section=='dishes'}">
                    Plats
                </a>
            </li>

            <?php if($_SESSION["user_role"] == "Administrateur"): ?>
                <li>
                    <a href="#" @click.prevent="toggleMenu(); switchSection('staff')" :class="{active:section=='staff'}">
                        Membres
                    </a>
                </li>
            <?php endif ?>
        </ul>
    </nav>

    <a class="disconnect-mobil" href="disconnect-member">Se déconnecter</a>
</section>