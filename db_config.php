<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "donationdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if($conn) { 
    //echo "success";  
}  
else { 
    die("Error". mysqli_connect_error());  
}
?>