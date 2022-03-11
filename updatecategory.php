
<?php
 include 'dbcon.php';
 $cid=$_GET['cid'];
 

 $sql="SELECT * FROM animal_categories WHERE `category_id` = {$cid}";
 $result=mysqli_query($conn, $sql)or die("query unscessful.");
 if(mysqli_num_rows($result)>0){
   while($row = mysqli_fetch_assoc($result)){
 
 
  //---------------display records----------------------
 
   
 


    ?>
    





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Add New User</title>
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
    include 'header.php';
    ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form>
                                <div class="mb-3">
                                     <input type="hidden" class="form-control" name="category_id" value="<?php echo $row['animal_id'] ?>" />
                     
                                    <label for="CategoryName" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="category_name" name="category_name" value="<?php 
echo $row['name']                                    
                                    ?>">
                                </div>
                                
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                                </form>
                        </div>
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
<footer>
<?php 
   }

}

include 'footer.php';
?>
</footer>
</html>
