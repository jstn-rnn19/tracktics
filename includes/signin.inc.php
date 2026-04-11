<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try {
        require_once 'dbh.inc.php';
        require_once '../models/signin_model.inc.php';
        require_once '../controllers/signin_contr.inc.php';


        require_once 'config_session.inc.php';
        //ERROR HANDLERS
        $errors = [];
        if (is_input_empty( $email,  $pwd)) {
            $errors["Empty_input"] = 'Fill all the fields!';
        }
        $result = get_users($pdo, $email);

        if (is_invalid_email ($email)) {
            $errors["Invalid_email"] = "Invalid email address";
        }
        if (is_email_unregistered ($pdo, $email)) {
            $errors['Unregistered_email'] = 'Your email is unregistered!';
        }if (is_email_wrong($result)) {
            $errors['login_incorrect'] = 'Incorrect Login info!';
        }
        if (!is_email_wrong($result) && is_password_wrong($pwd, $result['pwd'])) {
            $errors['login_incorrect'] = 'Incorrect Login info!';
        }
        

        if ($errors) {
            $_SESSION["error_signin"] = $errors;
            header("Location: ../pages/login.php");
            die();
        }
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . '_' . $result["user_id"];
        session_id($sessionId);
        $_SESSION["user_id"] = $result["user_id"]; 
        $_SESSION["last_generation"] = time();

        header("Location: ../pages/dashboard.php");
        $pdo = null;
        $stmt = null;
        die();

    } catch (PDOException $e) {
    echo "Query Failed: " . $e->getMessage();
    }
}else {
    header("Location: ../pages/login.php");
    die();
}