<?php 

class Database {

    private $db;

    public function __construct(){
        $this->db = new PDO( 'mysql:host=localhost;dbname=php_autoload', 'root', 'roballomax');
    }

    public function getConnection(){
        return $this->db;
    }

}