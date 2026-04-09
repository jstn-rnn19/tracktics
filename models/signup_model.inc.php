<?php

declare(strict_types=1);

function get_email (object $pdo, string $email) {
    $query = "SELECT email FROM users_tbl WHERE email = :email;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function set_users (object $pdo, string $name, string $email, string $pwd) {
    $query = "INSERT INTO users_tbl (name, email, pwd) VALUES (:name, :email, :password);";

    $stmt = $pdo->prepare($query);
    $options = [
        'cost' => 12
        ];

    $hashpwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $hashpwd);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
};

