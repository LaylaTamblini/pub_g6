<!-- AJOUT D'UNE CATÉGORIE -->
<section class="admin-form" v-if="form=='addFormCategories'">
    <section class="content-form">

        <!-- HEADER -->
        <header>
            <h4>Ajouter une catégorie</h4>
            <a href="" @click.prevent="toggleForm('')">
                <i class="bi bi-x"></i>
            </a>
        </header>

        <!-- MESSAGES UTILISATEUR -->
        <?php if(isset($_GET["required_inputs"])): ?>
            <section class="user-interaction error">
                <p class="info-txt">Veuillez remplir tous les champs.</p>
            </section>
        <?php endif ?>

        <?php if(isset($_GET["insertion_failed"])): ?>
            <section class="user-interaction error">
                <p class="info-txt">Désolé, une erreur est survenue. Essayez de nouveau plus tard.</p>
            </section>
        <?php endif ?>

        <!-- FORMULAIRE -->
        <div>
            <form action="insert-category" method="POST">
                <div class="inputs">
                    <input type="text" name="name" placeholder="Nom de la catégorie" required>
                </div>

                <input type="submit" value="Ajouter une catégorie" class="add">
            </form>
        </div>

    </section>
</section>

<!-- AJOUT D'UN PLAT -->
<section class="admin-form" v-if="form=='addFormDishes'">
    <section class="content-form">

        <!-- HEADER -->
        <header>
            <h4>Ajouter un plat</h4>
            <a href="" @click.prevent="toggleForm('')">
                <i class="bi bi-x"></i>
            </a>
        </header>

        <!-- MESSAGES UTILISATEUR -->
        <?php if(isset($_GET["required_inputs"])): ?>
            <section class="user-interaction error">
                <p class="info-txt">Veuillez remplir tous les champs.</p>
            </section>
        <?php endif ?>

        <?php if(isset($_GET["insertion_failed"])): ?>
            <div class="user-interaction error">
                <p class="info-txt">Désolé, une erreur est survenue. Essayez de nouveau plus tard.</p>
            </div>
        <?php endif ?>

        <!-- FORMULAIRE -->
        <div>
            <form action="insert-dish" method="POST" enctype="multipart/form-data">
                <div class="inputs">
                    <input type="text" name="name" placeholder="Nom du plat" required>
                    <input type="text" name="description" placeholder="Description du plat" required>
                    <input type="text" name="price" placeholder="Prix du plat" required>

                    <select name="category" required>
                        <option disabled selected>Choisir une catégorie</option>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?= $category->id ?>">
                                <?= $category->name ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <section class="checkbox">
                        <?php foreach ($subcategories as $subcategory) : ?>
                            <label class="checkbox-label">
                                <input type="checkbox" name="subcategories[]" value="<?= $subcategory->id ?>">
                                <p>
                                    <?= $subcategory->name ?>
                                </p>
                            </label>
                        <?php endforeach; ?>
                    </section>

                    <label class="image-file">
                        Choisir une image
                        <input type="file" name="image">
                    </label>

                    <input type="text" name="alt" placeholder="Description de l'image">
                </div>

                <input type="submit" value="Ajouter un plat" class="add">
            </form>
        </div>

    </section>
</section>

<!-- AJOUT D'UN MEMBRE -->
<section class="admin-form" v-if="form=='addFormStaff'">
    <section class="content-form">

        <!-- HEADER -->
        <header>
            <h4>Ajouter un membre</h4>
            <a href="" @click.prevent="toggleForm('')">
                <i class="bi bi-x"></i>
            </a>
        </header>

        <!-- MESSAGES UTILISATEUR -->
        <?php if(isset($_GET["required_inputs"])): ?>
            <section class="user-interaction error">
                <p class="info-txt">Veuillez remplir tous les champs.</p>
            </section>
        <?php endif ?>

        <?php if(isset($_GET["insertion_failed"])): ?>
            <section class="user-interaction error">
                <p class="info-txt">Désolé, une erreur est survenue. Essayez de nouveau plus tard.</p>
            </section>
        <?php endif ?>

        <?php if(isset($_GET["existing_email"])): ?>
            <section class="user-interaction error">
                <p class="info-txt">Le courriel est déjà utilisé.</p>
            </section>
        <?php endif ?>

        <!-- FORMULAIRE -->
        <div>
            <form action="insert-member" method="POST">
                <div class="inputs">
                    <input type="text" name="firstname" placeholder="Prénom" required>
                    <input type="text" name="lastname" placeholder="Nom" required>

                    <select name="role" required>
                        <option disabled selected>Choisir un rôle</option>
                        <?php foreach ($roles as $role) : ?>
                            <option value="<?= $role->id ?>">
                                <?= $role->title ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <input type="email" name="email" placeholder="Courriel" required>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                </div>

                <input type="submit" value="Ajouter un membre" class="add">
            </form>
        </div>

    </section>
</section>