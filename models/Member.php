<?php

namespace Models;

use Bases\Model;

class Member extends Model {
    protected $table = "staff";
    
    public function byEmail(string $email) : object|false {
        $sql = "
            SELECT *
            FROM $this->table
            WHERE email = :email
        ";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute([
            ":email" => $email
        ]);

        return $requete->fetch();
    }

}