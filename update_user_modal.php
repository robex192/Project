<div id = "update<?php echo $id;?>" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
					 <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Edit User Details</h4>
                        </div>
                        <div class="modal-body">
                         <form method = "POST" action = "update_user.php"> 
						   <input type="hidden" name="user_id" value="<?php echo $id;?>">
																
								<label>User Role</label>
									<input type="text" name = "user_role" class="form-control" value = "<?php echo $row['user_role'];?>">
									<br/>
									<label>Full name</label>
									<input type="text" name = "user_name" class="form-control" value = "<?php echo $row['user_name'];?>">
									<br/>
								<label>Password</label>
									<input type="password" name = "password" class="form-control" placeholder="Enter to Change Password">
									<br/>
								<label>Phone number</label>
									<input type="text" name = "phone_num" class="form-control" value = "<?php echo $row['phone_num'];?>">
									<br/>
								<label>User address</label>
								   <input type="text" name = "user_address" class="form-control" value = "<?php echo $row['user_address'];?>">
									<br/>
								<label>user email</label>
								   <input type="text" name = "user_email" class="form-control" value = "<?php echo $row['user_email'];?>">
									<br/>
									 
								<label>Status</label>
								<select name = "status" class = "form-control">
									<option value = "<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
                                      <option>inactive</option>	
									  <option>active</option>
								</select>
									<br/>
								<label>Branch Name</label>
									<select name = "branch_id" class = "form-control">
										<option value = "<?php echo $row['branch_id'];?>"><?php echo $row['branch_id'];?></option>
										<option></option>
										<?php	
											include 'dbcon.php';								
										$query4=mysqli_query($con,"select * from branch")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query4)){
											$id3=$row1['branch_id'];
										?>
										<option value = "<?php echo $row1['branch_id'];?>"><?php echo $row1['branch_name'];?></option>
										<?php } ?>
										
									</select>
									<br/>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button  name = "update" class="btn btn-primary">Save changes</button>
						</form>
						</div>
                        <div class="modal-footer">
                          
                        </div>
                      </div>
                    </div>
				</div>