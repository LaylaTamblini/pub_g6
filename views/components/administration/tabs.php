<section class="tab" v-if="section=='categories'">
    <h2>Toutes les catégories</h2>

    <section class="list">
        <?php foreach ($categories as $category): ?>
            <article class="list-item">
                <p><?= $category->name ?></p>
                <i class="bi bi-pencil-square edit"></i>
            </article>
        <?php endforeach; ?>
    </section>

    <a href="" class="btn">Ajouter une catégorie</a>
</section>

<section class="tab" v-if="section=='dishes'">
    <h2>Tous les Plats</h2>

    <section class="list">
        <?php foreach ($dishes as $dish): ?>
            <article>
                <?= $dish->name ?>
            </article>
        <?php endforeach; ?>
    </section>

    <a href="" class="btn">Ajouter un plat</a>
</section>

<section class="tab-content" v-if="section=='staff'">
    <!-- <h2>Membres</h2> -->

    <section class="list">
        <?php foreach ($staff as $member): ?>
            <article>
                <?= $member->firstname ?>
            </article>
        <?php endforeach; ?>
    </section>

    <a href="" class="btn">Ajouter un membre</a>
</section>