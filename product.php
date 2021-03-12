<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Product | <?php include('../asset/includes/title.php'); ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../asset/plugins/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" href="../asset/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../asset/css/skins/_all-skins.min.css">
        <style>

        </style>
    </head>
    <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
    <body class="hold-transition skin-<?php echo $_SESSION['skin']; ?> layout-top-nav">
        <div class="wrapper">
<?php include('../asset/includes/header.php'); ?>
            <!-- Full Width Column -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            <a class="btn btn-lg btn-twitter" href="home.php">Back</a>
                            <a class="btn btn-lg btn-twitter" href="#add" data-target="#add" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-plus text-blue"></i></a>
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li class="active">Product</li>
                        </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        <div class="row">


                            <div class="col-xs-12">
                                <div class="box box-primary">

                                    <div class="box-header">
                                        <h3 class="box-title">Medicine List</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Picture</th>
                                                    <th>Medicine Code</th>
                                                    <th>Medicine Name</th>
                                                    <th>Medicine Description</th>	
                                                    <th>Data Clerk name</th>														
                                                    <th>Qty</th>
                                                    <th>Price</th>


                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                //$query = mysqli_query($con, "select * from product   order by medicine_name")or die(mysqli_error());
												$query=mysqli_query($con,"select * from product natural join user natural join category where branch_id='$branch' order by medicine_name")or die(mysqli_error());
                                                while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                    <tr>
                                                        <td><img style="width:80px;height:60px" src="../asset/uploads/<?php echo $row['medicine_pic']; ?>"></td>
                                                        <td><?php echo $row['serial']; ?></td>
                                                        <td><?php echo $row['medicine_name']; ?></td>
                                                        <td><?php echo $row['medicine_desc']; ?></td> 
														<td><?php echo $row['user_name']; ?></td> 

                                                        <td><?php echo $row['medicine_qty']; ?></td>
                                                        <td><?php echo number_format($row['medicine_price'], 2); ?></td>


                                                        <td><a href="#updateordinance<?php echo $row['medicine_id']; ?>" data-target="#updateordinance<?php echo $row['medicine_id']; ?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-edit text-blue"></i></a></td>
                                                    </tr>
                                                <div id="updateordinance<?php echo $row['medicine_id']; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content" style="height:auto">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span></button>
                                                                <h4 class="modal-title">Update medicine Product Details</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="form-horizontal" method="post" action="product_update.php" enctype='multipart/form-data'>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-3" for="price">Serial #</label>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" class="form-control" id="price" name="serial" value="<?php echo $row['serial']; ?>" required>  
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-3" for="name">Medicine Name</label>
                                                                        <div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="medicine_id" value="<?php echo $row['medicine_id']; ?>" required>  
                                                                            <input type="text" class="form-control" id="name" name="medicine_name" value="<?php echo $row['medicine_name']; ?>" required>  
                                                                        </div>
                                                                    </div> 
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-3" for="name">Description</label>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" class="form-control" id="name" name="medicine_desc" value="<?php echo $row['medicine_desc']; ?>" required>  
                                                                        </div>
                                                                    </div> 
