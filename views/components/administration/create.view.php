<!-- AJOUT D'UNE CATÉGORIE -->
<section class="add-form" v-if="form=='addFormCategories'" @click="form=''">

    <div class="content-form" @click.stop>

        <!-- HEADER -->
        <div class="close-form">
            <h4>Ajouter une catégorie</h4>
            <a href="" @click.prevent="toggleForm('')">
                <i class="bi bi-x"></i>
            </a>
        </div>

        <!-- FORMULAIRE -->
        <div>
            <form action="insert-category" method="POST">
                <div class="inputs">
                    <input type="text" name="name" placeholder="Nom de la catégorie">
                </div>

                <input type="submit" value="Ajouter une catégorie">
            </form>
        </div>

    </div>

</section>

<!-- AJOUT D'UN PLAT -->
<section class="add-form" v-if="form=='addFormDishes'" @click="form=''">

    <div class="content-form" @click.stop>

        <!-- HEADER -->
        <div class="close-form">
            <h4>Ajouter un plat</h4>
            <a href="" @click.prevent="toggleForm('')">
                <i class="bi bi-x"></i>
            </a>
        </div>

        <!-- FORMULAIRE -->
        <div>
            <form action="insert-dish" method="POST" enctype="multipart/form-data">
                <div class="inputs">
                    <input type="text" name="name" placeholder="Nom du plat">
                    <textarea name="description" cols="30" rows="10">Decription du plat</textarea>
                    <input type="text" name="price" placeholder="Prix du plat">

                    <select name="category">
                        <option disabled selected>Choisir une catégorie</option>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?= $category->id ?>">
                                <?= $category->name ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <div class="checkbox">
                        <ul>
                            <?php foreach ($subcategories as $subcategory) : ?>
                                <li>
                                    <label>
                                        <input type="checkbox" name="subcategory" value="<?= $subcategory->id ?>">
                                        <?= $subcategory->name ?>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <label>
                        Choisir une image
                        <input type="file" name="image">
                    </label>

                    <input type="text" name="alt" placeholder="Description de l'image">
                </div>

                <input type="submit" value="Ajouter un plat">
            </form>
        </div>

    </div>

</section>

<!-- AJOUT D'UN MEMBRE -->
<section class="add-form" v-if="form=='addFormStaff'" @click="form=''">

    <div class="content-form" @click.stop>
        
        <!-- HEADER -->
        <div class="close-form">
            <h4>Ajouter un membre</h4>
            <a href="" @click.prevent="toggleForm('')">
                <i class="bi bi-x"></i>
            </a>
        </div>
        
        <!-- FORMULAIRE -->
        <div>
            <form action="insert-member" method="POST">
                <div class="inputs">
                    <input type="text" name="firstname" placeholder="Prénom">
                    <input type="text" name="lastname" placeholder="Nom">

                    <select name="role">
                        <option disabled selected>Choisir un rôle</option>
                        <?php foreach ($roles as $role) : ?>
                            <option value="<?= $role->id ?>">
                                <?= $role->title ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <input type="email" name="email" placeholder="Courriel">
                    <input type="password" name="password" placeholder="Mot de passe">
                </div>

                <input type="submit" value="Ajouter un membre">
            </form>
        </div>

    </div>

</section>