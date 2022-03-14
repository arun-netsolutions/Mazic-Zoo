
<?php

include 'dbcon.php';
session_start();
//     $userid=$_GET['uid'];

  
//    $user_status=1;   // $user_status=$_POST['user_status'];
//     // $user_status=1;
    
//         $sql1="DELETE FROM `users` WHERE `user_id` = ".$userid;
//       $result= mysqli_query($conn,$sql1);
//      if(mysqli_affected_rows($conn)>0){
//          echo "data updated successively";
//          header("location:userslist.php");
//      }
//      else{
//          echo "can't update";
//      }
 
     if(isset($_POST['delete_btn_set'])){
        $del_id=$_POST['delete_id'];
        $sql1="DELETE FROM `users` WHERE `user_id` = ".$del_id;
      $result= mysqli_query($conn,$sql1);
      


 
     }
?>
