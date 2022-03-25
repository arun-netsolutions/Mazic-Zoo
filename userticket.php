
<?php

include 'dbcon.php';
session_start();

if (isset($_POST['book'])) {
    $total=$_POST['total_val'];

    $adult=$_POST['total_adult'];

    $child=$_POST['total_child'];

    $firstname=$_POST['first_name'];

    $lastname=$_POST['last_name'];

    $phone=$_POST['phone'];
    $quantity=$adult+$child;
    $emailuser=$_SESSION['email'];
    $Date=$_POST['date'];
    $quantity=$adult+$child;

    // $sql="INSERT INTO `ticket`( `first_name`, `last_name`,`email`, `quantity`, `adult`, `child`, `status`, `date`) VALUES ('$firstname','$lastname','$phone','$quantity','$adult','$childs','$Date','$quantity')";
    $sql="INSERT INTO `ticket`( `first_name`, `last_name`,`email`, `phone`, `quantity`, `adult`, `child`,  `date`,`total`) VALUES ('$firstname','$lastname','$emailuser','$phone','$quantity','$adult','$child','$Date','$total')";
    $result=mysqli_query($conn, $sql)or die("query unscessful.");
    if (mysqli_affected_rows($conn)==1) {
        $email=$_SESSION["email"];
        $to_mail="$email";
        $subject="Testing Email using php";
        $body= "Hi this email is sent by The Mazic Zoo Regarding Successful booking of your tickets on={$Date} \n your details are: \n First-Name :{$firstname},\n last-name:{$lastname},\n Phone-No:{$phone},\n Quantity:{$quantity},\n Adults:{$adult},\n Childs:{$child},\n Total-Amount:{$total} ";
        $headers="from:arun66gp@gmail.com";
  
        mail($to_mail, $subject, $body, $headers);
    } else {
        echo "error";
    }
}
    ?> 
     



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> login </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="users/css/style.css" rel="stylesheet">

</head>

<body>
<?php
include 'user-header.php'; ?>
  <h2 style="text-align: center;">Tickets</h2>
  <?php
    echo '<a href="userbookedtickets.php?email=$_Session[email]" style="margin-left:70%;">Prevoius Tickets..</a>'; ?>
   <div id="content">
 
    <form id="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
    
    <div class="container">
    <label for="uname"><b>First Name</b></label>
    <input type="text" name="first_name" class="form-control" value='
                                    <?php
                          
                                    if (isset($_SESSION["first_name"])) {
                                        echo  $_SESSION["first_name"];
                                    } ?>
                                    
                                   ' />
    <label for="psw"><b>Last Name</b></label>
 
    <input type="text" name="last_name" class="form-control" value=' <?php
                          
                          if (isset($_SESSION["last_name"])) {
                              echo  $_SESSION["last_name"];
                          } ?>
                          '
                          />
                          <label for="psw"><b>Email</b></label>
                          <input type="text" name="email" class="form-control" value=' <?php
                          
                          if (isset($_SESSION["email"])) {
                              echo  $_SESSION["email"];
                          } ?>
                          '
                          />     
    <label for="psw"><b>Phone Number</b></label>
    <small>Format: 123-4567-890</small>
 <input type="text" id="phone" name="phone" placeholder="" class="form-control" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}" required>

 <label for="BookingDate"><b>Date Of Booking</b></label>
                <input type="datetime-local" class="form-control" name="date" style="text-align: center;" />
                  
 
 <div class="row">
                  <div class="col-4 row-heading">
                    Total Customers
                  </div>
                  <div class="col-4 row-heading">
                    No. of customers
                  </div>
                  <div class="col-4 row-heading">
                    Price
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-3">
                    1. Adult
                  </div>
                  <div class="col-3">
                    <input type="number" value="0" class="qty" id="qty_sugar"/>
                    <input type="hidden" id="total_adult" name="total_adult" value="">
                
                  </div>
                  <div class="col-3">
                    <input type="number" readonly value="0" id="price_sugar"/>
                    
                  </div>
                </div>
                
                <div class="row my-3">
                  <div class="col-3">
                    2. Child
                  </div>
                  <div class="col-3">
                    <input type="number" value="0" class="qty" id="qty_butter"/>
                    <input type="hidden" id="total_child" name="total_child" value="">
                
                  </div>
                  <div class="col-3">
                    <input type="number" readonly value="0" id="price_butter"/>
                  </div>
                </div>
                
              
                <div class="row my-4">
                  <div class="col-3 text-right total">
                  Total
                  </div>
                  
                  <div class="col-4 total-val">
                    <span id="total_value">0</span>
                    <input type="hidden" id="total_val" name="total_val" value="">
                  </div>

                </div>
    </div>
                                <br><br>

                <input type="submit" name="book" class="btn btn-primary py-3 w-100 mb-4" value="Book Now"></button>
 
  </div>
   
        <!-- Sign In Start -->
       
                                  
                              
                                 
                              
                                                
                                                    

                            </form>
                          </div>
                          <!-- Footer Start -->
                          <?php
                          include 'user-footer.php'; ?>
              
                      <!-- Footer End -->
                        
                      </div>
              
                      </div>

                    
                  </div>
                  <!-- Content End -->


                  <!-- Back to Top -->
                  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
              </div>

              <!-- JavaScript Libraries -->
              <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
              <script src="lib/chart/chart.min.js"></script>
              <script src="lib/easing/easing.min.js"></script>
              <script src="lib/waypoints/waypoints.min.js"></script>
              <script src="lib/owlcarousel/owl.carousel.min.js"></script> 
              <script src="lib/tempusdominus/js/moment.min.js"></script>
              <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
              <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

              <!-- Template Javascript -->
          
              <script src="ticket.js"></script>
              </form>

</body>
</html>
<?php

?>