

<?php
  include 'dbcon.php';
        // Include file which makes the
        // Database Connection.
       if(isset($_POST["submit"])){

       
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $email=$_POST["email"];
        $role=$_POST["role"];
        // $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
                
        
        $sql = "Select * from users where email='$email'";
        
        $result = mysqli_query($conn, $sql);
        
        $num = mysqli_num_rows($result);
        


        // This sql query is use to check if
        // the username is already present
        // or not in our Database
        if($num == 0) {
            if(($password === $cpassword)) {
        
                $hash = password_hash($password,
                                    PASSWORD_DEFAULT);
                    
                // Password Hashing is used here.
                $sql =" INSERT INTO `users` ( `first_name`, `last_name`, `email`, `password`,`role_id` , `user_status`, `created_at`, `updated_at`)
                 VALUES ( '$firstname', '$lastname', '$email','$hash', '$role', '1', current_timestamp(), current_timestamp())";
        
                $result = mysqli_query($conn,$sql);
        
                if ($result) {
                    $showAlert = true;
                    header("location:animalslist.php");
                
                }
            }
            else {
                $showError = "Passwords do not match";
            }	
        }


        else{
            $_SESSION['error']="Duplicate";
            header("location:newuseradd.php");
                 
        }
        // end if
        
    if($num>0)
    {
        $exists="Username not available";
    }
        
    }//end if

  
    ?>
    





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Add New User</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
          
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
     
        <!-- Sidebar End -->


        <!-- Content Start -->
        <?php
        
        include 'header.php';
        
        ?>
         <!-- Navbar Start -->
            







         <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h3 class="mb-4">Add New User </h3>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="firstname" >
                                <label for="floatingInput">First Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingFirstName" name="lastname">
                            
                                <label for="floatingLastName">Last Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingEmail" name="email">
                            
                                <label for="floatingEmail">Email</label>
                            </div>


                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" name="password">
                            
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingConfirmPassword" name="cpassword">
                            
                                <label for="floatingPassword">Confirm Password</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" name="role">
                                    <option selected>Select User</option>
                      <option value="2">Catalog manager</option>
                      <option value="3">New user or Customer</option>
                     </option>  
                     </select> 
                                </select>
                                
                            </div>
                            <input type="reset" value="Reset" class="btn btn-secondary py-3 w-100 mb-4" />
                        <input type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4"></button>
                        <p class="text-center mb-0">Already have an Account? <a href="login.php">Sign In</a></p>
            
                        </div>
                    </div>
                           </div>
          

            <!-- Footer Start -->
<?php 
include 'footer.php';
?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
 
    <script src="js/main.js"></script>
    </form>
</body>

</html>
