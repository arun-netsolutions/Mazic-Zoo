<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	$database = "zoo_management";

	// Create a connection
	$conn = mysqli_connect($servername,
		$username, $password, $database);


if($_POST['categorytype'] == ""){
 
   
}
else if($_POST['categorytype'] == "categoryData"){
	$cid=$_POST["id"];
    $sql="SELECT `animal_id`, `animal_name`, `animal_category`, `animal_description`, `animal_image`, `status` FROM `animal_details` where `animal_category`= ".$cid."";
    $query=mysqli_query($conn,$sql) or die("Query Unsuccessful");
    $str="";
    while($row=mysqli_fetch_assoc($query)){
        $str .= "<option value='{$row['animal_name']}'>{$row['animal_name']}</option>";
    
    }
}

echo $str;


?>