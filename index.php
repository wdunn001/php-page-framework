<?php 
if (strlen($_GET['page']) < 1) {
$page_content = 'home.php';
}
else {
$page_content = $_GET['page'] . ".php";
}
$page_title = str_replace("_"," ",$page_content);
$page_title = str_replace(".php","",$page_title);
include('Components/master.php');
?>