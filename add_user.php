<?php 
include 'dbcon.php';
	$username = $_POST['user_role'];
	$user_email = $_POST['user_email']; 
    $user_dob = $_POST['user_dob'];
	$user_address = $_POST['user_address'];
	$gender = $_POST['gender'];
	$phone_num = $_POST['phone_num'];
	$password = $_POST['password'];
	$name = $_POST['user_name'];
	$status = $_POST['status'];
	$branch_id = $_POST['branch_id'];
	
	$pass1=md5($password);
	$salt="a1Bz20ydqelm8m1wql";
	$pass1=$salt.$pass1;
	
	
		mysqli_query($con,"INSERT INTO user
		(user_role,user_email,user_dob,user_address,gender,phone_num,password,user_name,status,branch_id) 
		VALUES
		('$username','$user_email','$user_dob','$user_address','$gender','$phone_num','$pass1','$name','$status', '$branch_id')")
		or die(mysqli_error($con));  
			echo "<script type='text/javascript'>alert('Data Successfully Saved!');</script>";
			echo "<script>window.location='user.php'</script>";   
	


?>