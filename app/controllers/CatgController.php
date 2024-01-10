<?php
include_once "app/models/CAtgModel.php";

class CatgController{
        public function addCategory($name) {
        
        $Obj = new CatgModel();
        $catAdd = $Obj->addCatg($name);
        if ($catAdd) {
            echo "goooooooooood";
            
        } else {
            echo "error";
           
        }
    }

    public function getCategories(){
        $Obj = new CatgModel();
        return $Obj->getCategories();
    }

    public function updateCategory($catgId, $newCatgName){
        $Obj = new CatgModel();
        $catgUpdate = $Obj->updateCatg($catgId, $newCatgName);
        if ($catgUpdate) {
            echo "updated successfully";
        } else {
            echo "error";
        }
    }

    public function deleteCategory($catgId){
        $Obj = new CatgModel();
        $catgDelete = $Obj->deleteCatg($catgId);
        if ($catgDelete) {
            echo "deleted successfully";
        } else {
            echo "Error";
        }
    }
}