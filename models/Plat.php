<?php

namespace Models;

use Bases\Model;

class Plat extends Model {
    protected $table = "plats";
    
    public function toutAvecCategorie() {
        $sql = "
            SELECT plats.*,
	            categories.titre AS categorie_titre
            FROM plats
            JOIN categories
	            ON plats.categorie_id = categories.id
        ";

        $requete = $this->pdo()->prepare($sql);
        $requete->execute();
        return $requete->fetchAll();
    }
}