<?php

namespace Controllers;

use Bases\Controller;

use Models\Category;

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

    public function update()
    {
        if (empty($_SESSION["user_id"])) {
            $this->redirect("index");
        }

        if (empty($_POST["category_id"]) || empty($_POST["category_name"])) {
            $this->redirect("admin?required_inputs");
        }

        $success = (new Category)->edit(
            $_POST["category_id"],
            $_POST["category_name"]
        );

        if (!$success) {
            $this->redirect("admin?update_failed");
        }

        $this->redirect("admin?update_successful");
    }
}
