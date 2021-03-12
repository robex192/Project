<?php
session_start();
$branch=$_SESSION['branch'];
	include('../asset/includes/dbcon.php');
	$result=mysqli_query($con,"DELETE FROM temp_trans where branch_id='$branch'")	or die(mysqli_error());
	 echo "<script>document.location='home_pharmacist.php'</script>";  
?>