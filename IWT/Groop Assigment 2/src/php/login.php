<?php
   include_once 'connection.php';
   // Check if the RID parameter is set in the URL
   if (isset($_GET["RID"])) {
       $RID = mysqli_real_escape_string($conn, $_GET["RID"]);
       $query = "SELECT * FROM register WHERE RID = '$RID'";
       
       // Execute the query
       $result = mysqli_query($conn, $query);
       
       // Check if the query was successful
       if ($result) {
           // Fetch the data
           $data = mysqli_fetch_assoc($result);
       } else {
           echo "Failed to fetch data from the database.";
       }
   } else {
       echo "No RID specified";
   }
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Diet plan & health check_up system</title>
      <!--link- style sheets-->
      <link rel="stylesheet" href="../css/tharun.css">
      </a>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <body bgcolor = #3598dc>
      <!--header section starts-->
      <header>
         <div id="menu-bar" class="fas fa-bars"></div>
         <td width="500" height="150">
            <p align="left"><img src="../Img/logo.png" width="100" height="50" alt="logo"></p>
         </td>
         <nav class="navbar">
            <a href="../index.html">Home</a>
            <a href="../html/about us.html">About us</a>
            <div class="dropdown">
               <button class="dropbtn">services
               <i class="fa fa-caret-down"></i>
               </button>  
               <div class="dropdown-content">
                  <li type="none">
                     <h1>Customer committment</h1>
                  </li>
                  <a href="../html/customer service  plan.html">Customer service plan</a>
                  <li type="none">
                     <h1>Special Assistance</h1>
                  </li>
                  <a href="../html/medical-information.html">medical Information</a>
                  <a href="../html/Online Mobile checking.html">Telemedicine</a>
                  <a href="../html/Healthcheckup.html">Health Check_up</a>
                  <a href="../html/Dietplan.html">Diet Plan</a>
                  <li type="none">
                     <h1>Select Appointment</h1>
                  </li>
                  <a href="../html/appcheckup.html">Appointment for check-up</a>
                  <a href="../html/appdietplan.html">Appointment for Diet Plan</a>
               </div>
            </div>
            <div class="dropdown">
               <button class="dropbtn">Payment
               <i class="fa fa-caret-down"></i>
               </button>  
               <div class="dropdown-content">
                  <li type="none">
                     <h1>Payment Option</h1>
                  </li>
                  <a href="../html/payment.html">Online and offline payment option</a>
                  <a href="../html/voucher.html">Confirm Your Payment</a>
               </div>
            </div>
            <a href="../html/Contact us.html">Contact Us</a>
            <a href="../html/feedback.html">Feedback</a>
         </nav>
         <div class="icons">
            <i class="fas fa-search" id ="search-btn"></i>
            <a href="profile.php?RID=<?php echo $RID; ?>"><i class="fas fa-user" id="login-btn"></i></a>
         </div>
         <form action=""class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here">
            <label for="search-bar" class="fas fa-search"></label>
         </form>
      </header>

      <!-- sf -->
      <br><br><br><br><br><br><br>
      <!--background image-->
      <style> 
         body{
         background-image: url("../images/topview.jpg");
         background-size: cover;
         background-repeat: no-repeat;
         height: 100vh;
         }
         
      </style>
      
      <!--link js files-->
      <script src="../js/home.js"></script>
   </body>
</html>
<?php
   // Don't forget to close the database connection
   mysqli_close($conn);
   ?>
