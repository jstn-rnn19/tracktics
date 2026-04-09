<?php 

declare(strict_types=1);


function is_input_empty (string $email, string $pwd) {
    if (empty($email) || empty($pwd)) {
        return true;
    }else {
        return false;
    }
}

function is_invalid_email (string $email) {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }else {
        return false;
    }
}

function is_email_unregistered (object $pdo,string $email) {
    if (!get_users( $pdo,  $email)) {
        return true;
    }else {
        return false;
    }
}
function is_email_wrong (bool | array $result) {
    if (!$result) {
        return true;
    }else {
        return false;
    }
}
function is_password_wrong(string $pwd, string $hashedpwd) {
    if (!password_verify($pwd, $hashedpwd)) {
        return true;
    }else {
        return false;
    }
}