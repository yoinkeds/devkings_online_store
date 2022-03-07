<?php

require_once 'models/products_models.php';
$myPm = new Products_models;
$mycon = $myPm->DB();

?>

  <?php
    print_r($mycon);
  ?>
