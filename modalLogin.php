<?php
include 'dbcon.php';
if(isset($_POST['login'])){
    
    $user_id=$_POST['user_id'];

   
    $sql="select * from users where user_id='$user_id'";
    
    $result=mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        while($row=mysqli_fetch_assoc($result)){
            
                session_start();
                $_SESSION["modal_first_name"]=$row["first_name"];
                
                  $_SESSION["modal_last_name"]=$row["last_name"];
                 
                     header("location:ticketform.php");
            
        }
    }
            else{
               
                header("location:modals.php");
              
            }
     
    }
        
 
   ?> 
     
   