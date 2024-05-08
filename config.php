<?php
     $host = "localhost:3307";   
     $dbusername = "root";
     $dbpassword = "";
     $dbname = "loginphp";
 
     $conn = new mysqli($host,$dbusername, $dbpassword, $dbname);
 
     if($conn ->connect_error){
         die("Connection failed: ".$conn->connect_error);
     }
?>