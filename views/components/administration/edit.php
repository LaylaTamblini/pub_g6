<!-- MODIFICATION D'UNE CATÉGORIE -->
<section class="admin-form" v-if="form=='editFormCategories'">
    <section class="content-form">
        <!-- HEADER -->
        <header>
            <h4>Modifier la catégorie</h4>
            <a href="" @click.prevent="toggleForm('')">
                <i class="bi bi-x"></i>
            </a>
        </header>

        <!-- FORMULAIRE -->
        <div>
            <form action="edit-category" method="POST" id="edit">
                <div class="inputs">
                    <input type="hidden" name="category_id" :value="currentObject.id">
                    <input type="text" name="category_name" v-model="currentObject.name" required>
                </div>
            </form>

            <form action="delete-category" method="POST" id="delete">
                <input type="hidden" name="category_id" :value="currentObject.id">
            </form>
        </div>

        <section class="btns-submit">
            <input type="submit" value="Modifier la catégorie" form="edit">

            <button type="submit" class="delete" form="delete">
                Supprimer la catégorie
            </button>
        </section>
    </section>
</section>

<!-- MODIFICATION D'UN PLAT -->
<section class="admin-form" v-if="form=='editFormDishes'">
    <section class="content-form">
        <!-- HEADER -->
        <header>
            <h4>Modifier le plat</h4>
            <a href="" @click.prevent="toggleForm('')">
                <i class="bi bi-x"></i>
            </a>
        </header>

        <div>
            <!-- FORMULAIRE DE MODIFICATION -->
            <form action="edit-dish" method="POST" enctype="multipart/form-data" id="edit">
                <div class="inputs">
                    <input type="text" name="name" v-model="currentObject.name">
                    <input type="text" name="description" v-model="currentObject.description">
                    <input type="text" name="price" v-model="currentObject.price">

                    <select name="category" v-model="currentObject.category_id">
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
                        Modifier l'image
                        <input type="file" name="image">
                    </label>

                    <input type="text" name="alt" v-model="currentObject.alt">
                </div>
            </form>

            <!-- FORMULAIRE DE SUPPRESSION -->
            <form action="delete-dish" method="POST" id="delete">
                <input type="hidden" name="dish_id" :value="currentObject.id">
            </form>
        </div>

        <!-- BOUTON D'ENVOI -->
        <section class="btns-submit">
            <input type="submit" value="Modifier le plat" form="edit">

            <button type="submit" class="delete" form="delete">
                Supprimer le plat
            </button>
        </section>
    </section>
</section>

<!-- MODIFICATION D'UN MEMBRE -->
<section class="admin-form" v-if="form=='editFormStaff'">
    <section class="content-form">
        <!-- HEADER -->
        <header>
            <h4>Modifier un membre</h4>
            <a href="" @click.prevent="toggleForm('')">
                <i class="bi bi-x"></i>
            </a>
        </header>

        <div>
            <!-- FORMULAIRE DE MODIFICATION -->
            <form action="edit-member" method="POST" id="edit">
                <div class="inputs">
                    <input type="text" name="firstname" v-model="currentObject.firstname" required>
                    <input type="text" name="lastname" v-model="currentObject.lastname" required>

                    <select name="role" v-model="currentObject.role_id" required>
                        <option disabled selected>Choisir un rôle</option>
                        <?php foreach ($roles as $role) : ?>
                            <option value="<?= $role->id ?>">
                                <?= $role->title ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <!-- <input type="email" name="email" v-model="currentObject.email">
                    <input type="password" name="password" placeholder="Modifier le mot de passe"> -->
                </div>
            </form>
            
            <!-- FORMULAIRE DE SUPPRESSION -->
            <form action="delete-member" method="POST" id="delete">
                <input type="hidden" name="member_id" :value="currentObject.id">
            </form>
        </div>
        
        <!-- BOUTON D'ENVOI -->
        <section class="btns-submit">
            <input type="submit" value="Modifier le membre" form="edit">

            <button type="submit" class="delete" form="delete">
                Supprimer le membre
            </button>
        </section>
    </section>
</section>