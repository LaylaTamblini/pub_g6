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
        // Vérification des entrées du formulaire
        if (empty($_POST["email"]) || empty($_POST["password"])) {
            $this->redirect("login?required_inputs");
        }

        $user = (new Member)->allByEmail($_POST["email"]);

        // Vérification du mot de passe
        if (!$user || $_POST["password"] != password_verify($_POST["password"], $user->password)) {
            $this->redirect("login?invalid_information");
        }

        // Récupération des données sur le membre connecté
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
        // Protection de la route
        if (empty($_SESSION["user_id"])) {
            $this->redirect("index");
        }

        // Détruit les données du membre connecté
        session_destroy();

        $this->redirect("index?logout_successful");
    }

    /**
     * Traite l'enregistrement d'un membre dans la base de donnée.
     */
    public function store()
    {
        // Protection de la route
        if (empty($_SESSION["user_id"])) {
            $this->redirect("index");
        }

        // Vérification des entrées du formulaire
        if (
            empty($_POST["firstname"]) ||
            empty($_POST["lastname"]) ||
            empty($_POST["role"]) ||
            empty($_POST["email"]) ||
            empty($_POST["password"])
        ) {
            $this->redirect("admin?required_inputs");
        }

        $user = (new Member)->allByEmail($_POST["email"]);

        // Si l'adresse courriel existe déjà
        if ($user) {
            $this->redirect("admin?existing_email");
        }

        // Insertion dans la bdd
        $success = (new Member)->insert(
            $_POST["firstname"],
            $_POST["lastname"],
            $_POST["role"],
            $_POST["email"],
            password_hash($_POST["password"], PASSWORD_DEFAULT)
        );

        if (!$success) {
            $this->redirect("admin?insertion_failed");
        }

        $this->redirect("admin?insertion_member_successful");
    }

    /**
     * Traite la modification d'une catégorie dans la base de donnée.
     */
    public function update()
    {
        // Protection de la route
        if (empty($_SESSION["user_id"])) {
            $this->redirect("index");
        }

        // Vérification des entrées du formulaire
        if (
            empty($_POST["member_id"]) ||
            empty($_POST["firstname"]) ||
            empty($_POST["lastname"]) ||
            empty($_POST["role"])
        ) {
            $this->redirect("admin?required_inputs");
        }

        // Modification dans la bdd
        $success = (new Member)->edit(
            $_POST["member_id"],
            $_POST["firstname"],
            $_POST["lastname"],
            $_POST["role"]
        );

        if (!$success) {
            $this->redirect("admin?update_failed");
        }

        $this->redirect("admin?update_member_successful");
    }

    /**
     * Traite la suppression d'un membre dans la base de donnée.
     */
    public function destroy()
    {
        // Protection de la route
        if (empty($_SESSION["user_id"])) {
            $this->redirect("index");
        }

        // Vérification des entrées du formulaire
        if (empty($_POST["member_id"])) {
            $this->redirect("admin?not_found");
        }

        // Suppression dans la bdd
        $succes = (new Member)->delete($_POST["member_id"]);

        if (!$succes) {
            $this->redirect("admin?deletion_failed");
        }

        $this->redirect("admin?deletion_member_successful");
    }
}
