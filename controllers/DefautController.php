<?php

namespace Controllers;

use Bases\Controller;

use Models\Dish;
use Models\Category;

class DefautController extends Controller {
    /**
     * Affiche la page d'accueil.
     */
    public function index() {
        $this->view("index", [
            "dishes" => (new Dish)->allWithCategoryAndSubcategory(),
            "categories" => (new Category)->all(),
            "title" => "Accueil"
        ]);
    }

    /**
     * Affiche la page de connexion à l'administration.
     */
    public function login() {
        $this->view("admin/login", [
            "title" => "Login"
        ]);
    }
}