<div id = "update<?php echo $id;?>" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
					 <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Edit role Details</h4>
                        </div>
                        <div class="modal-body">
                         <form method = "POST" action = "update_role.php"> 
						   <input type="hidden" name="role_id" value="<?php echo $id;?>">
						  
								<label>Role name</label>
									<input type="text" name = "user_role" class="form-control" value = "<?php echo $row['user_role'];?>">
									<br/>								
								<label>Role Desc</label>
									<input type="text" name = "role_desc" class="form-control" value = "<?php echo $row['role_desc'];?>">
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