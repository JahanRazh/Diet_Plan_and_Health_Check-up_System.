<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Diet plan & health check_up system</title>
      <!--link- style sheets-->
      <link rel="stylesheet" href="../css/tharun.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <style>
         body {
         background-image: url("../images/topview.jpg");
         background-size: cover;
         background-repeat: no-repeat;
         height: 100vh;
         }
         .center {
         text-align: center;
         }
         .error {
         color: red;
         }
         .success {
         color: green;
         }
      </style>
   </head>
   <body bgcolor="#3598dc">
      <div class="center">
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
               <i class="fas fa-search" id="search-btn"></i>
               <i class="fas fa-user" id="login-btn"></i>
            </div>
            <form action="" class="search-bar-container">
               <input type="search" id="search-bar" placeholder="search here">
               <label for="search-bar" class="fas fa-search"></label>
            </form>
         </header>
         <!--header section ends-->
         <br><br><br><br><br><br><br>
         <?php
            // Process the form submission
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve form data
                $first_name = $_POST["first_name"];
                $last_name = $_POST["last_name"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $cpassword = $_POST["confirm_password"];
                $phoneNumber = $_POST["phoneNumber"];
                $country = $_POST["country"];
                $address = $_POST["address"];
                $nic = $_POST["nic"];
            
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
                } else {
                    if ($password != $cpassword) {
                        echo "<h1 class='error'>Confirm password not matched!</h1>";
                        echo "<h1 class='error'>Please try again. Register for the system!</h1>";
                        echo "<h1 class='center'><a href='../html/Registration.html'>Click here to try again.</a></h1>";
                    } else {
                        $stmt = $conn->prepare("INSERT INTO register (FName, lname, Email, Password, phoneNumber, country, address, nic) VALUES ('$first_name', '$last_name', '$email', '$password', '$phoneNumber', '$country', '$address', '$nic')");
                        //$stmt->bind_param("ssss", $first_name, $last_name, $email, $password);
                        $stmt->execute();
                        echo "<h1 class='success'>Registration Successfully Done</h1>";
                        echo "<h1 class='center'><a href='../html/login.html'>Login Account</a></h1>";
                        $stmt->close();
                    }
                }
            
                // Close the database connection
                $conn->close();
            }
            ?>
      </div>
      <!--link js files-->
      <script src="../js/home.js"></script>
   </body>
</html>