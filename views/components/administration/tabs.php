<!-- Section catégories -->
<section class="tab" v-if="section=='categories'">
    <div>
        <h2>Toutes les catégories</h2>
        <a href="" class="btn btn-icon">
            <i class="bi bi-plus"></i>
            Ajouter une catégorie
        </a>
    </div>

    <section class="list">
        <?php foreach ($categories as $category): ?>
            <article class="list-item">
                <p><?= $category->name ?></p>
                <a href="">
                    <i class="bi bi-pencil-square edit"></i>
                </a>
            </article>
        <?php endforeach; ?>
    </section>
</section>

<!-- Section plats -->
<section class="tab" v-if="section=='dishes'">
    <div>
        <h2>Tous les plats</h2>
        <a href="" class="btn btn-icon">
            <i class="bi bi-plus"></i>
            Ajouter un plat
        </a>
    </div>

    <section class="list">
        <?php foreach ($dishes as $dish): ?>
            <article class="list-item">
                <p><?= $dish->name ?></p>
                <a href="">
                    <i class="bi bi-pencil-square edit"></i>
                </a>
            </article>
        <?php endforeach; ?>
    </section>
</section>

<!-- Section membres -->
<section class="tab" v-if="section=='staff'">
    <div>
        <h2>Tous les membres</h2>
        <a href="" class="btn btn-icon">
            <i class="bi bi-plus"></i>
            Ajouter un membre
        </a>
    </div>

    <section class="list">
        <?php foreach ($staff as $member): ?>
            <article class="list-item">
                <p><?= $member->firstname ?> <?= $member->lastname ?></p>
                <a href="">
                    <i class="bi bi-pencil-square edit"></i>
                </a>
            </article>
        <?php endforeach; ?>
    </section>
</section>