<?php
//ini_set("display_errors", 'on');
if (isset($_POST['login_admin'])) {
    //bring in the connection file

    //extract data
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    //check if fields are empty

    $errors = [];

    if (empty($username)) {
        $errors[] = "Please enter username";
    }

    if (empty($password)) {
        $errors[] = "Please enter password";
    }


    if (empty($errors)) {
        //nno errors found
        //log admin in
        require "functions/funct.php";
        $feedback = loginAdmin($username, $password);
        echo $feedback;
    } else {
        //there are errors
        foreach ($errors as $error) {
            echo "{$error}<br>";
        }
    }
}


//FOR COURSE REGISTRATION

//ini_set("display_errors", 'on');
if (isset($_POST['login_admin'])) {
    //bring in the connection file

    //extract data
    $courseName = trim($_POST['courseName']);
    $courseCode = trim($_POST['courseCode']);
    $course_msg = trim($_POST['course_msg']);
    //check if fields are empty

    $errors = [];

    if (empty($courseName)) {
        $errors[] = "Please enter course Name";
    }

    if (empty($courseCode)) {
        $errors[] = "Please enter course Code";
    }

    if (empty($course_msg)) {
        $errors[] = "Please enter course Description";
    }


    if (empty($errors)) {
        //nno errors found
        //log admin in
        require "functions/funct.php";
        $feedback = loginAdmin($username, $password);
        echo $feedback;
    } else {
        //there are errors
        foreach ($errors as $error) {
            echo "{$error}<br>";
        }
    }
}
