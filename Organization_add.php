<?php 

include('../asset/includes/dbcon.php');

	$name = $_POST['name'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];	
			
			mysqli_query($con,"INSERT INTO Organization(organ_name,organ_address,organ_contact) 
				VALUES('$name','$address','$contact')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added contract Organization!');</script>";
					  echo "<script>document.location='Organization.php'</script>";  
	
?>