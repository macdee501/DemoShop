<?php
//Fetch Products from Database

class productDb{
    public $db = null;
    public function __construct(DBController $db){
        if(!isset($db->connection)) return null;
        $this->db=$db;
    }

    //Fetch Product Data wit getProduct Method
    public function getProduct($table = "product")
    {
       $result = $this->db->connection->query("SELECT * FROM {$table}");

        $resultArray = array();

        while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }
}