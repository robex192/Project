<?php 
session_start();
include('../asset/includes/dbcon.php');
	$branch=$_SESSION['branch'];
	$name = $_POST['medicine_name'];
	$medicine_qty = $_POST['medicine_qty'];
	
	date_default_timezone_set('Africa/Addis_Ababa');

	$date = date("Y-m-d H:i:s");
	$id=$_SESSION['id'];
	
	$query=mysqli_query($con,"select medicine_name from product where medicine_id='$name'")or die(mysqli_error());
  
        $row=mysqli_fetch_array($query);
		$product=$row['medicine_name'];
	$remarks="added $medicine_qty of $product";  
	
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));
		
		
	mysqli_query($con,"UPDATE product SET medicine_qty=medicine_qty+'$medicine_qty' where medicine_id='$name' and branch_id='$branch'") or die(mysqli_error($con)); 
			
			mysqli_query($con,"INSERT INTO stockin(medicine_id,medicine_qty,date,branch_id) VALUES('$name','$medicine_qty','$date','$branch')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added new stocks!');</script>";
					  echo "<script>document.location='stockin.php'</script>";  
	
?>