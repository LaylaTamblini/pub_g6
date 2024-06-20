<?php

namespace Controllers;

use Bases\Controller;

use Models\Categorie;

class CategorieController extends Controller {
    
    public function index() {
        $this->vue("index", [
            "categories" => (new Categorie)->tout()
        ]);
    }

}