<?php 
session_start();
$id=$_SESSION['id'];
$branch=$_SESSION['branch'];	

include('../asset/includes/dbcon.php');

	$cid = $_POST['cid'];
	$name = $_POST['medicine_name'];
	$qty = $_POST['medicine_qty'];
		
			
		$query=mysqli_query($con,"select medicine_price,medicine_id from product where medicine_id='$name'")or die(mysqli_error());
		$row=mysqli_fetch_array($query);
		$price=$row['medicine_price'];
		
		$query1=mysqli_query($con,"select * from temp_trans where branch_id='$branch'")or die(mysqli_error());
		$count=mysqli_num_rows($query1);
		
		$total=$price*$qty;
		
		if ($count>0){
			mysqli_query($con,"update temp_trans set medicine_qty='$qty',medicine_price='$total' where branch_id='$branch'")or die(mysqli_error());
	
		}
		else{
			mysqli_query($con,"INSERT INTO temp_trans(medicine_id,medicine_qty,medicine_price,branch_id) VALUES('$name','$qty','$price','$branch')")or die(mysqli_error($con));
		}

	
		echo "<script>document.location='transaction.php?cid=$cid'</script>";  
	
?>