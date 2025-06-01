<?php
// echo "Login page is under construction.";

use App\database;
use App\user;   
use App\login;
include "../login.php";

include "../user.php";  
include "../database.php";
include "../vaildation/validate.php";   
include "../../config/db.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email= trim($_POST['email']);
    $password= trim($_POST['password']);
    // Validate email and password

   

    if (empty($email) || empty($password)) {
        set_message("Email and password are required.", "danger");
        header("Location: ../../index.php?page=login");
        exit;
    }

    // $error=validate_login($email, $password);
    // if ($error) {
    //     set_message($error, "danger");
    //     header("Location: ../../index.php?page=login");
    //     exit;
    // }
    $db = database::get_instance($connect)->get_connect();
    $user = new login($db, $email, $password);
   $user->user_login();


} 

else {
    set_message("Invalid request method.", "danger");
    header("Location: ../../index.php?page=login");
    exit;

set_message("Invalid request method.", "danger");

header("Location: ../../index.php?page=login");
exit;
}   
