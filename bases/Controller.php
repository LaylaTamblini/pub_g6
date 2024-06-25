<?php

namespace Bases;

class Controller {
    /**
     * Prend en charge les routes inexistantes et affiche une erreur 404
     * 
     * @return void
     */
    public function error404() {
        $this->view("errors/404", [
            "title" => "Page introuvable"
        ]);
    }

    /**
     * Redirige à l'URL fourni
     *
     * @param string $url
     * @return void
     */
    protected function redirect($url) {
        header("location: $url");
        exit();
    }

    /**
     * Inclut la vue spécifiée
     *
     * @param string $chemin
     * @param array $donnees
     * @return void
     */
    protected function view($chemin, $donnees = []){
        extract($donnees);
        include("views/$chemin.view.php");
    }
}