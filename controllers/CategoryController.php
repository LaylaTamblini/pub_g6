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
            $this->redirect("admin?registration_failed");
        }
        
        $this->redirect("admin?registration_successful");
    }
}
