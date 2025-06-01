<?php

session_start();
use App\database;
use App\product;


require_once "vendor/autoload.php";
require_once "App/functions/function.php";
require_once "App/vaildation/validate.php"; 

require_once "config/db.php";


display_message();
$db = database ::get_instance($connect)->get_connect();

$page = $_GET['page'] ?? 'home';


require "views/layout/header_top_and_middel.php";

switch ($page) {
    case 'home':
        require 'views/home.php';
        break;

     case 'register':
        require 'views/register.php';
        break;   

    case 'login':
        require 'views/login.php';
        break;

   
    default:
        echo "<div class='container py-5'><div class='alert alert-danger'>Page not found!</div></div>";
        break;
}

// include 'views/layouts/footer.php';
