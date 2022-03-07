<?php

require_once 'models/products_models.php';

$myPm = new Products_models;
$mycon = $myPm->DB();

print_r($mycon);