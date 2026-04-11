<?php 
require_once 'config_session.inc.php';

if (!isset($_SESSION["user_id"])) {
    header("Location: ../pages/logins.php");
    die();
}