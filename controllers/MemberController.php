<?php

namespace Controllers;

use Bases\Controller;

use Models\Member;

class MemberController extends Controller
{

    /**
     * Traite la connexion d'un membre à l'administration.
     */
    public function connect()
    {
        if (empty($_POST["email"]) || empty($_POST["password"])) {
            $this->redirect("login?required_inputs");
        }

        $user = (new Member)->allByEmail($_POST["email"]);

        if (!$user || $_POST["password"] != password_verify($_POST["password"], $user->password)) {
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
    public function disconnect()
    {
        if (empty($_SESSION["user_id"])) {
            $this->redirect("index");
        }

        session_destroy();

        $this->redirect("index?logout_successful");
    }

    /**
     * Traite l'enregistrement d'un membre dans la base de donnée.
     */
    public function store()
    {
        if (
            empty($_POST["firstname"]) ||
            empty($_POST["lastname"]) ||
            empty($_POST["email"]) ||
            empty($_POST["password"])
        ) {

            $this->redirect("admin?informations_requises");
        }

        $user = (new Member)->allByEmail($_POST["email"]);

        if ($user) {
            $this->redirect("admin?erreur_courriel");
        }

        $success = (new Member)->insert(
            $_POST["firstname"],
            $_POST["lastname"],
            $_POST["role"],
            $_POST["email"],
            password_hash($_POST["password"], PASSWORD_DEFAULT)
        );

        if (!$success) {
            $this->redirect("admin?echec_creation");
        }

        $this->redirect("admin?succes_creation");
    }
}
