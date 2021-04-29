<?php
    require_once('connect.php');
    require_once('userInfo.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Donor Registration</title>
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
            <div class="col font-italic pb-2">
                Please Register with correct Info and also last donated blood date should be updated regularly
            </div>
          </div>
        </div>
    </div>

    <div class="container my-3">
    <div class="row">
    <div class="col-sm-9 mx-auto">
        <div class="card bg-secondary" style="line-height: 15px;">
            <div class="card-header">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
            </div>
            <div class="card-body">
                <form action="registration.php" method="POST">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" name="fname" class="form-control" placeholder="Enter Your First Name" id="fname" value="<?php 
                        if(isset($_SESSION['fname'])) {
                            echo $_SESSION['fname'];
                        } 
                        ?>"required>
                    <br>
                    <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>
                    </div>
                  </div>
                
                  <div class="col">
                    <div class="form-group">
                        <label for="name">Last Name:</label>
                        <input type="text" name="lname" class="form-control" placeholder="Enter Your Last Name" id="lname" value="<?php 
                        if(isset($_SESSION['reg_lname'])) {
                            echo $_SESSION['reg_lname'];
                        } 
                        ?>"required>
                        <br>
                        <?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="number" name="age" class="form-control" placeholder="Enter Your age" id="age" value="<?php 
                        if(isset($_SESSION['age'])) {
                            echo $_SESSION['age'];
                        } 
                        ?>"required>
                        <br>
                        <?php if(in_array("Please mention your age<br>", $error_array)) echo "Please mention your age<br>"; ?>
                    </div>
                   </div>
                    
                   <div class="col">
                    <div class="form-group">
                        <label for="email">email:</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Your Email" id="email" value="<?php 
                        if(isset($_SESSION['reg_email'])) {
                            echo $_SESSION['reg_email'];
                        } 
                        ?>"required>
                        <br>
                        <?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; 
                            else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
                        ?>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                 <div class="col">
                    <div class="form-group">
                        <label for="phone">Phone No:</label>
                        <input type="number" name="phoneNo" class="form-control" placeholder="Enter your phone number" id="phone" value="<?php 
                        if(isset($_SESSION['phoneNo'])) {
                            echo $_SESSION['phoneNo'];
                        } 
                        ?>"required>
                        <br>
                        <?php if(in_array("Your phone number must be 10 digit <br>", $error_array)) echo "Your phone number must be 10 digit <br>";
                        ?>
                    </div>
                  </div>

                 <div class="col">
                    <div class="form-group">
                        <label for="bloodgroup">Blood Group:</label>
                        <input class="form-control" type="text" name="bloodGroup" placeholder="Enter your blood group" value="<?php 
                        if(isset($_SESSION['bloodGroup'])) {
                            echo $_SESSION['bloodGroup'];
                        } 
                        ?>"required>
                        <br>
                        <?php if(in_array("please fill blood group in right format<br>", $error_array)) echo "please fill blood group in right format<br>";
                        ?>
                    </div>
                  </div>
                </div>

                <div class="row">
                 <div class="col">
                    <div class="form-group">
                        <label for="lastDonated">Last Donated:</label>
                        <input class="form-control" type="date" name="lastDonated" placeholder="Enter last donated date" value="<?php 
                        if(isset($_SESSION['lastDonated'])) {
                            echo $_SESSION['lastDonated'];
                        } 
                        ?>"required>
                        <br>
                        <?php if(in_array("please enter last donated date<br>", $error_array)) echo "please enter last donated date<br>";
                        ?>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                 <div class="col">
                    <div class="form-group">
                        <label for="lat">Latitude:</label>
                        <input class="form-control" type="text" name="lat" placeholder="Enter your latitude" value="<?php 
                        if(isset($_SESSION['lat'])) {
                            echo $_SESSION['lat'];
                        } 
                        ?>"required>
                        <br>
                        <?php if(in_array("please enter your latitude<br>", $error_array)) echo "please enter your latitude<br>";
                        ?>
                    </div>
                  </div>
                
                  <div class="col">
                    <div class="form-group">
                        <label for="long">Longitude:</label>
                        <input class="form-control" type="text" name="lon" placeholder="Enter your longitude" value="<?php 
                        if(isset($_SESSION['lon'])) {
                            echo $_SESSION['lon'];
                        } 
                        ?>"required>
                        <br>
                        <?php if(in_array("please enter your location<br>", $error_array)) echo "please enter your location<br>";
                        ?>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input class="form-control" type="text" name="password" placeholder="Enter your Password" required>
                    </div>
                  </div>
                
                  <div class="col">
                    <div class="form-group">
                        <label for="cnfrmpassword">Conform Password:</label>
                        <input class="form-control" type="text" name="cnfrmPassword" placeholder="Confirm your password" required>
                        <br>
                        <?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>"; 
                        else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
                        else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "Your password must be betwen 5 and 30 characters<br>"; 
                        ?>
                    </div>
                   </div>
                </div>

                <input type="submit" name="register" class="btn btn-primary btn-lg" value="register">
                <?php if(in_array("<span style='color: #14C800;'>You're all set! Goahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
                </form>
                <p class="link mt-2"><a href="loginForm.php">Click to Login</a></p>
            </div>
        </div>
    </div>
    </div>
    </div>
    
    <!--Including Footer For Website-->
    <?php include('includes/footer.php'); ?>

</body>
</html>