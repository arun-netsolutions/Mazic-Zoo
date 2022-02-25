<?php
include 'header.php';
include 'dbcon.php';
if(isset($_POST["update"])){
  $user_id=$_POST['user_id'];
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $role=$_POST['role'];
  
  $sql='Update users set first_name ="'.$first_name.'" , last_name="'.$last_name.'",role_id="'.$role.'" where user_id="'.$user_id.'"';
  $result=mysqli_query($conn, $sql)or die("query unscessful.");
if(mysqli_affected_rows($conn)==1)
{
header("Location:userslist.php");
mysqli_close($conn);

}
else{
    echo"failed";
}
}
if(isset($_POST["cancel"])){
    header("Location:admin-home.php");
}
?>