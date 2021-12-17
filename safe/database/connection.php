<?php
$host = "localhost";
$user = "root";
$db_password = "";
$db_name = "safe";


$connection = mysqli_connect($host, $user, $db_password, $db_name) or die("Could not connect to the database");


$table_query = "CREATE TABLE IF NOT EXISTS `admin`(
    `admin_id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(40) NOT NULL,
    `password` VARCHAR(40) NOT NULL,
    `name` VARCHAR(40) NOT NULL

    )";

$table_query_result = mysqli_query($connection, $table_query);

if ($table_query_result) {

    $admin_query = "INSERT INTO admin (`admin_id`, `username`, `password`, `name`) VALUES(
        '2', 'oluwafemi', 'samuel_admin', 'administrator'
    )";

    $admin_result = mysqli_query($connection, $admin_query);
} else {
    echo mysqli_error($connection);
}


$course_table = "CREATE TABLE IF NOT EXISTS `course_table`(
    `course_id` INT AUTO_INCREMENT PRIMARY KEY,
    `courseName` VARCHAR(40) NOT NULL,
    `courseCode` VARCHAR(40) NOT NULL,
    `students_enrolled` VARCHAR(40) NOT NULL DEFAULT 0,
    `numbers_of_students` VARCHAR(40) NOT NULL DEFAULT 0,
    `schedule_action` VARCHAR(40) NOT NULL,
    `course_msg` VARCHAR(40) NOT NULL
    )";

$course_table_result = mysqli_query($connection, $course_table);

$registration_table = "CREATE TABLE IF NOT EXISTS `registration_table`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `course_id` VARCHAR(40) NOT NULL,
    `schedule_id` VARCHAR(40) NOT NULL DEFAULT 0,
    `user_id` VARCHAR(40) NOT NULL,
    `schedule_date` VARCHAR(40) NOT NULL,
    `schedule_time` VARCHAR(40) NOT NULL
    )";

$registration_table_result = mysqli_query($connection, $registration_table);

$users_table = "CREATE TABLE IF NOT EXISTS `users_table`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `firstname` VARCHAR(40) NOT NULL,
    `lastname` VARCHAR(40) NOT NULL,
    `email` VARCHAR(40) NOT NULL,
    `password` VARCHAR(40) NOT NULL,
    `date_registered` TIMESTAMP NOT NULL
    )";

$users_table_result = mysqli_query($connection, $users_table);

if ($course_table_result) {
    echo "success";
} else {
    echo mysqli_error($connection);
}
