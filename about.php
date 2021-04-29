<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>About page</title>
</head>
<body>
    <!--Including navigation for website-->
    <?php include('includes/nav.php'); ?>

    <!--Including main info for website-->
    <?php include('includes/mainInfo.php'); ?>
    
    <!--About Our Platform-->
    <div class="container mt-3">
      <div class="jumbotron">
       <h1>About Us</h1>      
       <p>We are group of individuals with a small idea of helping needy people who is in the need of blood We are providing a platform where a donor can come and register himself with thier info and help the scociety in donating blood in thier area and the needy people will search for thier respective blood group on our platform and will contact the person matching the blood group for same In this way we can save the live of thousands of people who is in the need of donor and couldn't find the same in mean time Any people in any location can get benifitted by this So guys come forward and register here and make a effort to help the scociety and people who is need for blood</p>
      </div>   
    </div>

    <!--Including Footer For Website-->
    <?php include('includes/footer.php'); ?>


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" type="text/javascript"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>