<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['user_id'];
	 $user_email = $_POST['user_email'];
	 $user_address = $_POST['user_address'];
	 $phone_num = $_POST['phone_num'];
	  $status = $_POST['status'];
	
	 
 mysqli_query($con,"UPDATE user SET user_email='$user_email', user_address = '$user_address',phone_num = '$phone_num' status = '$status', branch_id = '$branch_id' where user_id='$id'")
	 or die(mysqli_error($con)); 
	 
		echo "<script type='text/javascript'>alert('Successfully updated user details!');</script>";
		echo "<script>document.location='setting.php'</script>";
	
} 

 