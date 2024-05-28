<?php
require "model/dbconnection.php";

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $password = md5($password);
    $adminId = "vijayalakshmi@gmail.com";

    if ($email === $adminId) {
        $getAdminQuery = "SELECT * FROM registration WHERE email = '$adminId' AND password = '$password'";
        $adminQuery = $conn->query($getAdminQuery);

        if ($adminQuery && $adminQuery->num_rows > 0) {
            $_SESSION['name'] = $email;
            header('Location: customerDetail.php?customerDetails=true');
            exit();
        }
    }

    $query = "SELECT id FROM registration WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION['name'] = $email;
            header("Location: dashboard.php");
            exit();
        }
    } else {
        $error = 'Invalid username or password';
        echo $error;
    }
}
?>
