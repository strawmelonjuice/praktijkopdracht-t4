<?php
include_once "../../include/config.php";
include_once "../../include/functions/users.php";
$userManagement = new userMan();

$entered_username = $_POST["username"];
$entered_password = $_POST["password"];
foreach (config["accounts"] as $account) {
    if ($account[0] === $entered_username) {
        if ($account[1] === $entered_password) {
            // correct password
            $_SESSION["uid"] = $account[2];
            header('location: /home');
            exit;
        } else {
            header('location: /login#incorrect_password');
        }
    }
}
header('location: /login#incorrect_username');
