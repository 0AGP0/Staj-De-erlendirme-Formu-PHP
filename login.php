<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $host = "localhost:3307";  // your host name
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "loginphp";

    $conn = new mysqli($host,$dbusername, $dbpassword, $dbname);

    if($conn ->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

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