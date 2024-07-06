<?php

namespace Controllers;

use Bases\Controller;

use Models\Dish;
use Models\Tag;
use Utils\Upload;

class DishController extends Controller
{

    /**
     * Traite l'enregistrement d'un plat dans la base de donnée.
     */
    public function store()
    {
        // Protection de la route
        if (empty($_SESSION["user_id"])) {
            $this->redirect("index");
        }

        // Vérification des entrées du formulaire
        if (
            empty($_POST["name"]) ||
            empty($_POST["description"]) ||
            empty($_POST["price"]) ||
            empty($_POST["category"])
        ) {
            $this->redirect("admin?required_inputs");
        }

        $image = null;
        if (!empty($_FILES["image"])) {
            $image = (new Upload("image"))->placerDans("uploads");
        }

        $alt = null;
        if (!empty($_POST["alt"])) {
            $alt = $_POST["alt"];
        }

        // Insertion dans la bdd
        $success = (new Dish)->insert(
            $_POST["name"],
            $_POST["description"],
            $_POST["price"],
            $image,
            $alt,
            $_POST["category"]
        );

        if (!$success) {
            $this->redirect("admin?insertion_failed");
        }

        // Retourne l'ID du dernier plat ajouté
        $dish_id = (new Dish)->lastId();

        $subcategories = null;

        // Insertion dans la bdd si $subcategories n'est pas vide
        if (!empty($_POST["subcategories"])) {
            foreach ($_POST["subcategories"] as $subcategory_id) {
                $success = (new Tag)->insert(
                    $dish_id,
                    $subcategory_id
                );

                if (!$success) {
                    $this->redirect("admin?insertion_failed");
                }
            }
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
        if (
            empty($_POST["dish_id"]) ||
            empty($_POST["name"]) ||
            empty($_POST["description"]) ||
            empty($_POST["price"]) ||
            empty($_POST["category"])
        ) {
            $this->redirect("admin?required_inputs");
        }

        // Modification dans la bdd
        $success = (new Dish)->edit(
            $_POST["dish_id"],
            $_POST["name"],
            $_POST["description"],
            $_POST["price"],
            $_POST["category"]
        );

        if (!$success) {
            $this->redirect("admin?update_failed");
        }

        // Insertion dans la bdd si $subcategories n'est pas vide
        if (!empty($_POST["subcategories"])) {

            (new Tag)->deleteByDishId($_POST["dish_id"]);

            foreach ($_POST["subcategories"] as $subcategory_id) {
                $success = (new Tag)->insert(
                    $_POST["dish_id"],
                    $subcategory_id
                );

                if (!$success) {
                    $this->redirect("admin?insertion_failed");
                }
            }
        }

        $this->redirect("admin?update_successful");
    }

    /**
     * Traite la suppression d'un plat dans la base de donnée.
     */
    public function destroy()
    {
        // Protection de la route
        if (empty($_SESSION["user_id"])) {
            $this->redirect("index");
        }

        // Vérification des entrées du formulaire
        if (empty($_POST["dish_id"])) {
            $this->redirect("admin?not_found");
        }

        // Suppression dans la bdd
        $succes = (new Tag)->deleteByDishId($_POST["dish_id"]);

        if (!$succes) {
            $this->redirect("admin?deletion_failed");
        }

        $succes = (new Dish)->delete($_POST["dish_id"]);

        if (!$succes) {
            $this->redirect("admin?deletion_failed");
        }

        $this->redirect("admin?deletion_successful");
    }
}
