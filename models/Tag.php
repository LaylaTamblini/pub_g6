<?php

namespace Models;

use Bases\Model;

class Tag extends Model {
    protected $table = "tags";

    public function insert($dish_id, $subcategory_id)
    {
        $sql = "
            INSERT INTO $this->table (dish_id, subcategory_id)
            VALUES (:dish_id, :subcategory_id)
        ";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":dish_id" => $dish_id,
            ":subcategory_id" => $subcategory_id
        ]);
    }

}