<!-- MODIFICATION D'UNE CATÉGORIE -->
<section class="edit-form" v-if="form=='editFormCategories'" @click="form=''">

    <div class="content-form" @click.stop>

        <!-- HEADER -->
        <div class="close-form">
            <h4>Modifier la catégorie</h4>
            <a href="" @click.prevent="toggleForm('')">
                <i class="bi bi-x"></i>
            </a>
        </div>

        <!-- FORMULAIRE -->
        <div>
            <form action="edit-category" method="POST">
                <div class="inputs">
                    <input type="hidden" name="category_id" :value="currentObject.id">
                    <input type="text" name="category_name" v-model="currentObject.name">
                </div>

                <input type="submit" value="Modifier la catégorie">
            </form>

            <form action="delete-category" method="POST">
                <input type="hidden" name="category_id" :value="currentObject.id">
        
                <button type="submit">
                    Supprimer la catégorie
                </button>
            </form>
        </div>

    </div>

</section>

<!-- MODIFICATION D'UN PLAT -->
<section class="edit-form" v-if="form=='editFormDishes'" @click="form=''">

    <div class="content-form" @click.stop>

        <!-- HEADER -->
        <div class="close-form">
            <h4>Modifier le plat</h4>
            <a href="" @click.prevent="toggleForm('')">
                <i class="bi bi-x"></i>
            </a>
        </div>

        <!-- FORMULAIRE -->
        <div>
            <form action="edit-dish" method="POST" enctype="multipart/form-data">
                <div class="inputs">
                    <input type="text" name="name" v-model="currentObject.name">
                    <textarea name="description" cols="30" rows="10" v-model="currentObject.description"></textarea>
                    <input type="text" name="price" v-model="currentObject.price">

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
                                        <input type="checkbox" name="subcategories[]" value="<?= $subcategory->id ?>">
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

                    <input type="text" name="alt" v-model="currentObject.alt">
                </div>

                <input type="submit" value="Modifier le plat">
            </form>

            <form action="delete-dish" method="POST">
                <input type="hidden" name="dish_id" :value="currentObject.id">
        
                <button type="submit">
                    Supprimer le plat
                </button>
            </form>
        </div>

    </div>

</section>

<!-- MODIFICATION D'UN MEMBRE -->
<section class="edit-form" v-if="form=='editFormStaff'" @click="form=''">

    <div class="content-form" @click.stop>

        <!-- HEADER -->
        <div class="close-form">
            <h4>Modifier un membre</h4>
            <a href="" @click.prevent="toggleForm('')">
                <i class="bi bi-x"></i>
            </a>
        </div>

        <!-- FORMULAIRE -->
        <div>
            <form action="edit-member" method="POST">
                <div class="inputs">
                    <input type="text" name="firstname" v-model="currentObject.firstname">
                    <input type="text" name="lastname" v-model="currentObject.lastname">

                    <select name="role">
                        <option disabled selected>Choisir un rôle</option>
                        <?php foreach ($roles as $role) : ?>
                            <option value="<?= $role->id ?>">
                                <?= $role->title ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <input type="email" name="email" v-model="currentObject.email">
                    <!-- <input type="password" name="password" v-model="currentObject.password"> -->
                </div>

                <input type="submit" value="Modifier un membre">
            </form>

            <form action="delete-member" method="POST">
                <input type="hidden" name="member_id" :value="currentObject.id">
        
                <button type="submit">
                    Supprimer le membre
                </button>
            </form>
        </div>

    </div>

</section>