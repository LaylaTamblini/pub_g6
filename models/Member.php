<?php

namespace Models;

use Bases\Model;

class Member extends Model
{
    protected $table = "staff";

    public function allByEmail(string $email)
    {
        $sql = "
            SELECT *,
                roles.title AS role
            FROM $this->table
            JOIN roles 
                ON $this->table.role_id = roles.id
            WHERE email = :email
        ";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute([
            ":email" => $email
        ]);

        return $requete->fetch();
    }

    public function insert($firstname, $lastname, $role_id, $email, $password)
    {
        $sql = "
            INSERT INTO $this->table (firstname, lastname, role_id, email, password)
            VALUES (:firstname, :lastname, :role_id, :email, :password)
        ";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":firstname" => $firstname,
            ":lastname" => $lastname,
            ":role_id" => $role_id,
            ":email" => $email,
            ":password" => $password
        ]);
    }
}
