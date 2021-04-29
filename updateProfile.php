<?php
    include_once('connect.php');
    $updated_email = "";
    $updated_phoneNumber = "";
    $updated_lastDonated = "";
    $error_updated_array = array(); //Hold Error Message
    $user = $_SESSION['username'];

    if(isset($_POST['updated_email'])) {
        //Email
        $updated_email = strip_tags($_POST['updated_email']); //Remove html tags
        $updated_email = str_replace(' ', '', $updated_email); //remove spaces
        $_SESSION['updated_email'] = $updated_email; //Stores first name into session variable

        //Check if email is in valid format 
		if(filter_var($updated_email, FILTER_VALIDATE_EMAIL)) {

			$updated_email = filter_var($updated_email, FILTER_VALIDATE_EMAIL);
            echo "<br>";
			//Check if email already exists 
			$e_check = mysqli_query($conn, "SELECT email FROM userinfo WHERE email='$updated_email'");

			//Count the number of rows returned
			$num_rows = mysqli_num_rows($e_check);

			if($num_rows > 0) {
				array_push($error_updated_array, "Email already in use<br>");
			}

		}
		else {
			array_push($error_updated_array, "Invalid email format<br>");
		}

        //checking for empty value if not converting into encrypted value
        if(empty($error_updated_array)) {

            $sql = "UPDATE userinfo SET email='$updated_email' WHERE username='$user'";
            if (!mysqli_query($conn, $sql)) {
                echo "Error Updating Record: " . $sql . "<br>" . mysqli_error($conn);
            }

            array_push($error_updated_array, "<span style='color: #14C800;'>Email Updated Sucessfully!</span><br>");

           //Clear session variables 
            $_SESSION['updated_email'] ="";
            header("Location: index.php");
        }
    }


    if(isset($_POST['updated_phoneNumber'])) { 
        //Phone Number
        $updated_phoneNumber = strip_tags($_POST['updated_phoneNumber']); //Remove html tags
        $updated_phoneNumber = str_replace(' ', '', $updated_phoneNumber); //remove spaces
        $_SESSION['updated_phoneNumber'] = $updated_phoneNumber; //Stores first name into session variable

        //Validating Phone Number
        if(strlen($updated_phoneNumber) <= 0 || strlen($updated_phoneNumber) <11) {
            array_push($error_updated_array,  "Your phone number must be 10 digit <br>");
        }

        //checking for empty value if not converting into encrypted value
        if(empty($error_updated_array)) {
            $sql = "UPDATE userinfo SET phoneNumber='$updated_phoneNumber' WHERE username='$user'";

            if (!mysqli_query($conn, $sql)) {
                echo "Error Updating Record: " . $sql . "<br>" . mysqli_error($conn);
            }

            array_push($error_updated_array, "<span style='color: #14C800;'>Phone Number updated sucessfully!</span><br>");

            //Clear session variables 
            $_SESSION['updated_phoneNumber'] ="";
            header("Location: index.php");
        }

    }

    if(isset($_POST['update_lastDonated'])) { 
        //Last Donated
        $updated_lastDonated = strip_tags($_POST['updated_lastDonated']); //Remove html tags
        $updated_lastDonated = str_replace(' ', '', $updated_lastDonated); //remove spaces
        $_SESSION['updated_lastDonated'] = $updated_lastDonated; //Stores first name into session variable

        //validating Last Donated
        if(empty($updated_lastDonated)) {
            array_push($error_updated_array,  "please enter last donated date<br>");
        }
        //checking for empty value if not converting into encrypted value
        if(empty($error_updated_array)) {

            $sql = "UPDATE userinfo SET lastdonated='$updated_lastDonated' WHERE username='$user'";

            if (!mysqli_query($conn, $sql)) {
                echo "Error Updating Record: " . $sql . "<br>" . mysqli_error($conn);
            }

            array_push($error_updated_array, "<span style='color: #14C800;'>Last Donated date updated sucessfully!</span><br>");

            //Clear session variables 
            $_SESSION['updated_lastDonated'] ="";
            header("Location: index.php");
        }
    }

?>