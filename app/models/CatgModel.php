<?php

namespace App\models;
use App\core\DataBase;

class CatgModel extends DataBase{


    public function addCatg($catg){
        $sql = "INSERT INTO `category` (`name`) VALUES (:catg)";
        $stmt = $this->connexion()->prepare($sql);
        $stmt->bindParam(':catg', $catg, PDO::PARAM_STR);
        $res = $stmt->execute();
        return $res;
    }

    public function getCategories() {
        $sql = "SELECT * FROM `category`";
        $query = $this->connexion()->query($sql);
        $categories = [];

        while ($category = $query->fetch(PDO::FETCH_ASSOC)) {
            $categories[] = $category;
        }

        return $categories;
    }

    public function updateCatg($catgId, $newCatgName){
        $sql = "UPDATE `category` SET `name` = :newCatgName WHERE `id` = :catgId";
        $stmt = $this->connexion()->prepare($sql);
        $stmt->bindParam(':newCatgName', $newCatgName, PDO::PARAM_STR);
        $stmt->bindParam(':catgId', $catgId, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function deleteCatg($catgId){
        $sql = "DELETE FROM `category` WHERE `id` = :catgId";
        $stmt = $this->connexion()->prepare($sql);
        $stmt->bindParam(':catgId', $catgId, PDO::PARAM_INT);
        return $stmt->execute();
    }
}