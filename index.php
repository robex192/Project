<?php include 'header_login.php';?>

  <body class="login">
    <div>
    

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method = "POST" action = "login.php">
              <h1>Administrator Login</h1>
              <div>
                <input type="text" name = "user_role" class="form-control" placeholder="user_role" required="true" />
              </div>
              <div>
                <input type="password" name = "password" class="form-control" placeholder="Password" required="true" />
              </div>
              <div>
                <button  class="btn btn-block btn-warning" name = "login"> Log in</button>
              
              </div>

              <div class="clearfix"></div>

              <div class="separator">
               

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Kenema Online Pharmacy Management System </h1>
                  <p>©2021 All Rights Reserved KOPMS </p>
                </div>
              </div>
            </form>
          </section>
        </div>

    
      </div>
    </div>
  </body>
</html>
