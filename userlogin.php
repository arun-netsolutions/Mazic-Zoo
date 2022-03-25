<?php
include 'dbcon.php';
if(isset($_POST['signin'])){
    
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
                $_SESSION["last_name"]=$row["last_name"];
                $_SESSION["user_id"]=$row["user_id"];
                $_SESSION["role_id"]=$row["role_id"];
 
                header("location:user-gallery.php");
               
            }
            
    

     else{
        header("location:unsuccessful_login.php");
     
        exit();
     }
        
}
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
    <link href="users/css/style.css" rel="stylesheet">
    <style>

        input[type=text], input[type=password] {
  width: 80%;
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
  <div id="content" style="text-align: center;">
    
 
    <form name="myform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  >
    <h2 style="text-align: center;color:brown">Login Form</h2>
        <!-- Sign In Start -->
       <hr>
  <div class="container" style="text-align:center; margin-top:20px;">
    <label for="uname"><b>Username</b></label>
    <br>
    <input type="text" placeholder="Enter Username" name="email" required>
<br>
    <label for="psw"><b>Password</b></label>
    <br>
    <input type="password" placeholder="Enter Password" name="password" required>
        <br>
    <input type="submit" name="signin" value="Login" style="margin-left:33%;"/>
    <p class="text-center mb-0">Don't have an Account? <a href="userRegister.php" style="color:dodgerblue;">Register Here..</a></p>
   
   
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
 
    <!-- <script src="js/main.js"></script> --> 
    </form>
</body>

</html>