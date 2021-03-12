<?php
session_start();
$branch = $_SESSION['branch'];
include('../asset/includes/dbcon.php');

$name = $_POST['medicine_name'];
$price = $_POST['medicine_price'];
$desc = $_POST['medicine_desc'];
$name = $_POST['name'];
$reorder = $_POST['reorder'];
$category = $_POST['category'];
$serial = $_POST['serial'];

$query2 = mysqli_query($con, "select * from product where medicine_name='$name' and branch_id='$branch'")or die(mysqli_error($con));
$count = mysqli_num_rows($query2);

if ($count > 0) {
    echo "<script type='text/javascript'>alert('Product already exist!');</script>";
    echo "<script>document.location='product.php'</script>";
} else {

    $pic = $_FILES["image"]["name"];
    if ($pic == "") {
        $pic = "default.gif";
    } else {
        $pic = $_FILES["image"]["name"];
        $type = $_FILES["image"]["type"];
        $size = $_FILES["image"]["size"];
        $temp = $_FILES["image"]["tmp_name"];
        $error = $_FILES["image"]["error"];

        if ($error > 0) {
            die("Error uploading file! Code $error.");
        } else {
            if ($size > 100000000000) { //conditions for the file
                die("Format is not allowed or file size is too big!");
            } else {
                move_uploaded_file($temp, "../asset/uploads/" . $pic);
            }
        }
    }

    mysqli_query($con, "INSERT INTO product(medicine_name,medicine_price,medicine_desc,name,medicine_pic,cat_id,reorder,branch_id,serial)
			VALUES('$name','$price','$desc','$name','$pic','$category','$reorder','$branch','$serial')")or die(mysqli_error($con));

    echo "<script type='text/javascript'>alert('Successfully added new product!');</script>";
    echo "<script>document.location='product.php'</script>";
}
?>