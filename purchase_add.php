<?php 
session_start();
$branch=$_SESSION['branch'];
include('../asset/includes/dbcon.php');

	$id = $_POST['id'];
	$reorder = $_POST['reorder'];
	date_default_timezone_set('Africa/Addis_ababa');
	$date = date("Y-m-d");

			mysqli_query($con,"INSERT INTO purchase_request(medicine_id,branch_id,medicine_qty,request_date,purchase_status)
			VALUES('$id','$branch','$reorder','$date','pending')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added new purchase request!');</script>";
					  echo "<script>document.location='request.php'</script>";  
?>