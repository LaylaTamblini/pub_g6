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

        $user = (new Member)->byEmail($_POST["email"]);

        if(!$user || $_POST["password"] != password_verify($_POST["password"], $user->password) ) {
            $this->redirect("login?invalid_information");
        }

        $_SESSION["user_id"] = $user->id;

        $this->redirect("admin?succes_connexion");
    }

}