<?php
/* 
    ##  PHP / HTML      Document
    ##  Document title: header
    ##  Author:         Tim Lopes
    ##  Author email    timlopes.work@gmail.com
    ##  Website:        www.timlopes.eu
    ##  Designed for:   Group project
    ##  Project:        Web Development 
    ##  Dated:          February 2022
*/

require_once '../app/init.php';

$site_name          = "OnlineStore";
$site_subject       = array("online store", "eCommerce");
$site_type          = array("Business", "Personal");
$site_owners        = "Onni-Petteri Rantanen, Tim Lopes, Ilyass Suohali";
$site_summary       = "OnlineStore - Quality does not need to be expensive";
$site_description   = "OnlineStore is the most known and visited online store, which provide customers with hight quality eletronics.";
setcookie("OnlineStore", $site_name, time() + 3600, "/");
$path = __DIR__; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?></title>
    <meta name="distribution"   content="Global">
    <meta name="copyright"      content="<?php echo $site_name; ?>">
    <meta name="Classification" content="<?php echo $site_type[0]; ?>">
    <meta name="subject"        content="<?php echo $site_subject[0]; ?>">
    <meta name="url"            content="http://www.<?php echo strtolower($site_name); ?>.com">
    <meta name="identifier-URL" content="http://www.<?php echo $_SERVER['SERVER_NAME']; ?>.com">
    <meta name="summary"        content="<?php echo $site_summary; ?>">
    <meta name="description"    content="<?php echo $site_description; ?>">
    <meta name="owner"          content="<?php echo $site_owners; ?>">
    <!--To load all styles-->
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assets/plugins/css/aos.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    
</head>
<body>
<?php require_once 'includes/navegation/nav.php'; ?>
    <!-- Openning the main page section --->
    <section class="page-section" id="home">

        