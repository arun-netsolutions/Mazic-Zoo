<?php 
 
// Load the database configuration file 
include_once 'dbcon.php'; 
 
// Fetch records from database 
$query ="SELECT * FROM animal_details ORDER BY animal_id ASC"; 
 $result=mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0){ 
    $delimiter = ","; 
    $filename = "animals-data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('ID', 'NAME', 'CATEGORY', 'DESCRIPTION', 'QUANTITY', 'STATUS'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = mysqli_fetch_assoc($result)){ 
        $status = ($row['status'] == 1)?'Active':'Inactive'; 
        $lineData = array($row['animal_id'], $row['animal_name'], $row['animal_category'], $row['animal_description'],$row['quantity'],$status); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 

exit; 

 
?>