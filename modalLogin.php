<?php
include 'dbcon.php';
if(isset($_POST['login'])){
    
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=$_POST['password'];
   
    $sql="select * from users where email='$email'";
    
    $result=mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        while($row=mysqli_fetch_assoc($result)){
            
            if(password_verify($password,$row["password"]) and $row["role_id"]=='1'or'2' and $row["user_status"]=='1'){
                session_start();
                
                $_SESSION["first_name"]=$row["first_name"];

                $_SESSION[""]=$row["last_name"];
              
 
                header("location:ticketform.php");
               
            }
            else{
                echo "<script>alert('username or password does not match or profile is not approved yet ')</script>";
                header("location:modals.php");
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
     
   