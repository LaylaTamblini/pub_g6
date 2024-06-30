<?php

namespace Controllers;

use Bases\Controller;

use Models\Member;

class MemberController extends Controller {

    /**
     * Traite la connexion d'un membre à l'administration.
     */
    public function connect() {
        if(empty($_POST["email"]) || empty($_POST["password"])) {
            $this->redirect("login?required_inputs");
        }

        $user = (new Member)->allByEmail($_POST["email"]);

        if(!$user || $_POST["password"] != password_verify($_POST["password"], $user->password) ) {
            $this->redirect("login?invalid_information");
        }

        $_SESSION["user_id"] = $user->id;
        $_SESSION["user_firstname"] = $user->firstname;
        $_SESSION["user_lastname"] = $user->lastname;
        $_SESSION["user_role"] = $user->role;

        $this->redirect("admin?connection_successful");
    }

    /**
     * Traite la déconnexion d'un utilisateur.
     */
    public function disconnect() {
        if(empty($_SESSION["user_id"])) {
            $this->redirect("index");
        }

        session_destroy();

        $this->redirect("index?logout_successful");
    }
}