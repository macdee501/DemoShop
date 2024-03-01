<?php
class DBController{

    //Database Connection Properties
    protected $host = "localhost";
    protected $user = "root";
    protected $password = "";
    protected $database = "demo-shop";

    //Connection property
    public $connection = null;

    //Call Constructor
    public function __construct(){


        $this->connection = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->connection->connect_error)
        {
            echo "fail";
        }
    }

    public function __destruct(){
        $this->closeConnection();
    }

    //Closing Connection
    protected function closeConnection(){
        if($this->connection != null){
            $this->connection->close();
            $this->connection = null;
        }

    }
}

