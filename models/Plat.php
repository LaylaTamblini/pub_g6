<?php

namespace Models;

use Bases\Model;

class Plat extends Model {
    protected $table = "plats";
    
    public function toutAvecCategorieEtSousCategorie() {
        $sql = "
            SELECT plats.*,
                categories.titre AS categorie_titre,
                GROUP_CONCAT(sous_categories.titre) AS sous_categories_titres
            FROM plats
            JOIN categories 
                ON plats.categorie_id = categories.id
            LEFT JOIN tags 
                ON plats.id = tags.plat_id
            LEFT JOIN sous_categories 
                ON tags.sous_categorie_id = sous_categories.id
            GROUP BY plats.id
        ";

        $requete = $this->pdo()->prepare($sql);
        $requete->execute();

        return $requete->fetchAll();
    }
}

// SELECT plats.*,
//     categories.titre AS categorie_titre,
//     sous_categories.titre AS tag
    
// FROM plats

// JOIN categories
// 	ON plats.categorie_id = categories.id
    
// JOIN tags 
// 	ON plats.id = tags.plat_id
    
// JOIN sous_categories 
// 	ON tags.sous_categorie_id = sous_categories.id

