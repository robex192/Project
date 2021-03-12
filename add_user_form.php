  <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Employees Info  </h2><!--<i class = "fa fa-users"></i>-->
                    <ul class="nav navbar-right panel_toolbox"> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action = "add_user.php" method = "POST" enctype = "multipart/form-data">
                      <!--<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Role</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name = "user_role" required>
                          <span class="fa fa-key form-control-feedback right" aria-hidden="true"required ></span>
                        </div>
                      </div>-->
					   <div class="form-group">
          <label class="control-label col-lg-3" for="file">Role Name</label>
          <div class="col-lg-9">
              <select class="form-control select2" style="width: 100%;" name="user_role" required>
                <?php
            
              $query2=mysqli_query($con,"select * from role_tbl order by user_role")or die(mysqli_error());
                while($row2=mysqli_fetch_array($query2)){
                ?>
                  <option value="<?php echo $row2['user_role'];?>"><?php echo $row2['user_role'];?></option>
                <?php }?>
              </select>
          </div>
        </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Password</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="password" name = "password" class="form-control" required>
                          <span class="fa fa-key form-control-feedback right" aria-hidden="true" required></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" style = "font-size:11px;">Full name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name = "user_name" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					 
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" style = "font-size:12px;">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name = "user_email" required>
                          <span class="fa fa-box form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" style = "font-size:11px;">DOB</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="date" class="form-control" name = "user_dob" required>
                          <span class=" form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" style = "font-size:12px;">Address</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name = "user_address" required>
                          <span class="form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" style = "font-size:11px;">Gender</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
						    <select name="gender" class="form-control" required>
                           <option value="male">Male</option>
                           <option value="female">Female</option>
						   </select>
                          <span class=" form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" style = "font-size:11px;">Contact</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name = "phone_num" required>
                          <span class="form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					  <input type = "hidden" name = "status" value = "active">
                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-3">Branch</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                         <select  name = "branch_id" class = "form-control">
						 	<?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from branch ORDER BY branch_id ASC")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query1)){
											$id=$row1['branch_id'];
							?>
							<option value = "<?php echo $row1['branch_id'];?>"><?php echo $row1['branch_name'];?></option>	
							<?php } ?>																 
						 </select>
                          <span class="fa form-control-feedback right" aria-hidden="true"></span>
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
                </div>
				  <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>