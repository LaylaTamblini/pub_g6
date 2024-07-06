<!-- MESSAGE UTILISATEUR -->
<?php if(isset($_GET["insertion_successful"])): ?>
    <section class="user-interaction success">
        <p class="info-txt"><span class="semi-bold">Félicitations!</span> L'ajout a fonctionné!</p>
        <p class="info-txt">Voir l'ajout en <a href="index#menu">cliquant ici</a></p>
    </section>
<?php endif ?>

<?php if(isset($_GET["insertion_member_successful"])): ?>
    <section class="user-interaction success">
        <p class="info-txt"><span class="semi-bold">Félicitations!</span> Le membre a été ajouté!</p>
    </section>
<?php endif ?>

<?php if(isset($_GET["deletion_successful"])): ?>
    <section class="user-interaction success">
        <p class="info-txt"><span class="semi-bold">Félicitations!</span> L'élément a été supprimé!</p>
    </section>
<?php endif ?>

<?php if(isset($_GET["update_successful"])): ?>
    <section class="user-interaction success">
        <p class="info-txt"><span class="semi-bold">Félicitations!</span> L'élément a été modifié!</p>
        <p class="info-txt">Voir la modification en <a href="index#menu">cliquant ici</a></p>
    </section>
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
            <a href="" class="list-item" @click.prevent="toggleForm('editFormCategories', <?= htmlspecialchars(json_encode($category)) ?>)">
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
            <a href="" class="list-item" @click.prevent="toggleForm('editFormDishes', <?= htmlspecialchars(json_encode($dish), ENT_QUOTES, 'UTF-8') ?>)">
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
            <a href="" class="list-item" @click.prevent="toggleForm('editFormStaff', <?= htmlspecialchars(json_encode($member), ENT_QUOTES, 'UTF-8') ?>)">
                <article>
                    <p><?= $member->firstname ?> <?= $member->lastname ?></p>
                    <div class="btn-edit">
                        <p>Modifier le membre</p>

                        <i class="bi bi-pencil-square edit"></i>
                    </div>
                </article>
            </a>
        <?php endforeach; ?>
    </section>
</section>