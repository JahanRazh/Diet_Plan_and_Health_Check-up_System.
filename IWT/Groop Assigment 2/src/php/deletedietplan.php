
<?php

require 'connection.php';

$APPID = $_GET['Appid'];
$sql = " DELETE FROM `diatplanappointment` WHERE Appid = $APPID " ;
$query = mysqli_query($conn,$sql);

if ($query) {
	echo "<script> 
	window.location.href = './displaydietplan.php ';
	</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
	
	

?>
