<section class="create-category" v-if="section=='categories'">
    <h1>Section catégories</h1>

    <section class="list">
        <?php foreach ($categories as $category): ?>
            <article>
                <?= $category->name ?>
            </article>
        <?php endforeach; ?>
    </section>
</section>

<section class="create-dish" v-if="section=='dishes'">
    <h1>Section plat</h1>

    <section class="list">
        <?php foreach ($dishes as $dish): ?>
            <article>
                <?= $dish->name ?>
            </article>
        <?php endforeach; ?>
    </section>
</section>

<section class="create-member" v-if="section=='staff'">
    <h1>Section membre</h1>

    <section class="list">
        <?php foreach ($staff as $member): ?>
            <article>
                <?= $member->firstname ?>
            </article>
        <?php endforeach; ?>
    </section>
</section>