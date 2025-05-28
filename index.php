<?php
$page = $_GET['page'] ?? 'home';

$pageTitle = match ($page) {
    'home' => 'Product List',
    'add-product' => 'Create Product',
    default => 'Page Not Found'
};

require "views/layout/header_top_and_middel.php";

switch ($page) {
    case 'home':
        require 'views/home.php';
        break;

    
    default:
        echo "<div class='container py-5'><div class='alert alert-danger'>Page not found!</div></div>";
        break;
}

include 'views/layouts/footer.php';
