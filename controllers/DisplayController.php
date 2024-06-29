<?php

namespace Controllers;

use Bases\Controller;

use Models\Dish;
use Models\Category;
use Models\Comment;
use Models\Member;

class DisplayController extends Controller {
    /**
     * Affiche la page d'accueil.
     */
    public function index() {
        $this->view("index", [
            "dishes" => (new Dish)->allWithCategoryAndSubcategory(),
            "categories" => (new Category)->all(),
            "comments" => (new Comment)->all(),
            "title" => "Accueil"
        ]);
    }

    /**
     * Affiche la page de connexion à l'administration.
     */
    public function login() {
        $this->view("login", [
            "title" => "Login"
        ]);
    }

    /**
     * Affiche la page d'accueil de l'administration.
     */
    public function admin() {
        $this->view("admin", [
            "dishes" => (new Dish)->allWithCategoryAndSubcategory(),
            "categories" => (new Category)->all(),
            "staff" => (new Member)->all(),
            "title" => "Administration"
        ]);
    }
}