
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    width: 100%;
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    background-color: #f0f0f0;
}

.container {
  
    width: 100%;
    height: 30px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   
}

.header {
    display: flex;
    justify-content: space-between;
    background-color: #a89595;
    padding: 15px;
}

.logo, .login {
    color: white;
    font-weight: bold;
    font-size: 18px;
    cursor: pointer;
}

.content {
    background-color: #f8d7da;
    text-align: center;
    padding: 40px 20px;
    height: 520px;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.content p {
    margin: 20px 0;
    font-size: 16px;
}

.register-button {
    background-color: #ff9933;
    border: none;
    padding: 10px 20px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    width: 15%;
    margin-left: 43%;
}

.register-button:hover {
    background-color: #e6891e;
}


a{
    text-decoration: none;
    color: white;
}
    img {
        width: 20px;
    }
    span {
    display: flex;
    align-items: center;
    gap: 12px;
}

#customerList{
    display: none;
} 
    </style>
</head>
<body>
<div class="header">
            <div class="logo"><a href="">HOGWARTS UNIVERSITY</a></div>
            <div class='login'><a href='admin.php' id='customerList'>Customer Listing</a></div>
            <?php 
            
            session_start();


         if(isset($_SESSION['name'])){
                echo "<span><a href='logout.php' class='login' id='logout'>Logout</a><img src='view/src/avathar.png'></span>";
            } else {
                echo "<a href='login.php' class='login' id='signup-toggle'>Login</a>";
            }
            ?>
        
</div>

</body>
</html>

