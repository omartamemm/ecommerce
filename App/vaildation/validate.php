<?php

function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validate_phone($phone) {
    return preg_match('/^[0-9]{11}$/', $phone);
}

function validate_password($password, $confirm_password) {
    return $password === $confirm_password && strlen($password) >= 8;
}

function validate_login($email, $password) {
    return validate_email($email) && !empty($password);
}



