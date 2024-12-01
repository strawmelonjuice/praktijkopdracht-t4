<?php

require_once $_SERVER['DOCUMENT_ROOT']. "../include/config.php";

class userMan
{
    public function __construct()
    {
        session_start();
    }
    public static function GetUserByUID(int $uid): array
    {
        foreach (config["accounts"] as $account) {
            if ($account[2] === $uid) {
                return $account;
            }
        }
        die("ERROR: USER NOT FOUND");
    }

    public static function EnsureUserIsLoggedIn(): void
    {
        if (empty($_SESSION["uid"])) {
            header('location: /login/');
            die;
        } else {
            global $username;
            $username = self::GetUserByUID($_SESSION["uid"])[0];
        }
    }
}
