<?php
session_start();
if (empty($_SESSION['id'])):
    header('Location:../index.php');
endif;
?>

<?php
$connect = mysqli_connect("localhost", "root", "", "kopms");
$output = '';
if (isset($_POST["import"])) {
    $tmp = explode(".", $_FILES["excel"]["name"]);
    $extension = end($tmp);

    $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
    if (in_array($extension, $allowed_extension)) { //check selected file extension is present in allowed extension array
        $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
        include("PHPExcel/Classes/PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
        $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

        $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
        foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
            $highestRow = $worksheet->getHighestRow();
            for ($row = 2; $row <= $highestRow; $row++) {
                $output .= "<tr>";
                $medicine_cat = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                $medicine_desc = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                $query = "INSERT INTO category(medicine_cat, medicine_desc) VALUES ('" . $medicine_cat . "', '" . $medicine_desc . "')";
                mysqli_query($connect, $query);
                $output .= '<td>' . $medicine_cat . '</td>';
                $output .= '<td>' . $medicine_desc . '</td>';
                $output .= '</tr>';
            }
        }
        $output .= '</table>';
    } else {
        $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Category | <?php include('../asset/includes/title.php'); ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
             <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../asset/plugins/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" href="../asset/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../asset/plugins/select2/select2.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../asset/css/skins/_all-skins.min.css">
        <style>

        </style>
    </head>
    <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
    <body class="hold-transition skin-<?php echo $_SESSION['skin']; ?> layout-top-nav">
        <div class="wrapper">
            <?php
            include('../asset/includes/header.php');
            include('../asset/includes/dbcon.php');
            ?>
            <!-- Full Width Column -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            <a class="btn btn-lg btn-twitter" href="home.php">Back</a>

                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li class="active">Medicine Category</li>
                        </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">Add New Category</h3>
                                    </div>
                                    <div class="box-body">
                                        <!-- Date range -->
                                        <form method="post" action="cat_add.php" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <label for="date">Medicine Category</label>
                                                <div class="input-group col-md-12">
                                                    <input type="text" class="form-control pull-right" id="date" name="medicine_cat" placeholder="Medicine Category" required>
                                                </div><!-- /.input group -->
                                            </div><!-- /.form group -->

                                            <div class="form-group">
                                                <label for="date">Description</label>
                                                <div class="input-group col-md-12">
                                                    <input type="text" class="form-control pull-right" id="date" name="medicine_desc" placeholder="Medicine description" required>
                                                </div><!-- /.input group -->
                                            </div><!-- /.form group -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <button class="btn btn-twitter" id="daterange-btn" name="">
                                                        Save
                                                    </button>
                                                    <button class="btn" id="daterange-btn">
                                                        Clear
                                                    </button>
                                                </div>
                                            </div><!-- /.form group -->
                                            <div class="form-group">



                                        </form>	
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->


                            </div><!-- /.col (right) -->
                            <div class="col-md-18">  
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <form method="post" enctype="multipart/form-data">
                                            <h3 class="box-title">Upload By Excel File</h3>
                                    </div>
                                    <div class="box-body">
                                        <input type="file" name="excel" class="form-control pull-right" required />

                                        <div class="input-group">
                                            <input type="submit" name="import" class="btn btn-twitter" value="Import" />

                                        </div>


                                    </div>  </div> </div>
                        </div>

                        <div class="col-xs-8">
                            <div class="box box-primary">

                                <div class="box-header">
                                    <h3 class="box-title">Medicine Category List</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Medicine Category</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = mysqli_query($con, "select * from category order by medicine_cat")or die(mysqli_error());
                                            while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['medicine_cat']; ?></td>
                                                    <td><?php echo $row['medicine_desc']; ?></td>



                                                    <td><a href="#updateordinance<?php echo $row['cat_id']; ?>" data-target="#updateordinance<?php echo $row['cat_id']; ?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-edit text-blue"></i></a>

                                                    </td>

                                                </tr>
                                            <div id="updateordinance<?php echo $row['cat_id']; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content" style="height:auto">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title">Update Medicine  Category Details</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal" method="post" action="cat_update.php" enctype='multipart/form-data'>

                                                                <div class="form-group">
                                                                    <label class="control-label col-lg-3" for="name">Category</label>
                                                                    <div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['cat_id']; ?>" required>  
                                                                        <input type="text" class="form-control" id="name" name="medicine_cat" value="<?php echo $row['medicine_cat']; ?>" required>  

                                                                    </div>

                                                                </div>
                                                                &nbsp;
                                                                <div class="form-group">				
                                                                    <label class="control-label col-lg-3" for="name">Description</label>
                                                                    <div class="col-lg-9"><input type="text" class="form-control" id="name" name="medicine_desc" value="<?php echo $row['medicine_desc']; ?>" required></div> 
                                                                </div>
                                                        </div><hr>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                        </form>
                                                    </div>

                                                </div><!--end of modal-dialog-->
                                            </div>
                                            <!--end of modal-->                    
                                        <?php } ?>					  
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Medicine Category</th>
                                                <th>Description</th>
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
                $("#example2").DataTable();
                $('#example3').DataTable({
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
