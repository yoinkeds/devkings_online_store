<?php


$rootDir = basename(__DIR__);
$backofficeDir = "/backoffice";
$_REQUEST['backoffice'] = 'backoffice';

// redirects unaouthorized users to public side
function backTopublic(){
    $publicDir = "../public";
    header('Location:'.$publicDir.'/index.php');
    die();
}
// Asks any users/employees with this link to login
function login(){
    require_once 'pages/login.php';
}
// Allows the login and loads the main backofiice site
function allowed(){
    require_once 'pages/index.php';
}

// Redirecting using Session
$page_title = "OnlineStore - BackOffice"; 
require_once 'header.php';
require_once 'includes/sidebar/sidebar.php';
?>
<div class="section-container">
    <?php
       
        if(isset($_REQUEST['backoffice'])){
            if(!isset($_SESSION['worker'])){
                allowed();
            }
            if(isset($_SESSION['worker'])){
                allowed();
            }
        // prevents unauthorided user from staying @ the backoffice domain
        }elseif(!$_REQUEST['backoffice'] || !isset($_SESSION['worker'])){
            allowed();
        } 
    ?>
</div>
<?php         
require_once 'footer.php';
    
// this is just some code to test the location
//echo basename($path). 'nono </br>'; 
//echo dirname(__FILE__, 3).'</br>'; 
//echo basename(__DIR__).'</br>'; 
//$f= basename($_SERVER['HTTP_HOST']);
// echo 'I am F '.$f.'</br>';
//echo ' and this '.$_SERVER['REQUEST_URI']; 
?>
