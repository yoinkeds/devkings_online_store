<?php


session_start();
$rootDir = basename(__DIR__);
$publicDir = "public";
$_REQUEST['backoffice'] = 'backoffice';
//header('Location:'.$publicDir.'index.php');
function redirect(){
    $publicDir = "public";
    header('Location:'.$publicDir.'/index.php');
    die();
}
if(isset($_REQUEST['backoffice'])){
    if(!isset($_SESSION['backoffice']) && !isset($_SESSION['worker'])){
        redirect();
    }
    if(isset($_SESSION['backoffice']) && !isset($_SESSION['worker'])){
        redirect();
    }
}elseif(!$_REQUEST['backoffice'] || !isset($_SESSION['backoffice']) || !isset($_SESSION['worker'])){
    redirect();
}