<?php

declare(strict_types=1);

function get_email (object $pdo, string $email) {
    $query = "SELECT email FROM users_tbl WHERE name = :email;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParms(":name", $email);
    $stmt->execcute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}