
<?php

include 'dbcon.php';
session_start();
	include 'dbcon.php';
        
   
        
        // Include file which makes the
        // Database Connection.
       if(isset($_POST["register"])){

       
        $firstname= mysqli_real_escape_string($conn,$_POST["firstname"]);
        $lastname=mysqli_real_escape_string($conn,$_POST["lastname"]);
        $email=$_POST["email"];
      //   $role=$_POST["role"];
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
                 VALUES ( '$firstname', '$lastname', '$email','$hash',  '3', '0', current_timestamp(), current_timestamp())";
        
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    $showAlert = true;
                    header("location:userlogin.php");
                
                }
            }
            else{
                $_SESSION['error']="Duplicate";
                header("location:userRegister.php");
                 echo"<h3 id=demo></h3>";    
            }
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
    <title> login </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->

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
    <link href="users/css/style.css" rel="stylesheet">
    <style>
        input[type=text], input[type=password],input[type=email] {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
/* 
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
} */

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  display: flex;
  justify-content: center;
  margin-left: auto;
  margin-right: auto;
  
}

img.avatar {
  width: 50%;
  border-radius: 50%;
  margin-left: auto;
  margin-right: auto;
  align-self: center;
}

.container {
  padding: 16px;
  margin-top: 20px;
  align-items: center;
}

span.psw {
  float: right;
  padding-top: 16px;
}
.avatar{
    text-align:right;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.container{
  margin-left: 40px;
}
h1{
justify-content: center;
font-weight: 600px;
}
input[type=submit] {
	margin:11px 0 35px 20px;
	padding:0;
	border:0;
	background:url(users/images/interface.gif) no-repeat 0 -261px;
	width:306px;
	height:48px;
	text-shadow: 0 1px 1px #553B22;
	font-size: 18px;
	font-family: arial;
	color: #FFFFFF;
	font-weight: bold;
	cursor:pointer;
	text-decoration: none;
	display:block;
	line-height: 45px;
	text-align: center;
}
#button {

	right: 55px;
	top: 185px;
}
</style>
</head>
<body>

        </style>
</head>

<body>
<?php
include 'user-header.php';
?>
  <div id="content">
    
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
   
        <!-- Sign In Start -->
       
  <div class="imgcontainer">

    <img src="users/images/img_avatar2.png" alt="Avatar" class="avatar">
    
<br>  
  </div>

  <div class="container" style="padding-top: 20px;">
  <h1></h1>
    <label for="uname"><b>First Name</b></label>
    <br>
    <!-- <input type="text" class="form-control" id="firstname" name="firstname" placeholder="" autocomplete="off" > -->
    <input type="text" value="" name="firstname" placeholder="Enter Your Last Name" autocomplete="off" />
    <br>                
    <label for="uname"><b>Last Name</b></label>
    <br> <input type="text"  id="lastname" name="lastname" placeholder="Enter your Last Name" autocomplete="off">
    <br>
    <br><label for="uname"><b>E-mail</b></label>
    <br> <input type="email"  id="emailaddress"  name="email" placeholder="name@example.com" value="" autocomplete="off">
    <br>
    <label for="psw"><b>Password</b></label>
    <br><input type="password" placeholder="Enter Password" name="password" value="" required>
     
    
    <br><label for="uname"><b>Confirm Password</b></label>
    <br><input type="password" placeholder="Confirm Password" name="cpassword" required>
   <input type="submit" name="register" value="Register"/>
  
  <br>
  <!-- <a href="#" id="button">Buy tickets / Check Events</a>  -->
  
  </div>

      
      <!-- <a href="#" id="button">Buy tickets / Check Events</a>  -->
  
  
  <!--  <input type="submit" name="register" class="btn btn-primary py-3 w-100 mb-4" value="Register"></button> -->
                          
  <!-- <div class="container" style="background-color:#f1f1f1"> -->
  <!-- <a href="#" id="button">Buy tickets / Check Events</a>  -->
  
   </div>
</form>

        <!-- Sign In End -->
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
 
    <script src="register.js"></script>
    </form>
</body>

</html>