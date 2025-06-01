<?php
session_start();

use App\user;
use App\database;


include "../functions/function.php";
include "../user.php";
include "../database.php";
include "../vaildation/validate.php";
include "../../config/db.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $image = $_FILES['image'];



    if (empty($name) || empty($email) || empty($phone) || empty($password) || empty($confirm_password) || empty($image)) {
        set_message("All fields are required.", "danger");
        header("Location: ../../index.php?page=register");
        exit;
    }
    if (!validate_email($email)) {
        set_message("Invalid email format.", "danger");
        header("Location: ../../index.php?page=register");
        exit;
    }
    if (!validate_phone($phone)) {
        set_message("Invalid phone number format.", "danger");
        header("Location: ../../index.php?page=register");
        exit;
    }
    if (!validate_password($password, $confirm_password)) {
        set_message("Invalid password format.", "danger");
        header("Location: ../../index.php?page=register");
        exit;
    }




    $db = database::get_instance($connect)->get_connect();
    $user =  user::create(
        $name,
        $email,
        $password,
        $image,
        $phone,
        $db
    );


    set_message("Registration successful.", "success");
    header("Location: ../../index.php?page=login");
    exit;
} else {
    set_message("Registration failed.", "danger");
    header("Location: ../../index.php?page=register");
    exit;
}
