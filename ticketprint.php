<?php
include 'dbcon.php';
    $tid=$_GET['tid'];
$sql="SELECT * FROM ticket where user_id=".$tid;
$result=mysqli_query($conn, $sql)or die("query unscessful.");
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
  
    
    echo'<center> <div class="ticket">
    <img src="images.jpg" alt="Logo">
    <p class="centered">RECEIPT </p>
       
    <table>
        
            <tr>
                <th class="First">First Name</th>
                <td class="First">'.$row["first_name"].'</td>
                </tr>
               
                <tr>
                <th class="Phone No.">Phone No.</th>
                <td class="Phone No.">'.$row["phone"].'</td>
                </tr>
                <tr>
                <th class="Quantity">Quantity</th>
                <td class="Quantity">'.$row["quantity"].'</td>
                </tr>
                <tr>
                <th class="Adult">Adult</th>
                <td class="Adult">'.$row["adult"].'</th>
                </tr>
                <tr>
                <th class="child">Child</th>
                <td class="child">'.$row["child"].'</th>
                </tr>
                <tr>
                <th class="date">Date</th>
                <td class="date">'.$row["date"].'</th>
                </tr>
                <tr>
                <th class="total price">Total</th>
                <td class="total price">'.$row["total"].'</th>
                </tr>
            </tr>
          
           
        
    </table>
    <p class="centered">Thanks for your purchase!
        <br>The Mazic Zoo</p>
</div>
<button id="btnPrint" class="hidden-print">Print</button></center>';





    }

}

?>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/ticket.css">
        <title>Receipt</title>
    </head>
</html>
<script>
    const $btnPrint = document.querySelector("#btnPrint");
$btnPrint.addEventListener("click", () => {
    window.print();
});
    </script>






 <!-- <tr>
            <th class="Last">Last Name</th>
                <td class="Last">'.$row["last_name"].'</td>
         </tr> -->