
<?php include 'header.php';?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
       <?php include 'main_sidebar.php';?>

        <!-- top navigation -->
       <?php include 'top_nav.php';?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main"> 
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class = "col-md-4 col-lg-4 col-xs-4">
						<?php include 'add_role_form.php';?>
					</div>
					<div class = "col-md-8 col-lg-8 col-xs-8">
						<div class = "x-panel">
						 <table id="datatable" class="table table-striped table-bordered table-responsive">
							 <thead>
								<tr>
									<th>User Role</th>
									<th>Role Description </th>
								    <th>Date </th>
									<th>Action</th>									
								</tr>
							 </thead>
							 <tbody>
									<?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from role_tbl ORDER BY role_id ASC")or die(mysqli_error($con));
										while ($row=mysqli_fetch_array($query1)){
											$id=$row['role_id'];
											
									?>  
								<tr>
									<td><?php echo $row['user_role'];?></td>
									<td><?php echo $row['role_desc'];?></td>
									<td><?php echo $row['date'];?></td>
									
									<div class="container">
                 <td>                        
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Action
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li><a href="#update<?php echo $id;?>" data-toggle = "modal" data-target="#update<?php echo $id;?>" ><i class = "fa fa-pencil"> Edit   </i></a></li>
      <li><a href="#delete<?php echo $id;?>" data-toggle = "modal" data-target="#delete<?php echo $id;?>" ><i class = "fa fa-trash">  Delete </i></a></li>
    
 
    </ul>
  </div>
</div></td>
									
																
								</tr>
										<?php include 'update_role_modal.php';?>
								<?php }?>
							 </tbody>								
						 </table>
						</div>
					</div>
				</div>
			</div>
        </div>		
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
             Kenema Online Pharmacy Management System <a href="#"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

	<?php include 'datatable_script.php';?>
    <!-- /gauge.js -->
  </body>
</html>
