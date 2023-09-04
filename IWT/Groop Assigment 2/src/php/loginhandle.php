<?php
// Process the form submission
$email = $_POST["email"];
$password = $_POST["password"];

// Database connection parameters
$servername = "localhost";
$username = "root";
$db_password = "";
$dbname = "diet_and_health";

// Create a new connection
$conn = new mysqli($servername, $username, $db_password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Prepare and execute the SQL query
$stmt = $conn->prepare("SELECT * FROM register WHERE Email = ? AND Password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows == 1) {
    // User found, perform login action
    echo "<h1>Login Successful</h1>";
    // Further actions can be performed here, such as setting session variables, redirecting to a dashboard, etc.
    
    // Get the RID value from the database
    $row2 = $result->fetch_assoc();
    $RID = $row2['RID'];

    // Close the statement and database connection
    $stmt->close();
    $conn->close();

    // Redirect to the login.php page with RID parameter
    header("Location: login.php?RID=$RID");
    exit();
} else {
    echo "<script>alert('Login Failed! Invalid credentials'); window.location.href = '../html/Registration.html';</script>";
    exit();
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
