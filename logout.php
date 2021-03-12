<?php
session_start();
if (empty($_SESSION['id'])):
    header('Location:../index.php');
endif;
?>
<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="../asset/css/logout.css">
    </head>	
    <body>
        <div style="width:150px;margin:auto;height:500px;">
            <?php
            include('../asset/includes/dbcon.php');
            $date = date("Y-m-d H:i:s");
            $id = $_SESSION['id'];
            $remarks = "has logged out the system at ";
            mysqli_query($con, "INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

            session_destroy();

            echo '<meta http-equiv="refresh" content="2;url=../index.php">';
            ?>
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
        </div>
    </body>
</html>
