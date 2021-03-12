<?php
include('../asset/includes/dbcon.php');
$id = $_REQUEST['id'];
$id = $_POST['id'];
$result=mysqli_query($con,"DELETE FROM user WHERE user_id ='$id'")
	or die(mysqli_error());
	
echo "<script>document.location='user.php? id=$id'</script>";  
?>