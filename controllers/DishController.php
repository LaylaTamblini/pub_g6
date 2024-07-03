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

        $success = (new Dish)->insert(
            $_POST["name"],
            $_POST["description"],
            $_POST["price"],
            $image,
            $alt,
            $_POST["category"],
        );

        if (!$success) {
            $this->redirect("admin?registration_failed");
        }

        $dish_id = (new Dish)->lastId();

        $subcategories = null;

        if (!empty($_POST["subcategories"])) {
            foreach ($_POST["subcategories"] as $subcategory_id) {
                $success = (new Tag)->insert(
                    $dish_id,
                    $subcategory_id
                );
            }
        }

        $this->redirect("admin?registration_successful");
    }
}
