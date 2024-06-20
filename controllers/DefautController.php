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
            "plats" => (new Plat)->toutAvecCategorie(),
            "categories" => (new Categorie)->tout(),
            "titre" => "Accueil du PUB G6"
        ]);
    }

    /**
     * Affiche la page de connexion à l'administration.
     */
    public function login() {
        $this->vue("administration/login", [
            "titre" => "Administration | Login"
        ]);
    }
}