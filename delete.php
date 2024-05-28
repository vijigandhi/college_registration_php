<?php
require "model/dbconnection.php";
session_start();

$id = $_GET['id'];

$sql = "DELETE FROM registration WHERE id='$id'";

$result = $conn->query($sql);

if ($result == true) {
    echo "<script type='text/javascript'>
            alert('Record deleted successfully');
            window.location.href = 'admin.php';
          </script>";
    exit();
} else {
    echo "<script type='text/javascript'>
            alert('Record not deleted successfully');
          </script>";
}