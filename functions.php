<?php

//Require Sql Connection
require "./assets/database/DBController.php";

//Require Product class
require "./assets/database/productDb.php";

//Database Controller object
$db = new DBController();

//Product Controller object
$product = new productDb($db);

