<?php

namespace Models;

use Bases\Model;

class Category extends Model {
    protected $table = "categories";
    
    public function insert($name) {
        $sql = "
            INSERT INTO $this->table (name)
            VALUES (:name)
        ";
        
        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":name" => $name
        ]);
    }
}