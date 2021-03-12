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
                    <h2>Add Administrator  Info  </h2><!--<i class = "fa fa-users"></i>-->
                    <ul class="nav navbar-right panel_toolbox"> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					 <div class="box-body">
                     <!-- Date range -->
                  <form id = "formE"method="post" action="add_admin.php" onsubmit="return myFunction()">
				   <div class="form-group">
                    <label class="control-label col-lg-3"for="date">Role</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right"  name="user_role" placeholder="User email" >
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				   <div class="form-group">
                        <label class="control-label col-lg-3"for="date">Full name</label>
                        <div class="input-group col-md-12">
                          <input type="text" class="form-control" name = "user_name" required>
                        
                        </div>
                      </div>
				  <div class="form-group">
                    <label class="control-label col-lg-3"for="date">Email</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right"  name="user_email" placeholder="User email" >
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                <div class="form-group">
                    <label class="control-label col-lg-3"for="date">DOB</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right"  name="user_dob" placeholder="User email" >
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
				  
				  <div class="form-group">
                    <label for="date">Address</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right"  name="user_address" placeholder="User Adress">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				  <div class="form-group">
                        <label  for="date">Gender</label>
                        <div class="input-group col-md-12">
						    <select name="gender" class="form-control" required>
                           <option value="male">Male</option>
                           <option value="female">Female</option>
						   </select>
                         
                        </div>
                      </div>
				    <div class="form-group">
                    <label for="date">Contact #</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right" name="phone_num" placeholder="phone numuber">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				   <div class="form-group">
                    <label for="date">Password</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right" name="password" placeholder="Password">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
			     <input type = "hidden" name = "status" value = "active">
				  
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-2 col-md-offset-3">
                        
                          <button name = "" class="btn btn-block btn-success">Save</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div> </div>
			 