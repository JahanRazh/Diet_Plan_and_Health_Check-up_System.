<?php

include 'connection.php';

$Payid = $_GET['Payid'];
$sql = "DELETE FROM `payment_details` WHERE Payid = $Payid";
$query = mysqli_query($conn, $sql);

if ($query) {
    echo "<script> 
        window.location.href = './paymentdisplay.php';
    </script>";
} else {
    echo "Error: " . mysqli_error($conn);
}

?>



