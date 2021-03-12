<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="asset/css/login.css">
    </head>
    <body>
        <div id="cssload-pgloading">
            <div class="cssload-loadingwrap">
                <ul class="cssload-bokeh">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>

    </body>

</html>
<?php
include('asset/includes/dbcon.php');

if (isset($_POST['login'])) {
  	
    $user_unsafe = $_POST['user_role'];
    $pass_unsafe = $_POST['password'];
    $branch = $_POST['branch'];
   
    $user = mysqli_real_escape_string($con, $user_unsafe);
    $pass1 = mysqli_real_escape_string($con, $pass_unsafe);

    $pass = md5($pass1);
    $salt = "a1Bz20ydqelm8m1wql";
    $pass = $salt . $pass;
    date_default_timezone_set('Africa/Addis_ababa');
    $date = date("Y-m-d H:i:s");
    $query = mysqli_query($con, "select * from user natural join branch where user_role='$user' and password='$pass' and branch_id='$branch' and status='active'")or die(mysqli_error($con));
    $row = mysqli_fetch_array($query);
    $id = $row['user_id'];
	$user_name = $row['user_name'];
    $user_role = $row['user_role'];
	
    $counter = mysqli_num_rows($query);

    $id = $row['user_id'];
	 $_SESSION['user_name'] = $row['user_id'];
    $_SESSION['branch'] = $row['branch_id'];
    $_SESSION['skin'] = $row['skin'];

    if ($counter == 0) {
        echo "<script type='text/javascript'>alert('Invalid Username or Password!');
	  document.location='index.php'</script>";
    }
    elseif($user == "Data Clerk") {
        $_SESSION['id'] = $id;
        $_SESSION['user_role'] = $user_role;
		$_SESSION['user_name'] = $user_name;
        
        $remarks = "has logged in the system at ";
        mysqli_query($con, "INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));
        
        echo "<script type='text/javascript'>document.location='data_clerk/home.php'</script>"; //header("location:pages/home.php");
       
    }
    elseif ($user == "Pharmacist") {
        $_SESSION['id'] = $id;
        $_SESSION['user_role'] = $user_role;
        $_SESSION['user_name'] = $user_name;
        $remarks = "has logged in the system at ";
        mysqli_query($con, "INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));
        echo "<script type='text/javascript'>document.location='pharmacist/home_pharmacist.php'</script>";
    }
   elseif($user == "Cashier") {
        $_SESSION['id'] = $id;
        $_SESSION['user_role'] = $user_role;
        $_SESSION['user_name'] = $user_name;
        $remarks = "has logged in the system at ";
        mysqli_query($con, "INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));
        echo "<script type='text/javascript'>document.location='cashier/home_cashier.php'</script>";
    }
  elseif($user == "Pharmacy Manager") {
        $_SESSION['id'] = $id;
        $_SESSION['user_role'] = $user_role;
           $_SESSION['user_name'] = $user_name;
        $remarks = "has logged in the system at ";
        mysqli_query($con, "INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));
        echo "<script type='text/javascript'>document.location='pharmacy_manager/home_pharmacy_manager.php'</script>";
    }
    elseif($user == "Stock Manager") {
        $_SESSION['id'] = $id;
        $_SESSION['user_role'] = $user_role;
         $_SESSION['user_name'] = $user_name;
        $remarks = "has logged in the system at ";
        mysqli_query($con, "INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

        echo "<script type='text/javascript'>document.location='stock_manager/home_stock_manager.php'</script>";
    }
	    elseif($user != $user_role) {
        $_SESSION['id'] = $id;
        $_SESSION['user_role'] = $user_role;
         $_SESSION['user_name'] = $user_name;
        $remarks = "has logged in the system at ";
        mysqli_query($con, "INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

        echo "<script type='text/javascript'>alert('user role is inccorrect!')document.location='index.php'</script>";
    }
}
else {
echo "<script type='text/javascript'>alert('No Such kind of account!');document.location='index.php'</script>";	
}
?>


