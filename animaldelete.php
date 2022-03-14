
<?php

include 'dbcon.php';
session_start();
//     $id=$_GET['id'];

  
//    $user_status=1;   // $user_status=$_POST['user_status'];
//     // $user_status=1;
    
//         $sql1="DELETE FROM `animal_details` WHERE `animal_id` = ".$id;
//       $result= mysqli_query($conn,$sql1);
//      if(mysqli_affected_rows($conn)>0){
//          echo "data updated successively";
//          header("location:animalslist.php");
//      }
//      else{
//          echo "can't update";
//      }
 
    

if(isset($_POST['delete_btn_set'])){
   $del_id=$_POST['delete_id'];
   $sql1="DELETE FROM `animal_details` WHERE `animal_id` = ".$del_id;
   $result= mysqli_query($conn,$sql1);

}
 

?>
