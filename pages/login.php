<?php
require_once '../includes/config_session.inc.php';
require_once '../views/signin_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracktics Sign In</title>
    <link rel="stylesheet" href="../assets/css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container-md mx-auto mt-5 mb-2">
        <form action="../includes/signin.inc.php" method="post" class="sign-in-form">
        <h1 class="text-center" id="Tracktics">Tracktics</h1>
            <div class="d-grid gap-2 col-md mx-auto">
                <div class="form-floating">
                    <input type="email" class="form-control " id="UserEmail" name="email" placeholder="name@example.com" required>
                    <label for="UserEmail">Email address</label>
                    <div class="invalid-feedback email-feedback">Please enter a email address.</div>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="Userpass" name="pwd" placeholder="Password" required>
                    <label for="Userpass">Password</label>
                    <div class="invalid-feedback password-feedback">Password is incorrect.</div>
                </div>
            </div>
            <div class="d-grid gap-2 col-sm mx-auto mt-2">
                <button class="btn btn-primary" type="submit">Sign In</button>
                <button class="btn btn-outline-primary" id="signup" type="button">Sign Up</button>
            </div>
            <?php
                check_login_errors();
            ?>
        </form>

    </div>
    
    <script src="../assets/js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>