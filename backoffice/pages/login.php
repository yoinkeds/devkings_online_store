<?php
/* 
    ##  PHP / HTML      Document
    ##  Document title: login
    ##  Author:         Tim Lopes
    ##  Author email    timlopes.work@gmail.com
    ##  Website:        www.timlopes.eu
    ##  Designed for:   Group project
    ##  Project:        Web Development 
    ##  Dated:          February 2022
*/
require_once 'models/products_models.php';
$myPm = new Products_models;
$mycon = $myPm->DB();

?>

  <?php
    print_r($mycon);
  ?>
