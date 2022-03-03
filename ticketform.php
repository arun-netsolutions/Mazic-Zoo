<?php
// include 'dbcon.php';
// $id=$_GET['uid'];

// $sql="SELECT * FROM `users` WHERE `user_id` = {$id}";
// $result=mysqli_query($conn, $sql)or die("query unscessful.");
// if(mysqli_num_rows($result)>0){
//   while($row = mysqli_fetch_assoc($result)){


 //---------------display records----------------------

  


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ticket Form</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
    <link href="css/style.css" rel="stylesheet">
    <style>
        .row-heading
{
  font-size:1.3rem;
  font-weight:bold;
}
.total
{
  font-size:2rem;
  font-weight:bold;
}
.total-val
{
  font-size:2rem;

}

        </style>
</head>

<body>
  <?php 
  include "header.php";
  ?>
    <form method="POST" action="bookingconfirm.php">
 

        <!-- Content Start -->
        <div class="content">
            


        <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Booking form</h2>
                  <form class="form-sample">
                    <p class="card-description">
                     <h4> Personal info</h4>
                    </p>
                    <!-------------         first name    ---------------------->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">User Name</label>
                          <div class="col-sm-9">
                          <input type="text" name="first_name" class="form-control" value="<?php
                           echo  $_SESSION["user_name"];
                          
                          ?>"/>
                         
                          </div>
                        </div>
                      </div>
                    </div>
                    <br><br>
                        <!-- -----------         last name    --------------------
                        <input type="hidden" class="form-control" name="user_id"  />
                       
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" >Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="last_name" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <br><br> -->
                       <!-------------       Phone Number   ---------------------->
                       <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" aria-disabled="true" >Phone No.</label> 
                          <div class="col-sm-9">
                          <small>Format: 123-4567-890</small>
                          <input type="text" id="phone" name="phone" placeholder="" class="form-control" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}" required><br><br>
                          
                          </div>
                        </div>
                      </div>
                        </div>
                        <br>
                        <!-- -----------        Quantity    --------------------
                        <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" aria-disabled="true">Quantity</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="quantity" />
                         
                          </div>
                        </div>
                      </div>
                        </div> -->
                        <br>
                        <!-------------        no.of adult users   ---------------------->
                        <div class="row">
        <div class="col-3 row-heading">
          Total Customers
        </div>
        <div class="col-3 row-heading">
          No. of customers
        </div>
        <div class="col-3 row-heading">
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
        
        <div class="col-2 total-val">
          <span id="total_value">0</span>
          <input type="hidden" id="total_val" name="total_val" value="">
        </div>

      </div>
                  <br>
                          <!-------------       Date and time of booking ---------------------->
                          <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" aria-disabled="true">Date of booking</label>
                          <div class="col-sm-9">
                          <input type="date" class="form-control" name="date" />
                         
                          </div>
                        </div>
                      </div>
                        </div>
                        <br>
                    
                                      
                                          

                    </div>
                    </div>
                    
                    </div>
                    <button class="btn btn-primary w-50 m-2" type="submit" name="book">book</button>
                    <button class="btn btn-outline-primary w-50 m-1" type="submit" name="cancel">Cancel</button>
                           
                              
                    <br><br>
                  </form>
                </div>
                <?php

include "footer.php";
?>
              </div>
    
            </div>

            <!-- Footer Start -->
   
            <!-- Footer End -->
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
