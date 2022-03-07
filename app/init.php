<?php
//  initialize session to log the use in
    session_start();

// PHP autoload fuction
//  Auto loading required Classes
//  This files recieves classes and distributes it to the all application
    spl_autoload_register(fn($class)=>require_once 'classes/'.$class.'.php');

//  Requiring the cleaner function to clean up data from and to the server
    require_once 'cleaner/cleaner.php';

$DB = new DB;
//$Customer = new Customer;
//$Product = new Product;
// assign database connection to $db_con variable
$db_con = $DB->db_Con();
$fields = $DB->get_table_fields('products');

//$confi = new Config;
//echo Config::getConfig('remember/cookie_name').' : ';
//$customer = new Customer;



