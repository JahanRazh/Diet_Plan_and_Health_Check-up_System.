
<?php

require 'connection.php';
    

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $phone = $_POST['pnumber'];
    $nutrition_name = $_POST['Nutrition_name'];
    $city = $_POST['city'];
    $date = $_POST['date'];
    $time = $_POST['Time'];
    
   
    // Prepare the SQL statement
    $sql ="INSERT INTO diatplanappointment (Fullname, Email, Gender, Age, pnumber, Nutrition_name, City, Date, Time) 
    VALUES ('$name','$email','$gender','$age','$phone','$nutrition_name','$city','$date','$time')";

    // Execute the update query
    
    $result = mysqli_query($conn,$sql);  
    //$result = $conn->query($sql);

    if ($result) {
        echo "Your appointment is successfully done.";
    } else {
        echo "Error: " . $conn->error;
    }

    echo "<script> 
		window.location.href = '../html/appdietplan.html';
        </script>";

    $sql->close();
}
// Close the database connection
$conn->close();

?>

