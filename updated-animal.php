<?php

 include 'dbcon.php';
if(isset($_POST['update'])){
$id=$_POST['animal_id'];
$animal_name=$_POST['animal_name'];
// $animal_category=$_POST['animal_category'];
$animal_description=$_POST['animal_description'];
// $animal_quantity=$_POST['quantity'];
$image=$_FILES['image']['name'];


// $sql="INSERT INTO `animals`( `animal_name`, `animal_category`, `animal_description`, `animal_image`, `quantity`, `status`) 
// VALUES ('$animal_name','$animal_category','$animal_description','$image','$animal_quantity','$status')";
// $sql1='UPDATE `animal_details` SET `animal_name`="'.$animal_name.'" ,`animal_description`="'.$animal_description.'",`animal_image`="'.$image.'",WHERE animal_id="'.$id.'"';
 
$sql1='Update animal_details set animal_name ="'.$animal_name.'" , animal_description="'.$animal_description.'",animal_image="'.$image.'" where animal_id="'.$id.'"';
 
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES['image']['name']);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
move_uploaded_file($_FILES['image']['tmp_name'],$target_file);

$result1 = mysqli_query($conn, $sql1);
if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){

    $msg="image uploaded successfully";
    
    
    
    
    }
    else{
         
        $msg="Error in image uploading";
    
    }
    
    if(mysqli_affected_rows($conn)==1){
      header("location:animalslist.php");
     
    }

}

?>