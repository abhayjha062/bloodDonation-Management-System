<?php 
    //Declaring variables to prevent errors
    $fname ="";
    $lname ="";
    $email ="";
    $phoneNo ="";
    $age = null;
    $bloodGroup ="";
    $lastDonated ="";
    $lat1 = null;
    $lon1 = null;
    $password ="";
    $cnfrmPassword ="";
    $error_array = array(); //Holds error messages

    if(isset($_POST['register'])) {
        //Registration form values
        //First name
        $fname = strip_tags($_POST['fname']); //Remove html tags
        $fname = str_replace(' ', '', $fname); //remove spaces
        $fname = ucfirst(strtolower($fname)); //Uppercase first letter
        $_SESSION['fname'] = $fname; //Stores first name into session variable

        //Last Name
        $lname = strip_tags($_POST['lname']); //Remove html tags
        $lname = str_replace(' ', '', $lname); //remove spaces
        $lname = ucfirst(strtolower($lname)); //Uppercase first letter
        $_SESSION['lname'] = $lname; //Stores first name into session variable

        //Email
        $email = strip_tags($_POST['email']); //Remove html tags
        $email = str_replace(' ', '', $email); //remove spaces
        $_SESSION['email'] = $email; //Stores first name into session variable

        //Phone Number
        $phoneNo = strip_tags($_POST['phoneNo']); //Remove html tags
        $phoneNo = str_replace(' ', '', $phoneNo); //remove spaces
        $_SESSION['phoneNo'] = $phoneNo; //Stores first name into session variable

        //Age
        $age = strip_tags($_POST['age']); //Remove html tags
        $age = str_replace(' ', '', $age); //remove spaces
        $_SESSION['age'] = $age; //Stores first name into session variable

        //Blood Group
        $bloodGroup = strip_tags($_POST['bloodGroup']); //Remove html tags
        $bloodGroup = str_replace(' ', '', $bloodGroup); //remove spaces
        $bloodGroup = strtoupper($bloodGroup); //Uppercase first letter
        $_SESSION['bloodGroup'] = $bloodGroup; //Stores first name into session variable

        //Last Donated
        $lastDonated = strip_tags($_POST['lastDonated']); //Remove html tags
        $lastDonated = str_replace(' ', '', $lastDonated); //remove spaces
        $_SESSION['lastDonated'] = $lastDonated; //Stores first name into session variable

        //Latitude
        $lat1 = strip_tags($_POST['lat']); //Remove html tags
        $_SESSION['lat'] = $lat1; //Stores latitude into session variable
        //Longitude
        $lon1 = strip_tags($_POST['lon']); //Remove html tags
        $_SESSION['lon'] = $lon1; //Stores longitude into session variable

        //Password
        $password = strip_tags($_POST['password']); //Remove html tags

        //Confirm Password
        $cnfrmPassword = strip_tags($_POST['cnfrmPassword']); //Remove html tags

        //Check if email is in valid format 
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

			$email = filter_var($email, FILTER_VALIDATE_EMAIL);
            echo "<br>";
			//Check if email already exists 
			$e_check = mysqli_query($conn, "SELECT email FROM userinfo WHERE email='$email'");

			//Count the number of rows returned
			$num_rows = mysqli_num_rows($e_check);

			if($num_rows > 0) {
				array_push($error_array, "Email already in use<br>");
			}

		}
		else {
			array_push($error_array, "Invalid email format<br>");
		}

        //Validating first name 
        if(strlen($fname) > 25 || strlen($fname) < 2) {
            array_push($error_array, "Your first name must be between 2 and 25 characters<br>");
        }

        //Validating last name 
        if(strlen($lname) > 25 || strlen($lname) < 2) {
            array_push($error_array,  "Your last name must be between 2 and 25 characters<br>");
        }

        //Validating Age
        if(empty($age)) {
            array_push($error_array,  "Please mention your age<br>");
        }
        
        //Validating Phone Number
        if(strlen($phoneNo) <= 0 || strlen($phoneNo) <11) {
            array_push($error_array,  "Your phone number must be 10 digit <br>");
        }

        //validating Blood Group
        if(strlen($bloodGroup) <= 0 || strlen($bloodGroup) > 3) {
            array_push($error_array,  "please fill blood group in right format<br>");
        }

        //validating Last Donated
        if(empty($lastDonated)) {
            array_push($error_array,  "please enter last donated date<br>");
        }

        //validating Latitude
        if(empty($lat1)) {
            array_push($error_array,  "please enter your latitude<br>");
        }

        //validating Location
        if(empty($lon1)) {
            array_push($error_array,  "please enter your longitude<br>");
        }

        //Validating Password
        if($password != $cnfrmPassword) {
            array_push($error_array,  "Your passwords do not match<br>");
        }
        else {
            if(preg_match('/[^A-Za-z0-9]/', $password)) {
                array_push($error_array, "Your password can only contain english characters or numbers<br>");
            }
        }
    
        if(strlen($password) > 30 || strlen($password) < 5) {
            array_push($error_array, "Your password must be betwen 5 and 30 characters<br>");
        }

        //checking for empty value if not converting into encrypted value
        if(empty($error_array)) {
            $password = md5($password); //Encrypt password before sending to database
    
            //Generate username by concatenating first name and last name
            $username = strtolower($fname . "_" . $lname);
            $check_username_query = mysqli_query($conn, "SELECT username FROM userinfo WHERE username='$username'");
    
    
            $i = 0; 
            //if username exists add number to username
            while(mysqli_num_rows($check_username_query) !== 0) {
                $i++; //Add 1 to i
                $username = $username . "_" . $i;
                $check_username_query = mysqli_query($conn, "SELECT username FROM usersinfo WHERE username='$username'");
            }
    
            //Profile picture assignment
            $rand = rand(1, 2); //Random number between 1 and 2
    
            if($rand == 1)
                $profile_pic = "assets/images/profile_pics/defaults/head_deep_blue.png";
            else if($rand == 2)
                $profile_pic = "assets/images/profile_pics/defaults/head_emerald.png";
    
            //Inserting data into database
            $sql = "INSERT INTO userinfo VALUES ('', '$fname', '$lname', '$username', '$profile_pic', '$email', $phoneNo, $age,'$bloodGroup', '$lastDonated', '$lat1', '$lon1', '$password','$cnfrmPassword')";

            if (!mysqli_query($conn, $sql)) {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
    
            array_push($error_array, "<span style='color: #14C800;'>You're all set! Goahead and login!</span><br>");
    
            //Clear session variables 
            $_SESSION['fname'] = "";
            $_SESSION['lname'] = "";
            $_SESSION['email'] ="";
            $_SESSION['phoneNo'] ="";
            $_SESSION['age'] ="";
            $_SESSION['bloodGroup'] ="";
            $_SESSION['lastDonated'] ="";
            $_SESSION['lat1'] ="";
            $_SESSION['lon1'] ="";
        }
    }
?>