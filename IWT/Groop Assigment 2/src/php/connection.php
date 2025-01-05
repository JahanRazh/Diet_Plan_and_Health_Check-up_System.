<?php

$servername = "localhost"; // MAMP uses localhost
$username = "root";        // Default username in MAMP is 'root'
$password = "root";        // Default password in MAMP is 'root'
$db_name = "diet_and_health";
$port = 3308;              // MAMP's MySQL default port

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>
