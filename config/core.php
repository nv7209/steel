<?php
// show error reporting
//error_reporting(E_ALL);
ini_set('display_errors', 'Off'); 
// start php session
//session_start();


if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 
// set your default time-zone
date_default_timezone_set('Asia/Kolkata');
 
// home page url
$home_url="localhost/steel/";
 
// page given in URL parameter, default page is one
$page = isset($_GET['page']) ? $_GET['page'] : 1;
 
// set number of records per page
$records_per_page = 15;
 
// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;

?>