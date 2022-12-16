<?php

session_start();
ob_start();

$db = mysqli_connect('localhost', 'root', '', 'studentp') or die("Database is not connected");
if ($db) {
    $_SESSION['db'] = true;
    $Url = "http://localhost/studentProfile";
}else{
    $_SESSION['db'] = false;
}
$url = parse_url('localhost/studentProfile', PHP_URL_HOST);

?>
