
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Dietplan</title>

    <!--link- style sheets-->
    <link rel="stylesheet" href="../css/Dietplan.css">

    

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<br><br><br><br><br><br><br><br><br><br><br><br>
<style> 
body{
	background-image: url("../images/mealplan.jpeg");
	background-size: cover;
	background-repeat: no-repeat;
	height: 200vh;
}
</style>
</head>
<body>
    <!--header section starts-->
<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <td width="500" height="150"><p align="left"><img src="../Img/logo.png" width="100" height="50" alt="logo"></p></td>

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
include("connection.php");

$appid = $_GET["Appid"];

// Check if the form is submitted and the update button is clicked
if (isset($_POST["update"])) {
    // Get the updated data from the form
    $fullname = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $pnumber = $_POST["pnumber"];
    $nutrition_name = $_POST["Nutrition_name"];
    $city = $_POST["city"];
    $date = $_POST["date"];
    $time = $_POST["Time"];

    // Prepare the update query
    $sql = "UPDATE diatplanappointment SET
        Fullname = '$fullname',
        Email = '$email',
        Gender = '$gender',
        Age = '$age',
        Pnumber = '$pnumber',
        Nutrition_name = '$nutrition_name',
        City = '$city',
        Date = '$date',
        Time = '$time'
        WHERE Appid = $appid";

    // Execute the update query
    if ($conn->query($sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Fetch the current data from the database for the given Appid
$sql = "SELECT * FROM diatplanappointment WHERE Appid = $appid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $row = $result->fetch_assoc())
    {
         // Assign the current data to variables
        $fullname = $row["Fullname"];
        $email = $row["Email"];
        $gender = $row["Gender"];
        $age = $row["Age"];
        $pnumber = $row["Pnumber"];
        $nutrition_name = $row["Nutrition_name"];
        $city = $row["City"];
        $date = $row["Date"];
        $time = $row["Time"];
    }
   
} else {
    echo "No record found";
}
?>

<!-- Display the form with the current data -->
<br><br><br><br><br><br>
<div class="container">
    <form action="" method="post">
        <input type="hidden" name="Appid" value="<?php echo $appid;?>">
        <div class="row">
            <div class="col">
                <h3 class="title">Update Your Appointment </h3>
                <strong>Patient Details</strong>
                <div class="inputBox">
                    <span>Full name:</span>
                    <input type="text" name="name" value="<?php echo $fullname;?>" placeholder="Mr. Kumara Siriwardhana" >
                </div>
                <div class="inputBox">
                    <span>Email:</span>
                    <input type="email" name="email" value="<?php echo $email;?>" placeholder="kumara3165@gmail.com">
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <h3>Gender:</h3>
                        <label>Male</label><input type="radio" name="gender" value="Male" <?php if ($gender == "Male") echo "checked";?>>
                        <label>Female</label><input type="radio" name="gender" value="Female" <?php if ($gender == "Female") echo "checked";?>>
                    </div>
                    <div class="inputBox">
                        <h3>Age:</h3>
                        <input type="text" name="age" value="<?php echo $age;?>">
                    </div>
                    <div class="inputBox">
                        <h3>Phone number:</h3>
                        <input type="text" name="pnumber" value="<?php echo $pnumber;?>" placeholder="+94">
                    </div>
                </div>
                <h1><u>Channeling Details</u></h1>
                <div class="inputBox">
                    <span>Nutrition Name:</span>
                    <input type="text" name="Nutrition_name" value="<?php echo $nutrition_name;?>" placeholder="Mr." >
                </div>
                <div class="inputBox">
                    <span>Branch city:</span>
                    <input type="text" name="city" value="<?php echo $city;?>" placeholder="Colombo" >
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>Appointment Date:</span>
                        <input type="date" name="date" value="<?php echo $date;?>">
                    </div>
                    <div class="inputBox">
                        <span>Appointment Time:</span>
                        <select class="custom-select" name="Time" value="<?php echo $time;?>">
                            <option value="8.30-10.30 AM" >8.30-10.30 AM</option>
                            <option value="10.30-12.30 PM" >10.30-12.30 PM</option>
                            <option value="12.30-2.30 PM" >12.30-2.30 PM</option>
                            <option value="2.30-4.30 PM" >2.30-4.30 PM</option>
                            <option value="4.30-6.30 PM" >4.30-6.30 PM</option>
                            <option value="6.30-8.30 PM" >6.30-8.30 PM</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" value="submit" name="update" class="btn btn-primary btn-lg">Update</button>
        <a href="./displaydietplan.php" class="btn btn-primary btn-lg" role="button">View Appointments</a>
    </form>
</div>


<br><br><br><br><br><br><br><br><br><br>
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
            <a href="#">Notice</a>
        </div>
        <div id="social-links" class="box">
            <h3>Follow us</h3>
              
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    
        </div>
    </div>
        <h1 class="credit"><span>@ 2023 All Rights Reseverd </span></h1>
</section>


<!--footer section end-->

</body>
</html>
