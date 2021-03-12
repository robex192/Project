<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['user_id'];
	 $user_role = $_POST['user_role'];
	 $user_name = $_POST['user_name'];
	 $user_email = $_POST['user_email'];
	 $user_address = $_POST['user_address'];
	  
	  $phone_num = $_POST['phone_num'];
	 $password = $_POST['password'];
	 $status = $_POST['status'];
	 $branch_id = $_POST['branch_id'];
	 
	 if($password=="")
	 {
		 
	 mysqli_query($con,"UPDATE user SET user_role='$user_role', user_name = '$user_name',user_email = '$user_email',user_address = '$user_address',phone_num = '$phone_num', status = '$status', branch_id = '$branch_id' where user_id='$id'")
	 or die(mysqli_error($con)); 
	 }
	 else
	 {
		 $pass=md5($password);
		$salt="a1Bz20ydqelm8m1wql";
		$pass=$salt.$pass;

		 mysqli_query($con,"UPDATE user SET user_role='$user_role', user_name = '$user_name',user_email = '$user_email',user_address = '$user_address',phone_num = '$phone_num', password = '$pass', status = '$status', branch_id = '$branch_id' where user_id='$id'")
	 or die(mysqli_error($con)); 
	 }
		echo "<script type='text/javascript'>alert('Successfully updated user details!');</script>";
		echo "<script>document.location='user.php'</script>";
	
} 

 