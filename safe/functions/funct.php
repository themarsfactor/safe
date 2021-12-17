<?php
function loginAdmin($username, $password)
{
    require "database/connection.php";
    $login_query = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";

    //run query
    $result = mysqli_query($connection, $login_query);

    // check if query ran
    if ($result) {
        //the query ran
        if (mysqli_num_rows($result) == 1) {
            //there is a match

            //log in admin

            // 1. Start a session
            session_start();

            $_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);

            //redirect to admin's home page


            header("location: admin.php");
        } else {
            //no match found
        }
    } else {
        //the query did not run

    }
}

//FOR COURSE CREATION

function createCourse($courseName, $courseCode, $course_msg,)
{
    require "database/connection.php";
    $login_query = "INSERT * INTO `course_table` ( courseName, courseCode, course_msg) VALUES ('$courseName', '$courseCode', '$course_msg'";

    //run query
    $result = mysqli_query($connection, $login_query);

    // check if query ran
    if ($result) {
        //the query ran
        if (mysqli_num_rows($result) == 1) {
            //there is a match

            //log in admin

            // 1. Start a session
            session_start();

            $_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);

            //redirect to admin's home page


            header("location: admin.php");
        } else {
            //no match found
        }
    } else {
        //the query did not run

    }
}
