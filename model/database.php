<?php

$dsn = "mysql:host=localhost;dbname=majorproject1";
$username = "root";
$password = "";

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    $error_message = $ex->getMessage();
    echo $error_message;
    exit();
}
