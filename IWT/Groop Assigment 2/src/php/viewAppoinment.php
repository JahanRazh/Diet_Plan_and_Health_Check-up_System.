<?php
include 'connection.php';
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM `appointment` WHERE aid = '$delete_id'") or die('query failed');
        header('location:viewAppoinment.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/viewAppoinment.css">
    <link rel="stylesheet" href="../css/payment.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>view appoinment</title>
</head>
<body>
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

<div class="container">
<?php  
            include 'connection.php';
            session_start();
            $select_appoinment = mysqli_query($conn, "SELECT * FROM `appointment`") or die('query failed');
            if(mysqli_num_rows($select_appoinment) > 0){
                
            while($fetch_appoinment = mysqli_fetch_assoc($select_appoinment)){
        ?>
    <form id="displayForm" action="" method="post">

        <div class="row">

            <div class="col">

                <h3 class="title">User's Appointment Details</h3>

                <div class="inputBox">
                    <span>Full Name:</span>
                    <input type="text" id="display_name" value="<?php echo $fetch_appoinment['name']; ?>" readonly>
                </div>
                <div class="inputBox">
                    <span>Email:</span>
                    <input type="email" id="display_email" value="<?php echo $fetch_appoinment['email']; ?>" readonly>
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>Gender:</span>
                        <input type="text" id="display_gender" value="<?php echo $fetch_appoinment['gender']; ?>" readonly>
                    </div>
                    <div class="inputBox">
                        <span>Age:</span>
                        <input type="text" id="display_age" value="<?php echo $fetch_appoinment['age']; ?>" readonly>
                    </div>
                </div>
                <h1><u>Channeling Details</u></h1>
                <div class="inputBox">
                    <span>Doctor Name:</span>
                    <input type="text" id="display_doctor_name" value="<?php echo $fetch_appoinment['doctor_name']; ?>" readonly>
                </div>
                <div class="inputBox">
                    <span>City:</span>
                    <input type="text" id="display_city" value="<?php echo $fetch_appoinment['city']; ?>" readonly>
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>Appointment Date:</span>
                        <input type="text" id="display_date" value="<?php echo $fetch_appoinment['date']; ?>" readonly>
                    </div>
                    <div class="inputBox">
                        <span>Appointment Time:</span>
                        <input type="text" id="display_time" value="<?php echo $fetch_appoinment['Time']; ?>" readonly>
                    </div>
                </div>

                <div class="buttons">
                    <button type="button" id="updateBtn"><a href="../php/updateAppoinment.php?update=<?php echo $fetch_appoinment['aid']; ?>" style="text-decoration: none; color: inherit;">Update</a></button>
                    <button type="button" id="deleteBtn"><a href="viewAppoinment.php?delete=<?php echo $fetch_appoinment['aid']; ?>" onclick="return confirm('Delete this appoinment?');" style="text-decoration: none; color: inherit;">Delete</a></button>
                </div>
            </div>
        </div>

    </form>
    <?php
      }
    }
    else{
      echo '<p class="empty">no Appointment added yet!</p>';
    }
        
    ?>
</div>



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
                <a href="#">Diet For health</a>
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