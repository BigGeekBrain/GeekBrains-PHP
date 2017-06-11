<?php

//complete code for index.php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "Dynamic image gallery";
$pageData->content = include_once "views/navigation.php";
$pageData->css = "<link href='css/layout.css' rel='stylesheet' >";
$pageData->addCSS('css/layout.css');
$pageData->addCSS('css/navigation.css');
$userClicked = isset($_GET['page']);
if ( $userClicked ) {
 $fileToLoad = $_GET['page'];
} else {
 $fileToLoad = 'gallery';
}
$pageData->content .= include_once "views/$fileToLoad.php";
$pageData->embeddedStyle = "
<style>
nav a[href *= '?page=$fileToLoad']{
 padding:3px;
 background-color:white;
 border-top-left-radius:3px;
 border-top-right-radius:3px;
}
img{
    max-width:400px;
    max-heigth: 300px;
}
</style>";
//add this new line to embed an external Javascript file to your index.php
$pageData->addScript("js/lightbox.js");
$page = include_once "templates/page.php";
echo $page;
