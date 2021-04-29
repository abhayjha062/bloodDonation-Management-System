<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Blood Donation Admin pannel</title>
</head>
<body>
    <div class="container">
      <?php 
        include_once('../connect.php');
        //Reading Data from database
        $sql = "SELECT * from userinfo";
        $result = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result) > 0) {
            //output of each row
            ?>
            <div class="table-responsive">
            <table class='table table-bordered table-sm bg-light'>
            <thead class="thead-dark">
            <tr>
              <th>Id</th>
               <th>First Name</th>
               <th>username</th>
               <th>Email</th>
               <th>Phone Number</th>
               <th>Age</th>
               <th>bloodGroup</th>
               <th>last Donated</th>
               <th>Latitude</th>
               <th>Longitude</th>
               <th>Add</th>
               <th>Update</th>
               <th>Delete</th>
            </tr>
            </thread>
            <?php
            while($row = mysqli_fetch_array($result)) {
                $id = $row["id"];
                $fname = $row["fname"];
                $username = $row["username"];
                $email = $row["email"];
                $phoneNumber = $row["phoneNumber"];
                $age = $row["age"];
                $bloodgroup = $row["bloodgroup"];
                $lastdonated = $row["lastdonated"];
                $latitude = $row["latitude"];
                $longitude = $row["longitude"];
                echo "
                    <tr>
                      <td>$id</td>
                      <td>$fname</td>
                      <td>$username</td>
                      <td>$email</td>
                      <td>$phoneNumber</td>
                      <td>$age</td>
                      <td>$bloodgroup</td>
                      <td>$lastdonated</td>
                      <td>$latitude</td>
                      <td>$longitude</td>
                      <td><button>Add</button></td>
                      <td><a class='btn btn-success' href='update.php'>Update</a></td>
                      <td><a class='btn btn-danger'>delete</a></td>
                    </tr>
                    ";
                ?>
                
                <?php 
            }
        }
    ?>
    </table>
    </div>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>