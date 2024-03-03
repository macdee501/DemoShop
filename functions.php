<?php

//Require Sql Connection
require "./assets/database/DBController.php";

//Require Product class
require "./assets/database/productDb.php";

//Require Cart DB class
require "./assets/database/cartDb.php";

//Database Controller object
$db = new DBController();

//Product Controller object
$product = new productDb($db);
$product_shuffle= $product->getProduct();


//Cart object
$Cart = new cartDb($db);
$arr=array(
    "user_id"=>1,
    "item_id"=>4

);

$Cart->insertIntoCart($arr);