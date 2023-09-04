
<?php

include 'connection.php';

$VID = $_GET['VID'];
$sql = " DELETE FROM `voucher` WHERE VID = $VID " ;
$query = mysqli_query($conn,$sql);

	
	echo "<script> 
		window.location.href = './displayvoucher.php ';
        </script>";

?>
