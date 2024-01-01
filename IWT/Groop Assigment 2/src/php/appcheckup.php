<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoint For Health checkup</title>

    <!--link- style sheets-->
<link rel="stylesheet" href="../css/payment.css">

    

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<style> 
body{
	background-image: url("../images/payment.jpg");
	background-size: cover;
	background-repeat: no-repeat;
	height: 100vh;
}
</style>
</head>
<body>
    <!--header section starts-->
<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <td width="500" height="150"><p align="left"><img src="Img/logo.png" width="100" height="50" alt="logo"></p></td>

    <nav class="navbar">
        <a href="../index.html">Home</a>
        <a href="./about us.html">About us</a>
        <div class="dropdown">
            <button class="dropbtn">services
                <i class="fa fa-caret-down"></i>
            </button>  
            <div class="dropdown-content">
                
                <li type="none"><h1>Customer committment</h1></li>
                <a href="./customer service  plan.html">Customer service plan</a>
                
                <li type="none"><h1>Special Assistance</h1></li>
               
                <a href="./medical-information.html">medical Information</a>
                <a href="./Online Mobile checking.html">Telemedicine</a>
                <a href="./Healthcheckup.html">Health Check_up</a>
                <a href="./Dietplan.html">Diet Plan</a>

                
    
            </div></div>
            <div class="dropdown">
            <button class="dropbtn">Account
                <i class="fa fa-caret-down"></i>
            </button>  
            <div class="dropdown-content">
                
                <li type="none"><h1>user account</h1></li>
                <a href="./medical-information.html">user Profile</a>
                <a href="./viewAppoinment.php">appoinments</a>
    
            </div></div>
        
    <div class="dropdown">
        <button class="dropbtn">payment
            <i class="fa fa-caret-down"></i>
        </button> 
        <div class="dropdown-content">
       
            <li type="none"> <h1>Payment Option</h1></li>
            <a href="../html/payment.html">Online and offline payment option</a>
            <a href="../html/voucher.html">Confirm Your Payment</a>
           
        </div>
    </div>

        <a href="../html/Contact us.html">Contact Us</a>
        <a href="../html/feedback.html">Feedback</a>
    </nav>



    <div class="icons">
        <i class="fas fa-search" id ="search-btn"></i>
        <i class="fas fa-user" id ="login-btn"></i>
        
    </div>
       <form action=""class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here">
        <label for="search-bar" class="fas fa-search"></label>
       </form> 
        
</header>
<!--header section ends-->

<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$doctor_name = $_POST['doctor_name'];
$city = $_POST['city'];
$date = $_POST['date'];
$time = $_POST['Time'];

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "diet_and_health";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// Get the userID from the session
$userID = $_SESSION["RID"];

$sql = "INSERT INTO appointment (aid, name, email, gender, age, doctor_name, city, date, Time)
VALUES ('0', '$name', '$email','$gender','$age', '$doctor_name','$city', '$date', '$time')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('location:viewAppoinment.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

<br /><br /><br /><br />

<div class="container">


</div>
<script>
    function appointment()
    {
        alert("Your appointment is succefully done.");
    }
</script>


    <!--footer section start-->
    <section class="footer"> 

        <div class="box-container">

            <div class="box">
                <h3>About us</h3>
                <a href="./about us.html">About us</a>
                <a href="#">Our community</a>
                <a href="#">Careers</a>
            </div>
            <div class="box">
                <h3>Help</h3>
                <a href="./Contact us.html">24 hours contact center</a>
                <a href="#">FAQs</a>
            </div>
            <div class="box">
                <h3>Terms and Conditions</h3>
                <a href="#">Online Banking Teams of use</a>
                <a href="#">Notice for Travel Agents</a>
            </div>
            <div id="social-links" class="box">
                <h3>Follow us</h3>
              
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    
                
            </div>
        </div>
        <h1 class="credit"><span>@ 2022 All Rights Reseverd </span></h1>
     </section>


<!--footer section end-->


</body>

</html>

