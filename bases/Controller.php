<?php

namespace Bases;

class Controller
{
    /**
     * Prend en charge les routes inexistantes et affiche une erreur 404
     * 
     * @return void
     */
    public function error404()
    {
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
    protected function redirect($url)
    {
        header("location: $url");
        exit();
    }

    /**
     * Inclut la vue spécifiée
     *
     * @param string $path
     * @param array $data
     * @return void
     */
    protected function view($path, $data = [])
    {
        extract($data);
        include("views/$path.view.php");
    }
}
