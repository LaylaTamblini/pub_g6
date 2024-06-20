<?php

namespace Controllers;

use Bases\Controller;

use Models\Plat;
use Models\Categorie;

class PlatController extends Controller {
    
    public function index() {
        $this->vue("index", [
            "plats" => (new Plat)->toutAvecCategorie(),
            "categories" => (new Categorie)->tout(),
            "titre" => "Accueil du PUB G6"
        ]);
    }

}