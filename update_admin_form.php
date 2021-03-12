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
                    <h2>Info  </h2><!--<i class = "fa fa-users"></i>-->
                    <ul class="nav navbar-right panel_toolbox"> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					 <div class="box-body">
                     <!-- Date range -->
                  <form id = "formE"method="post" action="profile_update.php" >
  
                  <div class="form-group">
                    <label class="control-label col-lg-3"for="date">Email </label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right" value="<?php echo $row['user_email'];?>" name="user_email" placeholder="User Email" >
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				  
				  <div class="form-group">
                    <label for="date">User Address</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right" value="<?php echo $row['user_address'];?>" name="user_address" placeholder="User Address">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				  <div class="form-group">
                    <label for="date">Contact #</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right" value="<?php echo $row['phone_num'];?>" name="phone_num" placeholder=" Phone Number">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				  <div class="form-group">
                
                    <div class="input-group col-md-12">
                      <label for="date">Status</label>
								<select name = "status" class = "form-control">
									<option value = "<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
                                      <option>inactive</option>	
									  <option>active</option>
								</select>
                    </div><!-- /.input group -->
					
						
				  
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-2 col-md-offset-4">
                        
                          <button name = "" class="btn btn-block btn-success">Update</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div> </div>