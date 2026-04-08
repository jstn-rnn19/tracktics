<?php
if ($_SERVER["REQUEST_METHOD" === "POST"]) {
    
    $name = $_POST['Name'];
    $name = $_POST['Email'];
    $name = $_POST['Password'];
    $name = $_POST['confirmPass'];

    try {
        require_once 'dbh.inc.php';
        require_once '../models/signup_model.inc.php';
        require_once '../controllers/singup_contr.inc.php';
        
        // ERROR HANDLER
        $errors = [];

        if(is_input_empty($name, $email ,$pwd, $cnfirmpwd)){
            $errors['Enmpty_input'] =  'fill all the fields!';
        }
        if (is_email_invalid($email)) {
            $errors['invalid_email'] =  'Invalid Email!';
        }
        if (is_email_registered($pdo,$email)) {
            $errors['Email_registered'] =  'Email is already registered!';
        }

        require_once 'config_session.inc.php';

        if ($errors) {
            $_SESSION["error_signup"] = $errors;
            header("Location: ../index.php");
            die();
        }

    } catch (PDOException $e) {
    echo "Query Failed: " . $e->getMessage();
    }
}else {
    header("Location: ../pages/register.php");
    die();
}