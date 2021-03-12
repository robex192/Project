<?php 

include('../asset/includes/dbcon.php');

	$medicine_cat = $_POST['medicine_cat'];
	$medicine_desc = $_POST['medicine_desc'];
	
	$query2=mysqli_query($con,"select * from category where medicine_cat='$medicine_cat'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('Category already exist!');</script>";
			echo "<script>document.location='category.php'</script>";  
		}
		else
		{			
			mysqli_query($con,"INSERT INTO category(medicine_cat,medicine_desc) VALUES('$medicine_cat','$medicine_desc')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added new category!');</script>";
					  echo "<script>document.location='category.php'</script>";  
		}
?>