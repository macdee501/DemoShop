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

    //get product using ite_id
    public function getProductId($item_id=null,$table="product")
    {
        if(isset($item_id))
        {
            $result = $this->db->connection->query("SELECT * FROM {$table} WHERE item_id={$item_id}");
            $resultArray = array();

            while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }
    
            return $resultArray;
        }
    }
}