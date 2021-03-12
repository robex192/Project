<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../asset/includes/dbcon.php');
	$id = $_POST['id'];
	$medicine_cat =$_POST['medicine_cat'];
	$medicine_desc = $_POST['medicine_desc'];
	
	
	mysqli_query($con,"update category set medicine_cat='$medicine_cat',medicine_desc='$medicine_desc' where cat_id='$id'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Successfully updated category!');</script>";
	echo "<script>document.location='category.php'</script>";  

	
?>
