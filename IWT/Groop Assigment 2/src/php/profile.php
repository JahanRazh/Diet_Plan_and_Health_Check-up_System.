<?php
   include_once 'connection.php';
   
   // Check if RID is specified
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
   
   // Update profile
   if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
       $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
       $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
       $mobileNumber = mysqli_real_escape_string($conn, $_POST['mobileNumber']);
       $nic = mysqli_real_escape_string($conn, $_POST['nic']);
       $country = mysqli_real_escape_string($conn, $_POST['country']);
   
       $updateQuery = "UPDATE register SET Fname='$firstName', Lname='$lastName', phoneNumber='$mobileNumber', nic='$nic', country='$country' WHERE RID='$RID'";
       $updateResult = mysqli_query($conn, $updateQuery);
   
       if ($updateResult) {
           // Profile updated successfully, you can redirect to a success page if needed
           echo "<div class='alert alert-success'>Profile updated successfully.</div>";
           header("Refresh:2");
         } else {
           echo "<div class='alert alert-danger'>Failed to update the profile.</div>";
       }
   }
   
   // Delete profile
   if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
       $deleteQuery = "DELETE FROM register WHERE RID='$RID'";
       $deleteResult = mysqli_query($conn, $deleteQuery);
   
       if ($deleteResult) {
           // Profile deleted successfully, you can redirect to a success page or login page if needed
           echo "<div class='alert alert-success'>Profile deleted successfully.</div>";
           echo "<script>window.location.href = '../html/login.html';</script>";
       } else {
           echo "<div class='alert alert-danger'>Failed to delete the profile.</div>";
       }
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/profile.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <title>User Profile</title>
   </head>
   <body>
      <div class="container rounded bg-white mt-5 mb-5">
         <div class="row">
            <div class="col-md-5 border-right">
               <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                  <img class="rounded-circle mt-5" width="150px" src="https://png.pngtree.com/png-vector/20191101/ourmid/pngtree-cartoon-color-simple-male-avatar-png-image_1934459.jpg">
                  <span class="font-weight-bold"><?php echo $data['Fname']; ?></span>
                  <span class="text-black-50"><?php echo $data['Email']; ?></span>
               </div>
            </div>
            <div class="col-md-5 border-right">
               <div class="p-3 py-5">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                     <h4 class="text-right">User Profile</h4>
                  </div>
                  <form method="POST" onsubmit="return confirm('Are you sure?');">
                     <div class="row mt-2">
                        <div class="col-md-6">
                           <label class="labels">First Name</label>
                           <input type="text" class="form-control" name="firstName" placeholder="First Name" value="<?php echo $data['Fname']; ?>">
                        </div>
                        <div class="col-md-6">
                           <label class="labels">Last Name</label>
                           <input type="text" class="form-control" name="lastName" placeholder="Last Name" value="<?php echo $data['Lname']; ?>">
                        </div>
                     </div>
                     <div class="row mt-3">
                        <div class="col-md-12">
                           <label class="labels">Mobile Number</label>
                           <input type="text" class="form-control" name="mobileNumber" placeholder="Enter Phone Number" pattern="[0-9]{10}" title="Phone number should be 10 digits" value="<?php echo $data['phoneNumber']; ?>">
                        </div>
                        <div class="col-md-12">
                           <label class="labels">Email ID</label>
                           <input type="text" class="form-control" placeholder="Enter Email ID" value="<?php echo $data['Email']; ?>" disabled>
                        </div>
                        <div class="col-md-12">
                           <label class="labels">NIC</label>
                           <input type="text" class="form-control" name="nic" placeholder="NIC" value="<?php echo $data['nic']; ?>">
                        </div>
                     </div>
                     <div class="row mt-3">
                        <div class="col-md-12">
                           <label class="labels">Country</label>
                           <input type="text" class="form-control" name="country" placeholder="Country" value="<?php echo $data['country']; ?>">
                        </div>
                     </div>
                     <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit" name="update">Update Profile</button>
                     </div>
                     <div class="mt-5 text-center">
                        <button class="btn btn-danger profile-button" type="submit" name="delete">Delete Profile</button>
                     </div>
                     <div class="mt-5 text-center">
                        <a href="../index.html" class="btn btn-warning profile-button">Home</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <script>
         if ( window.history.replaceState ) {
             window.history.replaceState( null, null, window.location.href );
         }
      </script>
   </body>
</html>