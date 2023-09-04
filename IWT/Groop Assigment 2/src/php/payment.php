
<?php
require 'connection.php';
// Process the form submission
if (isset($_POST['submit'])) {
    // Retrieve form data
    $Full_name = $_POST["fullname"];
    $Email = $_POST["email"];
    $address = $_POST["Address"];
    $city = $_POST["city"]; 
    $state = $_POST["state"];
    $zip_code = $_POST["zipcode"];
    $owner_name = $_POST["ownername"];
    $card_no = $_POST["cardno"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $cvv = $_POST["cvv"];
    
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    else {
        $stmt = $conn->prepare("INSERT INTO payment_details(fullName, email, Address, city, state, zipcode, ownername, cardno, month, year, cvv) 
        VALUES ('$Full_name', '$Email','$address', '$city', '$state', '$zip_code', '$owner_name', '$card_no', '$month', '$year','$cvv')");
       
        $stmt->execute();
        echo "<h1>Payment Successfully Done</h1>";
        
        $stmt->close();
    }
    echo "<script> 
        window.location.href = './paymentdisplay.php';
        </script>";
  
    // Close the database connection
    $conn->close();

}
?>







