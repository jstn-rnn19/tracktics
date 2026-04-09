<?php

declare(strict_types=1);

function is_input_empty(string $name, string $email, string $pwd, string $confirmpwd) {
    if (empty($name) || empty($email) || empty($pwd) || empty($confirmpwd)) {
        return true;
    }else {
        return false;
    }
};

function is_email_invalid(string $email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }else {
        return false;
    }
};

function is_email_registered(object $pdo, string $email) {
    if (get_email ( $pdo,  $email)) {
        return true;
    }else {
        return false;
    }
};

function conformation_pwd (string $pwd, string $confirmpwd) {
    if ($pwd !== $confirmpwd) {
        return true;
    }else {
        return false;
    }
};

function create_users (object $pdo, string $name, string $email, string $pwd, string $confirmpwd) {
    set_users($pdo,$name,$email,$pwd,);
};