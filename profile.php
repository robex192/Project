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
				<div class="col-md-7 col-sm-7 col-xs-7">
					<div class = "col-md-10 col-lg-10 col-xs-10">
						<?php include 'change_password.php';?>
					</div>
					
				</div>
				<!--<div class="col-md-5 col-sm-5 col-xs-5">
				
				
				</div>-->
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
