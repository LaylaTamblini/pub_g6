<?php

namespace Models;

use Bases\Model;

class Dish extends Model {
    protected $table = "dishes";
    
    public function allWithCategoryAndSubcategory() {
        $sql = "
            SELECT $this->table.*,
                categories.name AS category_name,
                GROUP_CONCAT(subcategories.name) AS subcategories_name

            FROM $this->table

            JOIN categories 
                ON $this->table.category_id = categories.id

            LEFT JOIN tags 
                ON $this->table.id = tags.dish_id

            LEFT JOIN subcategories 
                ON tags.subcategory_id = subcategories.id

            GROUP BY $this->table.id
        ";

        $requete = $this->pdo()->prepare($sql);
        $requete->execute();

        return $requete->fetchAll();
    }
}