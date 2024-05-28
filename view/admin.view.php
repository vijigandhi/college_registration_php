<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("Location: login");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Listing Page</title>
    <style>

header{
    width: 100%;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: white;
}

tr:nth-child(odd) {
    background-color: white;
}

tr:hover {
    background-color: #ddd;
}

h1{
    text-align: center;
}

    </style>
</head>
<body>
<header>
        <?php require "view/partials/navbar.php"; ?>
    </header>
  
    <?php require "controller/admin.controller.php"; ?>


</body>
</html>