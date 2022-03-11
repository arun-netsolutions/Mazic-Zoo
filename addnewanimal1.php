<?php
session_start();
include 'dbcon.php';

if(isset($_POST["add"])){
$name=$_POST['name'];
$animal_category=$_POST['animal_category'];
$cat_id=$animal_category[0];
// echo $cat_id;
// die();



foreach($name as $index => $names)
{
    $s_animal_category=$animal_category[$index];
    $sql = "INSERT INTO `animal_lists`(`animal_name`, `category_id`) VALUES ('{$name[$index]}','{$cat_id}')";
    $result = mysqli_query($conn, $sql);
                  



}
// die();
if($result){
    $_SESSION['status']="Multiple data inserted successfuly";
    header("location:addnewanimal.php");
exit(0);
}
else{
    $_SESSION['status']="Multiple data inserted not  successfuly";
    header("location:addnewanimal.php");
exit(0);
}



//         $name=$_POST["name"];
// echo $name;
//         $animal_category=$_POST["animal_category"];
//         $num=count($_POST["name"]);
//         echo $num;
//         foreach ($_POST['name'] as $key => $val) {
            // Do something with the values
        // }
        // for($i=0;$i<$num;$i++){
        //     if(trim($_POST['name'][$i])!= ''){
            // $sql = "INSERT INTO `animal_lists`(`name`,`category_id`) VALUES ('$name','$animal_category')";
        
            //     $result = mysqli_query($conn, $sql);
                
                
            //     if(mysqli_affected_rows($conn)==1){
            //         header("location:animalcategorylist.php");
                   
            //        }
        
        //     
           
            }
        ?>