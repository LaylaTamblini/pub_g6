<?php

namespace Models;

use Bases\Model;

class Tag extends Model
{
    protected $table = "tags";

    /**
     * Ajoute un tag en compagnie de son plat dans la base de donnée.
     *
     * @param int $dish_id
     * @param int $subcategory_id
     * @return boolean
     */
    public function insert(int $dish_id, int $subcategory_id): bool
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

    /**
     * Supprime les tags par ID de plat.
     *
     * @param integer $dish_id
     * @return boolean
     */
    public function deleteByDishId(int $dish_id): bool
    {
        $sql = "
            DELETE FROM $this->table 
            WHERE dish_id = :dish_id
        ";
        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":dish_id" => $dish_id
        ]);
    }
}
