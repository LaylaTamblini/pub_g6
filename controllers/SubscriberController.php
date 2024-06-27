<?php

namespace Controllers;

use Bases\Controller;

use Models\Subscriber;

class SubscriberController extends Controller {

    /**
     * Traite l'enregistrement d'un abonné à l'infolettre dans la base de donnée.
     */
    public function store() {
        if(empty($_POST["firstname"]) || 
            empty($_POST["lastname"]) ||
            empty($_POST["email"])) {

            $this->redirect("index?required_inputs#newsletter");
        }

        $success = (new Subscriber)->insert(
            $_POST["firstname"],
            $_POST["lastname"],
            $_POST["email"]
        );
        
        if(!$success) {
            $this->redirect("index?registration_failed#newsletter");
        }

        $this->redirect("index?registration_successful#newsletter");
    }

}