<?php
// Hier zou ik eigenlijk een router maken, maar ik maak gewoon mapkes en zet er index.php in
include_once "../include/functions/users.php";
$userManagement = new userMan();
$userManagement->EnsureUserIsLoggedIn();

header('Location: /home/');