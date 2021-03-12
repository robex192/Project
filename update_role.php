<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['role_id']; 
	 $user_role = $_POST['user_role'];
	 $role_desc = $_POST['role_desc'];
	
	 

		 
	 mysqli_query($con,"UPDATE role_tbl SET user_role='$user_role', role_desc = '$role_desc' where role_id='$id'")
	 or die(mysqli_error($con)); 
	
	  
		echo "<script type='text/javascript'>alert('Successfully updated user details!');</script>";
		echo "<script>document.location='role.php'</script>";
	
} 

