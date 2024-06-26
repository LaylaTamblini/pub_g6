<section class="menu" id="menu">

    <?php foreach($categories as $category): ?>
        <section class="menu-category">

            <h3>
                <?= $category->name ?>
            </h3>

            <div class="items">
                <?php foreach ($dishes as $dish):  ?>
                    <?php if ($dish->category_name == $category->name): ?>

                        <article class="item">
                            <!-- Image -->
                            <?php if($dish->image): ?>
                                <?php if($dish->alt): ?>
                                    <img loading="lazy" src="<?= $dish->image ?>" alt="<?= $dish->alt ?>">
                                <?php else: ?>
                                        <img loading="lazy" src="<?= $dish->image ?>" alt="Plat du menu Pub G6">
                                <?php endif; ?>
                            <?php else: ?>
                                <img loading="lazy" src="public/img/placeholder.png" alt="Image non disponible pour ce plat">
                            <?php endif; ?>

                            <!-- Tags -->
                            <div class="pills">
                                <div class="tags">
                                    <?php $subcategories = explode(',', $dish->subcategories_name); ?>
                                    <?php foreach ($subcategories as $subcategory): ?>
                                        <p><?= $subcategory ?></p>
                                    <?php endforeach; ?>
                                </div>

                                <!-- Prix -->
                                <div class="prix">
                                    <p><?= $dish->price ?></p>
                                </div>
                            </div>

                            <!-- Nom du plat -->
                            <h4>
                                <?= $dish->name ?>
                            </h4>

                            <!-- Description -->
                            <p class="description">
                                <?= $dish->description ?>
                            </p>
                        </article>
                        
                    <?php endif ?>
                <?php endforeach ?>
            </div>

        </section>
    <?php endforeach ?>

</section>