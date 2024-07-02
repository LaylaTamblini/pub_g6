<!-- Formulaire d'ajout d'une catégorie -->
<section class="add-form" v-if="form=='addFormCategories'" @click="form=''">
    <div class="content-form" @click.stop>
        <div class="close-form">
            <h4>Ajouter une catégorie</h4>
            <a href="" @click.prevent="toggleForm('')">
                <i class="bi bi-x"></i>
            </a>
        </div>
    
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

<!-- Formulaire d'ajout d'un plat -->
<section class="add-form" v-if="form=='addFormDishes'" @click="form=''">
    <div class="content-form" @click.stop>
        <div class="close-form">
            <h4>Ajouter un plat</h4>
            <a href="" @click.prevent="toggleForm('')">
                <i class="bi bi-x"></i>
            </a>
        </div>
    
        <div>
            <form action="insert-dish" method="POST">
                <div class="inputs">
                    <input type="text" name="name" placeholder="Nom du plat">
                    <textarea name="description" cols="30" rows="10">Decription du plat</textarea>
                    <input type="text" name="price" placeholder="Prix du plat">
                    <input type="text" name="name" placeholder="Image du plat">
                    <input type="text" name="alt" placeholder="Description de l'image">
                </div>
    
                <input type="submit" value="Ajouter un plat">
            </form>
        </div>
    </div>
</section>

<!-- Formulaire d'ajout d'un membre -->
<section class="add-form" v-if="form=='addFormStaff'" @click="form=''">
    <div class="content-form" @click.stop>
        <div class="close-form">
            <h4>Ajouter un membre</h4>
            <a href="" @click.prevent="toggleForm('')">
                <i class="bi bi-x"></i>
            </a>
        </div>
    
        <div>
            <form action="insert-member" method="POST">
                <div class="inputs">
                    <input type="text" name="firstname" placeholder="Prénom">
                    <input type="text" name="lastname" placeholder="Nom">
                    <input type="email" name="email" placeholder="Courriel">
                    <input type="password" name="password" placeholder="Mot de passe">
                </div>
    
                <input type="submit" value="Ajouter un membre">
            </form>
        </div>
    </div>
</section>