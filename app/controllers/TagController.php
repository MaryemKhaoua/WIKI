<?php

namespace App\models;

use App\core\DataBase;

class TagModel extends DataBase
{
    public function getAllTags()
    {
        $query = $this->connexion()->prepare("SELECT * FROM tags");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getTagById($id)
    {
        $query = $this->connexion()->prepare("SELECT * FROM tags WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(\PDO::FETCH_ASSOC);
    }

    public function createTag($name)
    {
        $query = $this->connexion()->prepare("INSERT INTO tags (name) VALUES (:name)");
        $query->bindParam(':name', $name);
        $query->execute();
    }

    public function updateTag($id, $name)
    {
        $query = $this->connexion()->prepare("UPDATE tags SET name = :name WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->bindParam(':name', $name);
        return $query->execute();
    }

    public function deleteTag($id)
    {
        $query = $this->connexion()->prepare("DELETE FROM tags WHERE id = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}
