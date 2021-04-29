<?php  
    include_once('updateProfile.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>User Profile</title>
</head>
<body>

    <!--Including navigation for website-->
    <?php include('includes/nav.php'); ?>

    <!--Including main info for website-->
    <?php include('includes/mainInfo.php'); ?>

    <div class="container">
        <div class="card my-4">
        <div class="card-header text-center text-info font-italic lead font-weight-bold">Update User Profile</div>
        <div class="row">
            <!--Update Form for Email-->
            <div class="col">
                <div class="card text-white bg-info my-5 mx-auto" style="max-width: 20rem;">
                <div class="card-header">Update Email</div>
                <div class="card-body">
                <form action="updateProfile.php" method = "POST">
                    <div class="form-group">
                        <label for="updated_email">Email address</label>
                        <input type="email" class="form-control" id="updated_email" name="updated_email" placeholder="Enter Your Latest email address" value="<?php 
                        if(isset($_SESSION['updated_email'])) {
                            echo $_SESSION['updated_email'];
                        } 
                        ?>"required>
                        <br>
                        <?php if(in_array("Email already in use<br>", $error_updated_array)) echo "Email already in use<br>"; 
                            else if(in_array("Invalid email format<br>", $error_updated_array)) echo "Invalid email format<br>";
                        ?>
                    </div>
                    <button type="submit" class="btn btn-primary bg-danger" name="update_email">Update Profile</button>
                </form>
                </div>
                </div>
            </div>

            <!--Update form for Phone Number-->
            <div class="col">
                <div class="card text-white bg-info my-5 mx-auto" style="max-width: 20rem;">
                <div class="card-header">Update Phone Number</div>
                <div class="card-body">
                <form action="updateProfile.php" method = "POST">
                    <div class="form-group">
                        <label for="updated_phoneNumber">Phone Number</label>
                        <input type="number" class="form-control" id="updated_phoneNumber" name="updated_phoneNumber" placeholder="Enter Your Updated Phone Number" value="<?php 
                        if(isset($_SESSION['updated_phoneNumber'])) {
                            echo $_SESSION['updated_phoneNumber'];
                        } 
                        ?>"required>
                        <br>
                        <?php if(in_array("Your phone number must be 10 digit <br>", $error_updated_array)) echo "Your phone number must be 10 digit <br>";
                        ?>
                    </div>
                    <button type="submit" class="btn btn-primary bg-danger" name="update_phoneNumber">Update Profile</button>
                </form>
                </div>
                </div>
            </div>

            <!--Update Form for Last Donated-->
            <div class="col">
                <div class="card text-white bg-info my-5 mx-auto" style="max-width: 20rem;">
                <div class="card-header">Update Last Donated</div>
                <div class="card-body">
                    <form action="updateProfile.php" method = "POST">
                     <div class="form-group">
                     <label for="updated_LastDonated">Last Donated</label>
                     <input type="date" class="form-control" id="updated_lastDonated" name="updated_lastDonated" placeholder="Update your last donated date" value="<?php 
                        if(isset($_SESSION['updated_lastDonated'])) {
                            echo $_SESSION['updated_lastDonated'];
                        } 
                        ?>"required>
                        <br>
                        <?php if(in_array("please enter last donated date<br>", $error_updated_array)) echo "please enter last donated date<br>";
                        ?>
                     </div>
                     <button type="submit" class="btn btn-primary bg-danger" name="update_lastDonated">Update Profile</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!--Including Footer For Website-->
    <?php include('includes/footer.php'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>
