<?php
function db(){
    //$db = mysqli_connect("localhost","root","","gmcthail_testthai");
   
      //$conn = new PDO("mysql:host=localhost;dbname=gmcthail_testthai","root","");
      
      $conn = new PDO("mysql:host=localhost;dbname=gmcthail_testthai","root","Ooaakk1q2w3e");
  // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    return $conn;
}