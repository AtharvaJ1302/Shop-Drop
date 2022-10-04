<?php

//require MySQL connection
require('./database/DBController.php');

//require PRODUCT class
require('./database/Product.php');

//require cart class
require('./database/Cart.php');

//DBController object
$db = new DBController();

//Product object
$product = new Product($db);

//cart object
$Cart = new Cart($db);
$arr = array(
    "user_id" =>2,
    "item_id" =>9
);

$Cart -> insertIntoCart($arr);