<section class="menu-complet" id="menu">

    <?php foreach($categories as $categorie): ?>
        <section class="menu">

            <h3>
                <?= $categorie->titre ?>
            </h3>

            <div class="items">
                <?php foreach ($plats as $plat):  ?>
                    <?php if ($plat->categorie_titre == $categorie->titre): ?>

                        <article class="item">
                            <!-- Image -->
                            <img src="public/img/placeholder.svg" alt="">

                            <!-- Tags -->
                            <div class="pills">
                                <div class="tags">
                                    <?php $sousCategories = explode(',', $plat->sous_categories_titres); ?>
                                    <?php foreach ($sousCategories as $sousCategorie): ?>
                                        <p><?= $sousCategorie ?></p>
                                    <?php endforeach; ?>
                                </div>

                                <!-- Prix -->
                                <div class="prix">
                                    <p><?= $plat->prix ?></p>
                                </div>
                            </div>

                            <!-- Nom du plat -->
                            <h4>
                                <?= $plat->titre ?>
                            </h4>

                            <!-- Description -->
                            <p class="description">
                                <?= $plat->description ?>
                            </p>
                        </article>
                        
                    <?php endif ?>
                <?php endforeach ?>
            </div>

        </section>
    <?php endforeach ?>

</section>