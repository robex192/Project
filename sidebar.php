<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
				 
                <li>
				<a href = "dashboard_admin.php"><i class="fa fa-file"></i> Dashboard<span class="fa fa-chevron-right"></span></a> 
			    
				   <li><a><i class="fa fa-building"></i>List per branch <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					<?php 
					include 'dbcon.php';
						$query1=mysqli_query($con,"select * from branch ORDER BY branch_name")or die(mysqli_error($con));
						while ($row=mysqli_fetch_array($query1)){
						$id=$row['branch_id'];?>
                      <li><a href="inventory.php?id=<?php echo $row['branch_id'];?>"><?php echo $row ['branch_name'];?></a></li>  
					<?php }?>
                    </ul>
                  </li>
				    <li><a href = "#"><i class="fa fa-file"></i> Generate Reports<span class="fa fa-chevron-right"></span></a>
					
					 <ul class="nav child_menu">
                      <li><a href="overall.php">Overal Report</a></li>
                       <li><a href="reports.php">Per barnch Report</a></li>
                  
                    </ul>
					
					
					</li>
                    <li><a href = "#"><i class="fa fa-building"></i> Manage Branch <span class="fa fa-chevron-right"></span></a>
                 
                      <ul class="nav child_menu">
                      <li><a href="branch.php">Add Branch</a></li>
                       
                  
                    </ul>
                  </li>
                  <li><a href = "#"><i class="fa fa-users"></i> Manage User <span class="fa fa-chevron-right"></span></a>
				   <ul class="nav child_menu">
                      <li><a href="user.php">Add Account</a></li>
                      <li><a href="role.php">Add Role</a></li>
                    </ul>
				  </li>
                  <li><a href = "history.php"><i class="fa fa-history"></i> History Log <span class="fa fa-chevron-right"></span></a></li>
				  <li><a href = "backup.php"><i class="fa fa-save"></i> Back up <span class="fa fa-chevron-right"></span></a></li>
                   
                </ul>
              </div>
             
            </div>