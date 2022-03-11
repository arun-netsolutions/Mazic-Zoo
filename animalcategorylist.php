<?php


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin List</title>
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
    <form method="POST" action="admin_user_update.php">
    <div class="container-xxl position-relative bg-white d-flex p-0">
      
        <!-- Spinner End -->


        <!-- Sidebar Start -->
     
        <!-- Sidebar End -->


        <!-- Content Start -->
        <?php
        
        include 'header.php';
        
        ?>
         <!-- Navbar Start -->
            

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">LIST OF AnimalCategories</h6>
                        <a href="addnewcategory.php" button type="button" class="btn btn-primary rounded-pill m-2"> + Add New</button></a>
               
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>

                                <tr class="text-dark">
                                    
                                    <!-- <th scope="col" Name="first_name">CAtegory Id</th> -->
                                    <th scope="col" Name="last_name">Category Name</th>
                                    <!-- <th scope="col" Name="user_name">User Name</th> -->
                                    <th colspan="2" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'dbcon.php';
                                $sql1="SELECT * from animal_categories";
                                $res=$conn->query($sql1);
                                if(!$res){
                                die("invalid query: ".$conn->error);
                                }
                                while($row=$res->fetch_assoc()){
                                    $name=$row["name"];
                                    echo " <tr>
                                    
                                
                                    <td>".ucfirst($name)."</td>";
                                   
                                   

                          echo "<td><div class='dropdown'>
                          <a href='#' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'><i class='far fa-file-alt me-2'></i>Action</a>
                          <div class='dropdown-menu bg-border-2px solid blue'>
                              <a href='updatecategory.php?cid=$row[category_id]' name='update' class='dropdown-item'>Edit</a>
                             
                              <a href='deletecategory.php?cid=$row[category_id]' name='delete' class='dropdown-item'>Delete</a>
                                    </div>          
                                    </td></tr>";
                                }   


                           
                                ?>
                                
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>







            <!-- Footer Start -->
<?php 
include 'footer.php';
?>
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