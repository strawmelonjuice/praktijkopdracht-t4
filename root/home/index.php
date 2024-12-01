<?php
include_once "../../include/functions/users.php";
$userManagement = new userMan();
$userManagement->EnsureUserIsLoggedIn();
?>
<!doctype html>
<html lang="nl">
<head>
    <title>Home pagina</title>
</head>
<body>
<h1>Welkom
    <?php
    global $username;
    echo $username;
    ?>
</h1>
<p>Hier komt allemaal gevoelige data!</p>
</body>
