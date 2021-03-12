  <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Role </h2><!--<i class = "fa fa-users"></i>-->
                    <ul class="nav navbar-right panel_toolbox"> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action = "add_role.php" method = "POST" enctype = "multipart/form-data">
                      <!--<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Role</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name = "user_role" required>
                          <span class="fa fa-key form-control-feedback right" aria-hidden="true"required ></span>
                        </div>
                      </div>-->
		
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" style = "font-size:11px;">User Role </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name = "user_role" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					 
					    
					  
				<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Description</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <textarea style = "resize:none;" name = "role_desc" class="form-control" required></textarea>
                          <span  aria-hidden="true" required></span>
                        </div>
                      </div>
 
					 
					 
					 
                      <div class="ln_solid"></div>

                     <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                        
                          <button name = "" class="btn btn-block btn-success"><i class = "fa fa-save"></i> Save</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>-