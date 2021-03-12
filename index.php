<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login - <?php include('asset/includes/title.php'); ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">

        <!-- Font Awesome -->
        <!-- Theme style -->
        <link rel="stylesheet" href="asset/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="asset/css/skins/_all-skins.min.css">
        <link rel="stylesheet" type="text/css" href=" asset/single_selector/chosen.min.css">
        <link rel="stylesheet" type="text/css" href=" asset/single_selector/singlebox.css">		
    
    </head>
    <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
    <body class="hold-transition login-page">

        <div class="login-box">
            <div class="login-logo">
                <b style="background-image: url(asset/images/kenema_log.jpg);">Kenema Online pharmacy Management system</b>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg"></p>
                <form action="login.php" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="User_role" name="user_role" required>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <select class="singleChosen" style="width:100%" name="branch" required>
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            <?php
                            include('asset/includes/dbcon.php');

                            $query3 = mysqli_query($con, "select * from branch order by branch_name")or die(mysqli_error($con));
                            while ($row3 = mysqli_fetch_array($query3)) {
                                ?>
                                <option value="<?php echo $row3['branch_id']; ?>"><?php echo $row3['branch_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 pull-right">
                            <button type="reset" class="btn btn-twitter btn-flat">Clear</button>
                        </div><!-- /.col -->
                        <div class="col-xs-6 pull-right">
                            <button type="submit" class="btn btn-twitter btn-block btn-flat" name="login" default>Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>



            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->



        <!-- jQuery 2.1.4 -->
        <script src="asset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="asset/plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="asset/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="asset/js/demo.js"></script>
        <script src="asset/single_selector/jquery.min.js"></script>
        <script src="asset/single_selector/chosen.jquery.min.js"></script>
        <script src="asset/single_selector/singlebox.js"></script>
    </body>
</html>
