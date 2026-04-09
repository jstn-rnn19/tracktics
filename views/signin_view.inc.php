<?php

declare(strict_types=1);

function check_login_errors () {
    if (isset($_SESSION["error_signin"])) {
        $errors = $_SESSION["error_signin"];
        
        echo "<br>";

        foreach ($errors as $error) {
            echo "<p class='text-danger'>" . $error . "</p>";
        }


        unset($_SESSION["error_signin"]);
    }else if (isset($_GET["login"]) && $_GET["login"] === "success") {
        echo "<br>";
        echo "<p class ='text-success'> Signin success</p>";
    }
}