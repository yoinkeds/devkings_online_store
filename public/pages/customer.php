<?php
/* 
    ##  PHP / HTML      Document
    ##  Document title: customers main
    ##  Author:         Tim Lopes
    ##  Author email    timlopes.work@gmail.com
    ##  Website:        www.timlopes.eu
    ##  Designed for:   Group project
    ##  Project:        Web Development 
    ##  Dated:          February 2022
*/

?>
<section class="page-section" id="customers">
    <div class="section-container" >
        <?php 
            $tableName = "customers";
            if(isset($_SESSION['user'])){
                require_once 'customers/profile.php';
            }else{
                require_once 'customers/login.php'; 
            }   
        ?>
    </div>
</section>
