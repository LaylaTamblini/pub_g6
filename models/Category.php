<?php

namespace Models;

use Bases\Model;

class Category extends Model
{
    protected $table = "categories";

    /**
     * Ajoute une nouvelle catégorie dans la base de donnée.
     *
     * @param string $name
     * @return boolean
     */
    public function insert(string $name): bool
    {
        $sql = "
            INSERT INTO $this->table (name)
            VALUES (:name)
        ";

        $requete = $this->pdo()->prepare($sql);
        return $requete->execute([
            ":name" => $name
        ]);
    }

    public function edit(int $id, string $name) {
        $sql = "
            UPDATE $this->table
            SET name = :name
            WHERE id = :id
        ";

        $requete = $this->pdo()->prepare($sql);
        return $requete->execute([
            ":id" => $id,
            ":name" => $name
        ]);
    }
}
