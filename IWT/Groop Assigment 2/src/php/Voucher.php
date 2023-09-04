<?php
require 'connection.php';
// Process the form submission
if (isset($_POST['submit'])) {
    // Retrieve form data
    $Name = $_POST["Name"];
    $VNumber = $_POST["VNumber"];
    $Email = $_POST["Email"];
    $Plan = $_POST["Plan"];
    $Reason = $_POST["Reason"];
    $Date = $_POST["Date"];
    $Phone_Number = $_POST["Phone_Number"];
    $Payment_Type = $_POST["Payment_Type"];


    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    else {
        $stmt = $conn->prepare("INSERT INTO Voucher (Name, VNumber, Email, Plan, Reason, Date, Phone_Number, Payment_Type )
         VALUES ('$Name', '$VNumber', '$Email','$Plan', '$Reason', '$Date', '$Phone_Number', '$Payment_Type' )");
        
        $stmt->execute();

        echo "<h1> Successfully Done</h1>";
        $stmt->close();
    }
    echo "<script> 
    window.location.href = '../html/voucher.html';
    </script>";
    // Close the database connection
    $conn->close();
    
    
}
?>
