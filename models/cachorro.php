<?php
class Cachorro{
 
    // database connection and table name
    private $conn;
    private $table_name = "cachorros";
 
    // object properties
    public $id;
    public $objeto_html;

 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }



    // read cachorros
    public function read(){
 
    // select all query
    $query = "SELECT  id as id, objeto_html as objeto_html FROM . $this->table_name  ";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
   }
}
?>