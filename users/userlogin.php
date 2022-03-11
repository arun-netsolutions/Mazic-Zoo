
<?php

include 'dbcon.php';
session_start();
if(isset($_SESSION["email"])){
    header("location:admin-home.php");

}
elseif(isset($_POST['signin'])){
    
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=$_POST['password'];
   
    $sql="select * from users where email='$email'";
    
    $result=mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        while($row=mysqli_fetch_assoc($result)){
            
            if(password_verify($password,$row["password"]) and $row["role_id"]=='3' and $row["user_status"]=='1'){
                session_start();
                $_SESSION["email"]=$row["email"];
                $_SESSION["first_name"]=$row["first_name"];
                $_SESSION["user_id"]=$row["user_id"];
                $_SESSION["role_id"]=$row["role_id"];
 
                header("location:admin-home.php");
               
            }
            else{
                echo "<script>alert('username or password does not match or profile is not approved yet ')</script>";
                header("location:login.php");
                 echo "<script>alert('username or password does not match')</script>";
            }
     
    }
}
     else{
        echo " <alert>You Have Entered Incorrect Password</alert>";
     
        exit();
     }
        
}
    
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
    <link href="css/style.css" rel="stylesheet">
    <style>
        input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 20px 12px 0;
}

img.avatar {
  width: 50%;
  border-radius: 50%;
  margin-left: 200px;
  align-self: center;
}

.container {
  padding: 16px;
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
</style>
</head>
<body>

        </style>
</head>

<body>
<div id="page">
  <div id="header"> <a href="#" id="logo"><img src="images/logo.jpg" alt=""/></a>
   
    <ul id="navigation">
      <li id="link1" class="selected"><a href="index.html">Home</a></li>
      <li id="link2"><a href="zoo.html">The Zoo</a></li>
      <li id="link3"><a href="info.html">Visitors Info</a></li>
      <li id="link4"><a href="tickets.html">Tickets</a></li>
      <li id="link5"><a href="events.html">Events</a></li>
      <li id="link6"><a href="gallery.html">Gallery</a></li>
      <li id="link7"><a href="contact.html">Contact Us</a></li>
    </ul>
    
  </div>
  <div id="content">
    
    <form id="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
   
        <!-- Sign In Start -->
       
  <div class="imgcontainer" style="align-items: flex-end;">
      <center>
    <img src="images/img_avatar2.png" alt="Avatar" class="avatar" style="text-align: right;">
      </center>
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
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
 
    <script src="js/main.js"></script>
    </form>
</body>

</html>