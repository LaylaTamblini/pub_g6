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
                            <img src="public/img/placeholder.svg" alt="">

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