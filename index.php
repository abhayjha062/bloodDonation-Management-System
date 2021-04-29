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
    <title>Blood Donation And Management System</title>
</head>
<body>
    <!--Including navigation for website-->
    <?php include('includes/nav.php'); ?>

    <!--Including main info for website-->
    <?php include('includes/mainInfo.php'); ?>

    <!--Including Image slider-->
    <?php include('includes/slider.php'); ?>

    <!--Blood Group Info-->
    <?php include('includes/bloodGroupInfo.php'); ?>

    <!--Including Footer For Website-->
    <?php include('includes/footer.php'); ?>

    <script>alert('Please click on allow location and than search your respective blood group');</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>