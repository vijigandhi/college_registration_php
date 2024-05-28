<?php
require "model/dbconnection.php";

$sql = "SELECT * FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>"; // Start a table
    echo "<tr><th>ID</th><th>Name</th><th>DOB</th><th>Email</th><th>Courses</th><th>Mobile</th><th>Modifications</th></tr>"; // Table header row

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["studentName"] . "</td>";
        echo "<td>" . $row["dob"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["course"] . "</td>";
        echo "<td>" . $row["mobile"] . "</td>";
        echo "<td>";
        echo "<button style='background-color: red; color: white; border: none; padding: 5px 10px; margin-right: 5px; cursor: pointer;'><a href='delete.php?id=". $row["id"] . "' style='color: white; text-decoration: none;'>Delete</a></button>";
        echo "<button style='background-color: green; color: white; border: none; padding: 5px 10px; cursor: pointer;'><a href='edit.php?id=". $row['id'] . "' style='color: white; text-decoration: none;'>Edit</a></button>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table><br><br>"; // End the table
} else {
    echo "0 results";
}

$conn->close();
?>
