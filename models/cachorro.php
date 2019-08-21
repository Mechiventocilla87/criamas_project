<?php
class Cachorro{
 
    // database connection and table name
    private $conn;
    private $table_name = "cachorros";
 
    // object properties
    public $id;
    public $raza;
    public $nombres;
    public $origen;
    public $tamanio;
    public $img;

 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }



    // read cachorros
    public function read(){
 
    // select all query
    $query = "SELECT  id as id, raza as raza, nombres as nombres, origen as origen, tamanio as tamanio, img as img FROM . $this->table_name  ";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
   }
}
?>