<?php
header("Access-Control-Allow-Origin: * ");
header('Access-Control-Allow-Methods:GET,PUT,POST,DELETE');
header('Access-Control-Allow-Headers: Origin,Content-Type,Authorization,X-Request-With,Accept');


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn=new mysqli($servername, $username, $password,'test');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else
  {
     // echo "success";
  }