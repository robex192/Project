
<?php 
include 'dbcon.php';
	$user_role = $_POST['user_role'];
	$role_desc = $_POST['role_desc'];
	date_default_timezone_set('Africa/Addis_ababa');
    $date = date("Y-m-d H:i:s");
	
	
		mysqli_query($con,"INSERT INTO role_tbl(user_role,role_desc,date) 
			VALUES('$user_role','$role_desc','$date')")or die(mysqli_error($con));  
			echo "<script type='text/javascript'>alert('Data Successfully Saved!');</script>";
			echo "<script>window.location='role.php'</script>";   
	


?>