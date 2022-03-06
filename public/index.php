<?php 
$page_title = "Shop front"; 
require_once 'header.php'; 
require_once 'includes/sidebar/sidebar.php';
// trying a new approach

if(isset($_GET['page'])){
    $page = $_GET['page'];
    require_once 'pages/'.$page.'.php';
}else{
    require_once 'pages/products.php';
}
require_once 'footer.php';