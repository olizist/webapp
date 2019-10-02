<?php
session_start();
if(!isset($_SESSION['uid'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
}

//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['uid'];

echo "Hallo User: ".$userid;
?>
