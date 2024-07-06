<?php

namespace Models;

use Bases\Model;

class Dish extends Model
{
    protected $table = "dishes";

    /**
     * Retourne tous les plats (avec catégorie et sous-catégories).
     *
     * @return array|false
     */
    public function allWithCategoryAndSubcategory(): array|false
    {
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

    /**
     * Retourne tous les plats par category_id.
     *
     * @param integer $category_id
     * @return array
     */
    public function allByCategoryId(int $category_id): array
    {
        $sql = "
            SELECT * 
            FROM $this->table 
            WHERE category_id = :category_id
        ";

        $requete = $this->pdo()->prepare($sql);
        $requete->execute([
            ":category_id" => $category_id
        ]);
        return $requete->fetchAll();
    }

    /**
     * Insert un plat dans la base de donnée.
     *
     * @param string $name
     * @param string $description
     * @param string $price
     * @param string $image
     * @param string $alt
     * @param integer $category_id
     * @return void
     */
    public function insert(string $name, string $description, string $price, string $image, string $alt, int $category_id)
    {
        $sql = "
            INSERT INTO $this->table (name, description, price, image, alt, category_id)
            VALUES (:name, :description, :price, :image, :alt, :category_id)
        ";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":name" => $name,
            ":description" => $description,
            ":price" => $price,
            ":image" => $image,
            ":alt" => $alt,
            ":category_id" => $category_id,
        ]);
    }

    /**
     * Modifie un plat dans la base de donnée.
     *
     * @param integer $id
     * @param string $name
     * @param string $description
     * @param string $price
     * @param integer $category_id
     * @return boolean
     */
    public function edit(int $id, string $name, string $description, string $price, int $category_id): bool
    {
        $sql = "
            UPDATE $this->table
            SET name = :name,
                description = :description,
                price = :price,
                category_id = :category_id
            WHERE id = :id
        ";

        $requete = $this->pdo()->prepare($sql);
        return $requete->execute([
            ":id" => $id,
            ":name" => $name,
            ":description" => $description,
            ":price" => $price,
            ":category_id" => $category_id,
        ]);
    }
}
