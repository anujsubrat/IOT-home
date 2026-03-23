<?php
// Start session if needed
session_start();

$servername = "localhost";  
$username   = "root";        
$password   = "";            
$dbname     = "iot"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email    = $_POST['email'];
$password = $_POST['password'];

// Prevent SQL injection
$email    = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);


$sql    = "SELECT * FROM `userinfo` WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Credentials match
    $_SESSION['email'] = $email;
    header("Location: https://blr1.blynk.cloud/dashboard/640066/global/devices/1/organization/640066/devices/1995830/dashboard");
    exit();
} else {
    
    echo "Password not match";
    echo "<center><button><a href='index.html'>Login</a></button></center>";
}

$conn->close();
?>