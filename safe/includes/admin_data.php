<?php
ini_set("display_errors", 'on');
session_start();

//check if admin logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$password = $_SESSION['password'];
