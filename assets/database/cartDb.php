<?php

    class cartDb{

        public $db = null;

        public function __construct(DBController $db)
        {
            if(!isset($db->connection)) return null;
            $this->db = $db;
        }

        //insert into cart table
        public function insertIntoCart($params = null,$table="cart")
        {
            if($this->db->connection !=null)
            {
                if($params != null)
                {
                    //"Inser into cart(user_id) values (0)"
                    //get table coloumns
                    $columns = implode(',',array_keys($params));

                    $values = implode(',',array_values($params));

                    //create sql query
                    $quey_string= sprintf("INSERT INTO %s(%s) VALUES (%s)",$table,$columns,$values);

                    //execute query
                    $result = $this->db->connection->query($quey_string);
                    return $result;
                }
            }
        }
        //to get user_id and item_id and insert into cart
        public function addToCart($userid,$itemid)
        {
            if(isset($userid)&& isset($itemid))
            {
                $params= array(
                    "user_id" => $userid,
                    "item_id" => $itemid
                );

                //insert into cart
                $result = $this->insertIntoCart($params);
                if($result)
                {
                    //reload page
                    header("Location:".$_SERVER["PHP_SELF"]);
                }
            }
        }
    }

?>