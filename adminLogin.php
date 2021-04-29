<?php  
    $admin_email = "admin@bloodmanagement.com";
    $admin_password = "12345";

    if(isset($_POST['admin_login'])) {

        //Email
        $email = strip_tags($_POST['log_email']); //Remove html tags
        $email = str_replace(' ', '', $email); //remove spaces
        $_SESSION['email'] = $email; //Stores first name into session variable

        //Password
        $password = strip_tags($_POST['log_password']); //Remove html tags

        if($admin_email == $email && $admin_password == $password) {
            header("Location: adminControl.php");
            exit();
        }
        else {
            echo("Email or password was incorrect<br>");
        }
    }

?>