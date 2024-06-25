<?php

namespace Controllers;

use Bases\Controller;

use Models\Plat;
use Models\Categorie;

class DefautController extends Controller {
    /**
     * Affiche la page d'accueil.
     */
    public function index() {
        $this->vue("index", [
            "plats" => (new Plat)->toutAvecCategorieEtSousCategorie(),
            "categories" => (new Categorie)->tout(),
            "titre" => "Accueil"
        ]);
    }

    /**
     * Affiche la page de connexion à l'administration.
     */
    public function login() {
        $this->vue("administration/login", [
            "titre" => "Login"
        ]);
    }
}