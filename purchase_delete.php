<?php
session_start();
include("../asset/includes/dbcon.php");

$user_id=$_SESSION['id'];
$id = $_POST['pr_id'];
	
		$query=mysqli_query($con,"select medicine_name,medicine_qty from product natural join purchase_request where pr_id='$id'")or die(mysqli_error());
			$row=mysqli_fetch_array($query);
			$name=$row['medicine_name'];
			$qty=$row['medicine_qty'];

$result=mysqli_query($con,"DELETE FROM purchase_request WHERE pr_id ='$id'")
	or die(mysqli_error());

			date_default_timezone_set("Africa/Addis_ababa"); 
			$date = date("Y-m-d H:i:s");
	
	$remarks="deleted $qty $name from purchase request";
mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$user_id','$remarks','$date')")or die(mysqli_error($con));

echo "<script>document.location='request.php'</script>";  
?>