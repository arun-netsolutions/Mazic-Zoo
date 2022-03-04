<?php
include 'header.php';

if(isset($_POST['book'])){
    $total=$_POST['total_val'];

    $adult=$_POST['total_adult'];

    $child=$_POST['total_child'];

    $firstname=$_POST['first_name'];
 
    $lastname=$_POST['last_name'];
 
    $phone=$_POST['phone'];
$quantity=$adult+$child;

    $Date=$_POST['date'];
$quantity=$adult+$child;

// $sql="INSERT INTO `ticket`( `first_name`, `last_name`, `quantity`, `adult`, `child`, `status`, `date`) VALUES ('$firstname','$lastname','$phone','$quantity','$adult','$childs','$Date','$quantity')";
$sql="INSERT INTO `ticket`( `first_name`, `last_name`, `phone`, `quantity`, `adult`, `child`,  `date`,`total`) VALUES ('$firstname','$lastname','$phone','$quantity','$adult','$child','$Date','$total')";
$result=mysqli_query($conn, $sql)or die("query unscessful.");
if(mysqli_affected_rows($conn)==1)
{
header("location:confirmed-tickets.php");
}
else{
    echo "error";
}
        


}



?>