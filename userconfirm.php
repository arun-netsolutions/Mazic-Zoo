dfdfgdfgdfdfgdfgdfgdfg
<?php
	include 'dbcon.php';
        
       if(isset($_POST["confirm"])){

       
        $firstname=$_POST["firstname"];
        echo $firstname;
        $lastname=$_POST["lastname"];
        $email=$_POST["email"];
      //   $role=$_POST["role"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
                $role=3;
                echo $firstname;

        
    //     $sql = "Select * from users where user_name='$username'";
        
    //     $result = mysqli_query($conn, $sql);
        
    //     $num = mysqli_num_rows($result);
        
    //     // This sql query is use to check if
    //     // the username is already present
    //     // or not in our Database
    //     if($num == 0) {
    //         if(($password === $cpassword)) {
        
    //             $hash = password_hash($password,
    //                                 PASSWORD_DEFAULT);
                    
    //             // Password Hashing is used here.
    //             $sql =" INSERT INTO `users` ( `first_name`, `last_name`, `user_name`, `email`, `password`,`role_id` , `user_status`, `created_at`, `updated_at`)
    //              VALUES ( '$firstname', '$lastname', '$username', '$email','$hash',  '$role', '0', current_timestamp(), current_timestamp())";
        
    //             $result = mysqli_query($conn, $sql);
        
    //             if ($result) {
    //               //   $showAlert = true;
    //               //   header("location:login.php");
    //             echo "user registered successfully";
    //             }
    //             else{
    //                echo "failed";
    //             }
    //         }
    //         else {
    //             echo "Passwords do not match";
    //         }	
    //     }// end if
        
    // if($num>0)
    // {
    //     $exists="Username not available";
    // }
        
     }//end if

?>
adsdasf