<?php
if (!session_id()) {
    session_start();
}

require_once 'init.php';

//CONFIGURATION for SmartAdmin UI

//ribbon breadcrumbs config
//array("Display Name" => "URL");
$breadcrumbs = array(
    "Home" => APP_URL,
);


if (!isset($_SESSION['jwt'])) {
    header('Location: ' . ASSETS_URL . '/home.php');
    exit();
}

//configuration variables
if (!isset($page_title)) $page_title = "";
if (!isset($page_css)) $page_css = array();
if (!isset($no_main_header)) $no_main_header = false; //set true for lock.php and login.php
if (!isset($page_body_prop)) $page_body_prop = array(); //optional properties for <body>
if (!isset($page_html_prop)) $page_html_prop = array(); //optional properties for <html>
