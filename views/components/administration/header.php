<header class="admin-header">
    <div>
        <a href="admin" class="logo">
            PubG6
        </a>
    
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
        </nav>

        <span class="material-icons burger" @click="toggleMenu">
            {{menuIcon}}
        </span>
    </div>
</header>

<!-- Panel menu mobile -->
<section class="panel panel-admin" :class="{open:panel}" v-if="panel">
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