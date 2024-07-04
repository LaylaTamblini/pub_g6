<?php if(isset($_GET["insertion_successful"])): ?>
    <div class="user-interaction success">
        <i class="bi bi-check-circle-fill"></i>
        <p>Ajout réussie! <a href="index#menu">Voir l'ajout</a></p>
    </div>
<?php endif ?>

<!-- SECTION CATÉGORIES -->
<section class="tab" v-if="section=='categories'">
    <div class="add-mobile">
        <a href="" class="btn" @click.prevent="toggleForm('addFormCategories')">
            <i class="bi bi-plus"></i>
            Ajouter une catégorie
        </a>
    </div>

    <section class="list">
        <div class="add-desktop">
            <h2>Toutes les catégories</h2>
            <a href="" class="btn" @click.prevent="toggleForm('addFormCategories')">
                <i class="bi bi-plus"></i>
                Ajouter une catégorie
            </a>
        </div>

        <?php foreach ($categories as $category): ?>
            <a href="" class="list-item">
                <article>
                    <p><?= $category->name ?></p>
                    <div class="btn-edit">
                        <p>Modifier la catégorie</p>
                        <i class="bi bi-pencil-square edit"></i>
                    </div>
                </article>
            </a>
        <?php endforeach; ?>
    </section>
</section>

<!-- SECTION PLATS -->
<section class="tab" v-if="section=='dishes'">
    <div class="add-mobile">
        <a href="" class="btn" @click.prevent="toggleForm('addFormDishes')">
            <i class="bi bi-plus"></i>
            Ajouter un plat
        </a>
    </div>

    <section class="list">
        <div class="add-desktop">
            <h2>Tous les plats</h2>
            <a href="" class="btn" @click.prevent="toggleForm('addFormDishes')">
                <i class="bi bi-plus"></i>
                Ajouter un plat
            </a>
        </div>

        <?php foreach ($dishes as $dish): ?>
            <a href="" class="list-item">
                <article>
                    <p><?= $dish->name ?></p>
                    <div class="btn-edit">
                        <p>Modifier le plat</p>
                        <i class="bi bi-pencil-square edit"></i>
                    </div>
                </article>
            </a>
        <?php endforeach; ?>
    </section>
</section>

<!-- SECTION MEMBRES -->
<section class="tab" v-if="section=='staff'">
    <div class="add-mobile">
        <a href="" class="btn" @click.prevent="toggleForm('addFormStaff')">
            <i class="bi bi-plus"></i>
            Ajouter un membre
        </a>
    </div>

    <section class="list">
        <div class="add-desktop">
            <h2>Tous les membres</h2>
            <a href="" class="btn" @click.prevent="toggleForm('addFormStaff')">
                <i class="bi bi-plus"></i>
                Ajouter un membre
            </a>
        </div>

        <?php foreach ($staff as $member): ?>
            <a href="" class="list-item">
                <article>
                    <p><?= $member->firstname ?> <?= $member->lastname ?></p>
                    <div class="btn-edit">
                        <p>Modifier le membre</p>

                        <a href="" @click.prevent="toggleForm('addFormStaff')">
                            <i class="bi bi-pencil-square edit"></i>
                        </a>
                    </div>
                </article>
            </a>
        <?php endforeach; ?>
    </section>
</section>