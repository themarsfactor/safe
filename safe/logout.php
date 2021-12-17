<?php
//1. start a session
session_start();

//2. empty the session array
$_SESSION = [];

//3. destroy the session
session_destroy();

//4. redirect the Admin
header("Location: login.php");
