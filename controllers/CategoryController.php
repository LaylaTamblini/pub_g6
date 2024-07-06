<?php

namespace Controllers;

use Bases\Controller;

use Models\Category;
use Models\Dish;
use Models\Tag;

class CategoryController extends Controller
{

    /**
     * Traite l'enregistrement d'une catégorie dans la base de donnée.
     */
    public function store()
    {
        // Protection de la route
        if (empty($_SESSION["user_id"])) {
            $this->redirect("index");
        }

        // Vérification des entrées du formulaire
        if (empty($_POST["name"])) {
            $this->redirect("admin?required_inputs");
        }

        // Insertion dans la bdd
        $success = (new Category)->insert(
            $_POST["name"]
        );

        if (!$success) {
            $this->redirect("admin?insertion_failed");
        }

        $this->redirect("admin?insertion_successful");
    }

    /**
     * Traite la modification d'une catégorie dans la base de donnée.
     */
    public function update()
    {
        // Protection de la route
        if (empty($_SESSION["user_id"])) {
            $this->redirect("index");
        }

        // Vérification des entrées du formulaire
        if (empty($_POST["category_id"]) || empty($_POST["category_name"])) {
            $this->redirect("admin?required_inputs");
        }

        // Modification dans la bdd
        $success = (new Category)->edit(
            $_POST["category_id"],
            $_POST["category_name"]
        );

        if (!$success) {
            $this->redirect("admin?update_failed");
        }

        $this->redirect("admin?update_successful");
    }

    /**
     * Traite la suppression d'une catégorie dans la base de donnée.
     */
    public function destroy()
    {
        // Protection de la route
        if (empty($_SESSION["user_id"])) {
            $this->redirect("index");
        }

        // Vérification des entrées du formulaire
        if (empty($_POST["category_id"])) {
            $this->redirect("admin?not_found");
        }

        $dishes = (new Dish)->allByCategoryId($_POST["category_id"]);

        foreach ($dishes as $dish) {
            (new Tag)->deleteByDishId($dish->id);
        }

        foreach ($dishes as $dish) {
            (new Dish)->delete($dish->id);
        }

        // Suppression dans la bdd
        $succes = (new Category)->delete($_POST["category_id"]);

        if (!$succes) {
            $this->redirect("admin?deletion_failed");
        }

        $this->redirect("admin?deletion_successful");
    }
}
