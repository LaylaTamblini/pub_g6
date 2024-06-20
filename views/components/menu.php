<section class="menu" id="menu">

    <?php foreach($categories as $categorie): ?>
    <section class="categorie-menu">
        <h3><?= $categorie->titre ?></h3>

        <?php foreach ($plats as $plat):  ?>
            <?php if ($plat->categorie_titre == $categorie->titre): ?>

                <article class="item-menu">
                    <img src="public/img/placeholder.svg" alt="">

                    <div class="pills-menu">
                        <div class="sous-categories">
                            <p>Viande</p>
                            <p>Végé</p>
                        </div>
            
                        <div class="prix">
                            <p><?= $plat->prix ?></p>
                        </div>
                    </div>

                    <h4><?= $plat->titre ?></h4>

                    <p class="description">
                    <?= $plat->description ?>
                    </p>
                </article>

            <?php endif ?>
        <?php endforeach ?>
        
    </section>
    <?php endforeach ?>


</section>