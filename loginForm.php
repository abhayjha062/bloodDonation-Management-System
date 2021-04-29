<?php
    include_once('connect.php');
    include_once('userInfo.php');
    include_once('login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Login page</title>
</head>
<body>
    <!--Including navigation for website-->
    <?php include('includes/nav.php'); ?>

    <div class="bg-light">
        <div class="container">
          <!--Info about page-->
          <h4 class="text-danger font-italic pt-3">Welcome to BloodBank & Donor Management System</h4>

          <!-- Marketing Icons Section -->
          <div class="row">
            <div class="col font-italic pb-4">
                Please login with your credential and if you want any change please email us
                <br/>
                If you have donated your blood in recent time please update the same in your profile
            </div>
          </div>
        </div>
    </div>

    <!--User Form Login-->
    <div class="container my-5">
        <div class="row">
        <div class="col">
        <div class="card bg-info w-75 mx-auto">
        <div class="card-header text-center text-danger font-italic lead font-weight-bold bg-light">User Login</div>
            <div class="card-body">
                <form action="loginForm.php" method="POST">
                    <div class="form-group w-75 ml-5">
                        <label for="log_email">Email:</label>
                        <input type="text" name="log_email" class="form-control" placeholder="Enter Your Email" id="log_email" value="<?php 
                        if(isset($_SESSION['log_email'])) {
                            echo $_SESSION['log_email'];
                        } 
                        ?>" required>
                        <br>
                    </div>
                    <div class="form-group w-75 ml-5">
                        <label for="log_password">Password:</label>
                        <input type="text" name="log_password" class="form-control" placeholder="Enter Your Passord" id="log_password">
                        <br>
		                <?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "Email or password was incorrect<br>"; ?>
                    </div>
                    <input type="submit" name="login" class="btn btn-primary ml-5" value="login">
                </form>
            </div>
        </div>
        </div>
    <!--Admin Form login-->
      <div class="col">
      <div class="card bg-info w-75 mx-auto">
      <div class="card-header text-center text-danger font-italic lead font-weight-bold bg-light">Admin Login</div>
        <div class="card-body">
            <form action="adminLogin.php" method="POST">
                <div class="form-group w-75 ml-5">
                    <label for="log_email">Email:</label>
                    <input type="text" name="log_email" class="form-control" placeholder="Enter Your Email" id="log_email" required>
                    <br>
                </div>
                <div class="form-group w-75 ml-5">
                    <label for="log_password">Password:</label>
                    <input type="text" name="log_password" class="form-control" placeholder="Enter Your Passord" id="log_password">
                    <br>
                </div>
                <input type="submit" name="admin_login" class="btn btn-primary ml-5" value="login">
            </form>
        </div>
       </div>
       </div>
       </div>
    </div>
    <!--Including Footer For Website-->
    <?php include('includes/footer.php'); ?>

</body>
</html>