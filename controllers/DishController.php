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
            $this->redirect("admin?registration_failed");
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
                    $this->redirect("admin?registration_failed");
                }
            }
        }

        $this->redirect("admin?registration_successful");
    }
}
