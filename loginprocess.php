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
            
            if(password_verify($password,$row["password"]) and $row["role_id"]=='1'or'2' and $row["user_status"]=='1'){
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
     
   
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="register.js"></script>

     
