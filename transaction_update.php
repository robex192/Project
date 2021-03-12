<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../asset/includes/dbcon.php');
	$id = $_POST['id'];
	$medicine_qty =$_POST['medicine_qty'];
	$cid =$_POST['cid'];
	
	
	mysqli_query($con,"update temp_trans set medicine_qty='$medicine_qty' where temp_trans_id='$id'")or die(mysqli_error());
	
	
	echo "<script>document.location='transaction.php?cid=$cid'</script>";  

	
?>
