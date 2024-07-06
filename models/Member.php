<?php

namespace Models;

use Bases\Model;

class Member extends Model
{
    protected $table = "staff";

    /**
     * Retourne toutes les entrées sur un utilisateur en fonction de son email.
     *
     * @param string $email
     * @return object|false
     */
    public function allByEmail(string $email): object|false
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

    /**
     * Ajoute un membre dans la base de donnée.
     *
     * @param string $firstname
     * @param string $lastname
     * @param int $role_id
     * @param string $email
     * @param string $password
     * @return boolean
     */
    public function insert(string $firstname, string $lastname, int $role_id, string $email, string $password): bool
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

    /**
     * Modifie un membre dans la base de donnée.
     *
     * @param integer $id
     * @param string $firstname
     * @param string $lastname
     * @param integer $role_id
     * @return boolean
     */
    public function edit(int $id, string $firstname, string $lastname, int $role_id): bool
    {
        $sql = "
            UPDATE $this->table
            SET firstname = :firstname,
                lastname = :lastname,
                role_id = :role_id
            WHERE id = :id
        ";

        $requete = $this->pdo()->prepare($sql);
        return $requete->execute([
            ":id" => $id,
            ":firstname" => $firstname,
            ":lastname" => $lastname,
            ":role_id" => $role_id,
        ]);
    }
}
