<?php
include 'dbcon.php';
$id=$_GET['id'];

$sql="SELECT * FROM `animal_details` WHERE `animal_id` = {$id}";
$result=mysqli_query($conn, $sql)or die("query unscessful.");
if(mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_assoc($result)){


 //---------------display records----------------------

  


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
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
</head>

<body>
  <?php 
  include "header.php";
  ?>
    <form method="POST" action="updated-animal.php" enctype="multipart/form-data">
 

        <!-- Content Start -->
        <div class="content">
            


        <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Update form</h2>
                  <form class="form-sample">
                    <p class="card-description">
                     <h4> Personal info</h4>
                    </p>
                    <!-------------         first name    ---------------------->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Name</label>
                          <div class="col-sm-9">
                          <input type="text" name="animal_name" class="form-control" value="<?php echo $row['animal_name'] ?>"/>
                         
                          </div>
                        </div>
                      </div>
                    </div>
                    <br><br>
                        <!-------------         last name    ---------------------->
                        <!-- <input type="hidden" class="form-control" name="user_id" value="<?php echo $row['animal_id'] ?>" />
                       
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" >Category</label>
                          <div class="col-sm-9">
                            <input type="text" name="animal_category" class="form-control"value="<?php echo $row['animal_category'] ?>" />
                          </div>
                        </div>
                      </div>
                      <br><br> -->
                       <!-----------         Description   -------------------->
                        <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" aria-disabled="true">Description</label>
                          <div class="col-sm-9">
                          <input type="textarea" name ="animal_description" class="form-control" value="<?php echo $row['animal_description'] ?>"/>
                         
                          </div>
                        </div>
                      </div>
                        </div>
                        <br><br>
                       <!-------------       Image   ---------------------->
                       <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" aria-disabled="true">Image</label>
                          <div class="col-sm-9">
                          <img src="img/<?php
                           echo $row['animal_image']
                           ?>"  height=400px; width=600px: />
                          <input class="form-control" type="file" id="formFile" name="image"> 
                                   
                          </div>
                        </div>
                      </div>
                        </div>
                        <br><br>
                        <!-------------         last name    ---------------------->
                        <input type="hidden" class="form-control" name="animal_id" value="<?php echo $row['animal_id'] ?>" />
      
                    
                    </div>
                    <button class="btn btn-primary w-50 m-2" type="submit" name="update">Update</button>
                    <button class="btn btn-outline-primary w-50 m-1" type="submit" name="cancel">Cancel</button>
                           
                              
                    <br><br>
                  </form>
                </div>
              </div>
            </div>

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
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
 
    <script src="js/main.js"></script>
    </form>
</body>

</html>
<?php
}
}

include "footer.php";
?>