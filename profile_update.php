<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../asset/includes/dbcon.php');

	$id = $_SESSION['id'];
	$user_email =$_POST['user_email'];
	$user_address =$_POST['user_address'];
	$phone_num =$_POST['phone_num'];
	$status =$_POST['status'];
	mysqli_query($con,"update user set user_email='$user_email',user_address='$user_address',phone_num='$phone_num',status='$status' where user_id='$id'")or die(mysqli_error($con));	
					
					echo "<script>document.location='profile.php'</script>";  
				
	
?>
