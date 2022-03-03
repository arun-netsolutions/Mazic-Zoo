<?php
include 'dbcon.php';
    
            $cid=$_GET['cid'];
    
    $sql1="DELETE FROM `animal_categories` WHERE `category_id` = ".$cid;
  $result= mysqli_query($conn,$sql1);
 if(mysqli_affected_rows($conn)>0){
      header("location:animalcategorylist.php");
 }
 else{
     echo "can't update";
 }


?>