<div class="form-group">
					<label class="control-label col-lg-3" for="file">Supplier</label>
					<div class="col-lg-9">
					    <select class="form-control select2" style="width: 100%;" name="supplier" required>
						  <option value="<?php echo $row['user_id'];?>"><?php echo $row['user_id'];?></option>
					      <?php
						
							$query2=mysqli_query($con,"select * from user where branch_id=5 and user_role='Data Clerk'")or die(mysqli_error());
							  while($row2=mysqli_fetch_array($query2)){
					      ?>
							    <option value="<?php echo $row['user_id'];?>"><?php echo $row2['user_name'];?></option>
					      <?php }?>
					    </select>
					</div>
				</div> 

                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-3" for="price">Price</label>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" class="form-control" id="price" name="medicine_price" value="<?php echo $row['medicine_price']; ?>" required>  
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-3" for="price">Reorder</label>
                                                                        <div class="col-lg-9">
                                                                            <input type="number" class="form-control" id="price" name="reorder" value="<?php echo $row['reorder']; ?>" required>  
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-lg-3" for="price">Picture</label>
                                                                        <div class="col-lg-9">
                                                                            <input type="hidden" class="form-control" id="price" name="image1" value="<?php echo $row['medicine_pic']; ?>"> 
                                                                            <input type="file" class="form-control" id="price" name="image">  
                                                                        </div>
                                                                    </div>
                                                            </div><br><br><br><br><br><br><br>
															
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-twitter">Save changes</button>
                                                                <button type="button" class="btn btn-twitter" data-dismiss="modal">Close</button>
                                                            </div>
                                                            </form>
															<hr>
                                                        </div>

                                                    </div><!--end of modal-dialog-->
													
                                                </div>
                                                <!--end of modal-->                    
                                            <?php } ?>					  
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Picture</th>
                                                    <th>Medicine Code</th>
                                                    <th>Medicine Name</th>
                                                    <th>Medicine Description</th>
													<th>Data clerk name</th>
                                                    <th>Qty</th>
                                                    <th>Price</th>


                                                    <th>Action</th>
                                                </tr>					  
                                            </tfoot>
                                        </table>
                                    </div><!-- /.box-body -->

                                </div><!-- /.col -->


                            </div><!-- /.row -->


                    </section><!-- /.content -->
                </div><!-- /.container -->
            </div><!-- /.content-wrapper -->
            <?php include('../asset/includes/footer.php'); ?>
        </div><!-- ./wrapper -->
        <div id="add" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content" style="height:auto">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Add New Medicine Product</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="product_add.php" enctype='multipart/form-data'>
                            <div class="form-group">
                                <label class="control-label col-lg-3" for="price">Medicine Code</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="price" name="serial" placeholder="Medicine Code" required>  
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-3" for="name">Medicine Name</label>
                                <div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" required>  
                                    <input type="text" class="form-control" id="name" name="medicine_name" placeholder="Medicine Name" required>  
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="control-label col-lg-3" for="price">Medicine Description</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control" id="price" name="medicine_desc" placeholder="Medicine Description"></textarea>  
                                </div>
                            </div>
 <div class="form-group">
          <label class="control-label col-lg-3" for="file">Data Clerk</label>
          <div class="col-lg-9">
              <select class="form-control select2" style="width: 100%;" name="user_name" required>
                <?php
            
              $query2=mysqli_query($con,"select * from user where branch_id=5 and user_role='Data Clerk'")or die(mysqli_error());
                while($row2=mysqli_fetch_array($query2)){
                ?>
                  <option value="<?php echo $row2['user_name'];?>"><?php echo $row2['user_name'];?></option>
                <?php }?>
              </select>
          </div>
        </div> 

                            <div class="form-group">
                                <label class="control-label col-lg-3" for="price">Price</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="price" name="medicine_price" placeholder="Medicine Price" required>  
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-3" >Category</label>
                                <div class="col-lg-9">
                                    <select class="form-control select2" style="width: 100%;" name="category" required>

                                        <?php
                                        $queryc = mysqli_query($con, "select * from category order by medicine_cat")or die(mysqli_error());
                                        while ($rowc = mysqli_fetch_array($queryc)) {
                                            ?>
                                            <option value="<?php echo $rowc['cat_id']; ?>"><?php echo $rowc['medicine_cat']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                            <div class="form-group">
                                <label class="control-label col-lg-3" for="price">Reorder</label>
                                <div class="col-lg-9">
                                    <input type="number" class="form-control" id="price" name="reorder" placeholder="Reorder Point"  required>  
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3" for="price">Picture</label>
                                <div class="col-lg-9">
                                    <input type="file" class="form-control" id="price" name="image">  
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-twitter">Save changes</button>
                        <button type="button" class="btn btn-twitter" data-dismiss="modal">Close</button>
                    </div>
				
					
                    </form>
				 
			 
			 
				<form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
						<legend>Import CSV/Excel file</legend>
						<div class="control-group">
						 
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large" required>
							</div>
							 <div class="modal-footer">
							<button type="submit" id="submit" name="Import" class="btn btn-twitter button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
						 <hr>
						<div class="control-group">
							
						</div>
					 
				</form>
			
			
		</div>
                </div>

            </div><!--end of modal-dialog-->
        </div>
        <!--end of modal--> 
        <!-- jQuery 2.1.4 -->
        <script src="../asset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="../asset/bootstrap/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="../asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../asset/plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../asset/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../asset/js/demo.js"></script>
        <script src="../asset/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../asset/plugins/datatables/dataTables.bootstrap.min.js"></script>

        <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>
    </body>
</html>
