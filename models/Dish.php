<?php

namespace Models;

use Bases\Model;

class Dish extends Model {
    protected $table = "dishes";
    
    public function allWithCategoryAndSubcategory() {
        $sql = "
            SELECT dishes.*,
                categories.name AS category_name,
                GROUP_CONCAT(subcategories.name) AS subcategories_name

            FROM dishes

            JOIN categories 
                ON dishes.category_id = categories.id

            LEFT JOIN tags 
                ON dishes.id = tags.dish_id

            LEFT JOIN subcategories 
                ON tags.subcategory_id = subcategories.id

            GROUP BY dishes.id
        ";

        $requete = $this->pdo()->prepare($sql);
        $requete->execute();

        return $requete->fetchAll();
    }
}