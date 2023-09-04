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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<br><br><br><br><br><br><br><br><br><br><br><br>
<style> 
body{
	background-image: url("../images/mealplan.jpeg");
	background-size: cover;
	background-repeat: no-repeat;
	height: 200vh;
}

table {
    border-collapse: collapse;
    width: 100%;
}
    
th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
    
th {
    background-color: #f2f2f2;
    font-size: 150%;
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
        <a href="../html/about us.html">About us</a>
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
<h1>List of Appointment for Diatplan</h1><br>
<a style='background-color: blue; color: white; padding: 10px 20px; border: none; cursor: pointer;' href="../html/appdietplan.html" role="button">New Appointment</a>
<br><br>
<div>
    <table class="table">
        <thead>
            <tr>
                <td>APPID</td>
                <td>Fullname</td>
                <td>email</td>
                <td>Gender</td>
                <td>Age</td>
                <td>Pnumber</td>
                <td>Nutrition_name</td>
                <td>City</td>
                <td>Date</td>
                <td>Time</td>
            </tr>
        </thead> 
        <tbody>
            <?php
            require('connection.php');
           
            //read all row from databse table
            $sql = "SELECT * FROM diatplanappointment";
            $result = $conn->query($sql);
            if (!$result) {
                die("Invalid query: " . $conn->error);
            }

            // read data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["Appid"] . " </td>
                    <td>" . $row["Fullname"] . "</td>
                    <td>" . $row["Email"] . "</td>
                    <td>" . $row["Gender"] . "</td>
                    <td>" . $row["Age"] . "</td>
                    <td>" . $row["Pnumber"] . "</td>
                    <td>" . $row["Nutrition_name"] . "</td>
                    <td>" . $row["City"] . "</td>
                    <td>" . $row["Date"] . "</td>
                    <td>" . $row["Time"] . "</td>
                    <td>
                    
                    <a href='./updateappdietplan.php?Appid=$row[Appid];'>
                        <button style='background-color: blue; color: white; padding: 10px 20px; border: none; cursor: pointer;'>Edit</button>
                    </a>
                        
                    <a href='./deletedietplan.php?Appid=$row[Appid];'>
                        <button style='background-color: red; color: white; padding: 10px 20px; border: none; cursor: pointer;'>Delete</button>
                    </a>

                    </td>
                </tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
 
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