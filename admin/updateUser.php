<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Admin pannel</title>
</head>
<body>
    <div class="container">
      <?php 
        include_once 'connect.php';
        $sql = "UPDATE userinfo SET email='ajayjha@gmail.com' WHERE id=2";
        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully<br>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
        $sql = "SELECT * from userinfo";
        $result = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result) > 0) {
            //output of each row
            ?>
            <table class='table table-bordered' style="width:800px; height:400px">
            <tr>
              <th>Id</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>username</th>
               <th>Email</th>
               <th>Phone Number</th>
               <th>Age</th>
               <th>bloodGroup</th>
               <th>last Donated</th>
               <th>Latitude</th>
               <th>Longitude</th>
               <th>Password</th>
            </tr>
            <?php
            while($row = mysqli_fetch_array($result)) {
                #echo "id ".$row["id"]."   ". "name: ". $row["firstName"]."   ". "class: ". $row["class"]."   ". "rollNo: ". $row["rollNo"];
                $id = $row["id"];
                $name = $row["fname"];
                $lname = $row["lname"];
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
                      <td>$lname</td>
                      <td>$username</td>
                      <td>$email</td>
                      <td>$phoneNumber</td>
                      <td>$age</td>
                      <td>$bloodgroup</td>
                      <td>$lastdonated</td>
                      <td>$latitude</td>
                      <td>$longitude</td>
                    </tr>
                    ";
                ?>
                
                <?php 
            }
        }
    ?>
        
    </table>
</body>
</html>