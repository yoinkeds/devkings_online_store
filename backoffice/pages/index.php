<?php

/*
function loadPage($page){
    require_once $page.'.php';
}
function loadDefaultPage(){
    require_once 'products.php';
}
// 1- check if session is ok
// 2- if the session in ok Load main pages
$page = $_GET['page'];
if(isset($_GET['page'])){
    $joson = json_decode($_POST['page'], true);
    $thisPage = $_GET['page'];
    echo $thisPage." or to :".$joson;
}elseif(isset($_GET['page'])){
    echo 'I am set';
    $page = $_GET['page'];
    loadPage($page);
}

//if(!isset($_SESSION['page'])){
//    echo 'I am  Not set 123'; 
//}*/
?>