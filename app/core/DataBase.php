<?php
namespace App\core;
use PDO;
use PDOException;

class DataBase{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = 'wiki';



    public function connexion() {
        try {
            $this->conn = new PDO("mysql:host={$this->servername};dbname={$this->dbname}",$this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'conencted success';
            
        } catch (PDOException $exception) {
            echo 'error de conection: ' . $exception->getMessage();
        }

        return $this->conn;
    }
}
$Database = new DataBase();
$Database->connexion();
?>