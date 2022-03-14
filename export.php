<?php 
 
// Load the database configuration file 
include_once 'dbcon.php'; 
 
// Fetch records from database 
$query ="SELECT * FROM users ORDER BY user_id ASC"; 
 $result=mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0){ 
    $delimiter = ","; 
    $filename = "ticket-data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('ID', 'FIRST NAME', 'LAST NAME', 'EMAIL', 'Role Id', 'Status'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = mysqli_fetch_assoc($result)){ 
        $status = ($row['user_status'] == 1)?'Active':'Inactive'; 
        $lineData = array($row['user_id'], $row['first_name'], $row['last_name'], $row['email'],$row['role_id'],$status); 
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