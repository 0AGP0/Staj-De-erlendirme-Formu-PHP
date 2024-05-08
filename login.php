<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url("background.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
    include "config.php";
    session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

   

    $query = "SELECT * FROM login WHERE username ='$username' AND password='$password'";

    
    $result = $conn->query($query);

    if($result->num_rows == 1){
        header("Location: menu.html");
        exit();
    }else{
        $error = "Yanlış şifre veya isim girildi";
        
    }

    $conn->close();
}