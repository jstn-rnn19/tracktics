<?php

declare(strict_types=1);

function is_input_empty(string $name, string $email, string $pwd, string $cnfirmpwd) {
    if (empty($name) || empty($email) || empty($pwd) || empty($cnfirmpwd)) {
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