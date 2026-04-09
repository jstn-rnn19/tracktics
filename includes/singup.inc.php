<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $pwd = $_POST['Password'];
    $confirmpwd = $_POST['confirmPass'];

    try {
        require_once 'dbh.inc.php';
        require_once '../models/signup_model.inc.php';
        require_once '../controllers/singup_contr.inc.php';
        
        // ERROR HANDLER
        $errors = [];

        if(is_input_empty($name, $email ,$pwd, $confirmpwd)){
            $errors['Empty_input'] =  'fill all the fields!';
        }
        if (is_email_invalid($email)) {
            $errors['Invalid_email'] =  'Invalid Email!';
        }
        if (is_email_registered($pdo,$email)) {
            $errors['Email_registered'] =  'Email is already registered!';
        } if (conformation_pwd ( $pwd, $confirmpwd)) {
            $errors["Incorrect_pwd"] = 'Either of the password and confirm password is incorrect!';
        }

        require_once 'config_session.inc.php';

        if ($errors) {
            $_SESSION["error_signup"] = $errors;
            $signupData = [
                "name" => $name,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signupData;
            header("Location: ../pages/register.php");
            die();
        }

        create_users($pdo, $name, $email, $pwd, $confirmpwd);

        header("Location: ../pages/register.php?signup=success");

        $pdo = null;
        $stmt = null;
        die();

    } catch (PDOException $e) {
    echo "Query Failed: " . $e->getMessage();
    }
}else {
    header("Location: ../pages/register.php");
    die();
}