<?php

$server ="localhost";
$user ="root";
$password ="";
$database ="test";

$conn = mysqli_connect($server, $user, $password, $database);

if(!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
?>