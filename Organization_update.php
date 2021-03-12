<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	$name =$_POST['name'];
	$address =$_POST['address'];
	$contact =$_POST['contact'];
	
	mysqli_query($con,"update Organization set organ_name='$name',organ_address='$address',organ_contact='$contact' where organ_id='$id'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Successfully updated Organization details!');</script>";
	echo "<script>document.location='Organization.php'</script>";  

	
?>
