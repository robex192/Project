  <div class="x_panel">
  <section class="content-header">
           
            <ol class="breadcrumb">
              <li><a href="dashboard_admin.php"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Account Details</li>
			  <li> <a class="active" href="dashboard_admin.php">Back</a></li>
            </ol>
          </section>
		   <?php
		    $id=$_SESSION['id'];
		      $query=mysqli_query($con,"select * from user where user_id='$id'")or die(mysqli_error());
				$row=mysqli_fetch_array($query);
		  ?>
                  <div class="x_title">
                    <h2>Change Password Info  </h2><!--<i class = "fa fa-users"></i>-->
                    <ul class="nav navbar-right panel_toolbox"> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					 <div class="box-body">
                     <!-- Date range -->
                  <form id = "formE"method="post" action="password_update.php" onsubmit="return myFunction()">
  
                  <div class="form-group">
                    <label class="control-label col-lg-3"for="date">Full Name</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right" value="<?php echo $row['user_name'];?>" name="user_name" placeholder="User Name" >
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				  
				  <div class="form-group">
                    <label for="date">User Role</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right" value="<?php echo $row['user_role'];?>" name="user_role" placeholder="User Role">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				  <div class="form-group">
                    <label for="date">Change Password</label>
                    <div class="input-group col-md-12">
                      <input type="password" class="form-control pull-right" id="password" name="password" placeholder="Type new password">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				  <div class="form-group">
                    <label for="date">Confirm New Password</label>
                    <div class="input-group col-md-12">
                      <input type="password" class="form-control pull-right" id="cfmPassword" name="newpassword" placeholder="Reenter new password">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				  <hr>
					<div class="form-group">
                    <label for="date">Enter Old Password to confirm changes</label>
                    <div class="input-group col-md-12">
                      <input type="password" class="form-control pull-right" id="date" name="passwordold" placeholder="Type old password" required>
                    </div><!-- /.input group -->
					
                  </div><!-- /.form group -->
				  
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-2 col-md-offset-4">
                        
                          <button name = "" class="btn btn-block btn-success">Update</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div> </div>
				 
	<script>
function myFunction() {
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("cfmPassword").value;
    var ok = true;
    if (pass1 != pass2) {
        alert("Passwords Do not match");
        document.getElementById("password").style.borderColor = "#E34234";
        document.getElementById("cfmPassword").style.borderColor = "#E34234";
        ok = false;
    }
    else {
        alert("Passwords Match!!!");
    }
    return ok;
}
	</script>