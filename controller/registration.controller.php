<?php
require "./config.php";
require "./model/dbconnection.php";

error_reporting(E_ALL);
ini_set("display_errors", 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $studentName = $_POST['studentName'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $course = $_POST['course'];
    $phone = $_POST['phone'];

    $password = md5($password);

    $sql_insert = "INSERT INTO registration (studentName, dob, email, password, course, mobile)
                VALUES ('$studentName', '$dob', '$email', '$password','$course', '$phone')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "<script>alert('Registration Successfully'); window.location='../login.php';</script>";
    } else {
        echo "failed******";
    }

    $conn->close();
}

?>