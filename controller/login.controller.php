<?Php
require "model/dbconnection.php";

session_start();

$email = $_POST['email'];
$password = $_POST['password'];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        $password = md5($password);

        $query = "SELECT id FROM registration WHERE email = '$email' and password='$password'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION['name'] = $email;
                header("location: dashboard.php");
            }
        } else {
            $error = 'Invalid username or password';
        }
    }

    
    ?>