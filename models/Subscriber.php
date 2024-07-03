<?php

namespace Models;

use Bases\Model;

class Subscriber extends Model
{
    protected $table = "subscribers";

    /**
     * Ajoute un abonné dans la base de donnée.
     *
     * @param string $firstname
     * @param string $lastname
     * @param string $email
     * @return boolean
     */
    public function insert(string $firstname, string $lastname, string $email): bool
    {
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
