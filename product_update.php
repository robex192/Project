<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../asset/includes/dbcon.php');
	$id = $_POST['id'];
	$name =$_POST['medicine_name'];
	$name =$_POST['name'];
	$price = $_POST['medicine_price'];
	$reorder = $_POST['reorder'];
	$category = $_POST['category'];
	$serial = $_POST['serial'];
	$desc = $_POST['desc'];
	
	$pic = $_FILES["image"]["name"];
			if ($pic=="")
			{	
				if ($_POST['image1']<>""){
					$pic=$_POST['image1'];
				}
				else
					$pic="default.gif";
			}
			else
			{
				$pic = $_FILES["image"]["name"];
				$type = $_FILES["image"]["type"];
				$size = $_FILES["image"]["size"];
				$temp = $_FILES["image"]["tmp_name"];
				$error = $_FILES["image"]["error"];
			
				if ($error > 0){
					die("Error uploading file! Code $error.");
					}
				else{
					if($size > 100000000000) //conditions for the file
						{
						die("Format is not allowed or file size is too big!");
						}
				else
				      {
					move_uploaded_file($temp, "../dist/uploads/".$pic);
				      }
					}
			
			}
			
	mysqli_query($con,"update product set medicine_name='$name',medicine_price='$price',
	reorder='$reorder',user_id='$name',cat_id='$category',medicine_pic='$pic',serial='$serial',medicine_desc='$desc' where medicine_id='$id'")or die(mysqli_error($con));
	
	echo "<script type='text/javascript'>alert('Successfully updated product details!');</script>";
	echo "<script>document.location='product.php'</script>";  

	
?>
