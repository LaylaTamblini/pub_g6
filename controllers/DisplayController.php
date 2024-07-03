<?php

namespace Controllers;

use Bases\Controller;

use Models\Dish;
use Models\Category;
use Models\Comment;
use Models\Member;
use Models\Role;
use Models\SubCategory;

class DisplayController extends Controller
{
    /**
     * Affiche la page d'accueil.
     */
    public function index()
    {
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
    public function login()
    {
        // Si un membre est déjà connecté
        if (!empty($_SESSION["user_id"])) {
            $this->redirect("admin");
        }

        $this->view("login", [
            "title" => "Login"
        ]);
    }

    /**
     * Affiche la page d'accueil de l'administration.
     */
    public function admin()
    {
        // Protection de la route
        if (empty($_SESSION["user_id"])) {
            $this->redirect("index");
        }

        $this->view("admin", [
            "dishes" => (new Dish)->allWithCategoryAndSubcategory(),
            "categories" => (new Category)->all(),
            "staff" => (new Member)->all(),
            "roles" => (new Role)->all(),
            "subcategories" => (new SubCategory)->all(),
            "title" => "Administration"
        ]);
    }
}
