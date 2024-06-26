<?php

namespace Models;

use Bases\Model;

class Subscriber extends Model {
    protected $table = "subscribers";
            
    public function insert($firstname, $lastname, $email) {
        $sql = "
            INSERT INTO $this->table (firstname, lastname, email)
            VALUES (:firstname, :lastname, :email)
        ";
        
        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":firstname" => $firstname,
            ":lastname" => $lastname,
            ":email" => $email
        ]);
    }

}