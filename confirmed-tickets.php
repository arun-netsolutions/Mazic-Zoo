<?php


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Animal List</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
    
    .pagination {
      display: inline-block;
    }
    
    .pagination a {
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color .3s;
      border: 1px solid #ddd;
      margin: 0 4px;
    }
    
    .pagination a.active {
      background-color: #4CAF50;
      color: white;
      border: 1px solid #4CAF50;
    }
    
    .pagination a:hover:not(.active) {background-color: #ddd;}
    </style>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>


<body>
    <form method="POST" action="">
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
                
            </div>
        </div>
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
                        <h6 class="mb-0">LIST OF Tickets</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>

                                <tr class="text-dark">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col" Name="first_name">First Name</th>
                                    <!-- <th scope="col" Name="last_name">Last Name</th> -->
                                    <th scope="col" Name="user_name">Phone Number</th>
                                    <th scope="col" Name="phone">Quantity</th>
                                    <th scope="col" Name="role">Adult</th>
                                    <th scope="col" Name="staus">Child</th>
                                    <th colspan="2" scope="col">Date and Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'dbcon.php';
                                $limit=5;
                                          
                                if(isset($_GET['page'])){
                                 $page=$_GET['page'];
                                }else{
                                 $page=1;
                                }
                                $offset=($page-1)*$limit;
                   
                                $sql1="SELECT * FROM ticket ORDER BY user_id DESC LIMIT {$offset},{$limit}";
                                $res=$conn->query($sql1);
                                if(!$res){
                                die("invalid query: ".$conn->error);
                                }
                                while($row=$res->fetch_assoc()){
                                    echo " <tr>
                                    <td><input class=form-check-input type=checkbox></td>
                                    <td>".$row["first_name"]."</td>
                                   
                                    <td>".$row["phone"]."</td>
                                    <td>".$row["quantity"]."</td>
                                    <td>".$row["adult"]."</td> 
                                    <td>".$row["child"]."</td>
                                    <td>".$row["date"]."</td>";
                                  



                          echo "<td><div class='dropdown'>
                          <a href='#' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'><i class='far fa-file-alt me-2'></i>Action</a>
                          <div class='dropdown-menu bg-border-2px solid blue'>

                              <a href='ticketprint.php?tid=$row[user_id]' name='print' class='dropdown-item'>Print</a>
                                      </div>          
                                    </td></tr>";
                                }   


                           
                                ?>
                                
                            </tbody>
                          
                             
                              
                                           
                        </table>
                        <br>
                        <?php
                        $sql2="SELECT * FROM ticket ";
                        $result2=mysqli_query($conn,$sql2) or die("failed");
                        if(mysqli_num_rows($result2)>0){
                            $total_records=mysqli_num_rows($result2);
             
                            $total_page=ceil($total_records/$limit);
                            echo '<div class="pagination">';

                            if($page > 1){
                                echo '<a href="confirmed-tickets.php?page='.($page - 1).'">< Previous</a>';
                            }

                            
                            for($i =1;$i <= $total_page;$i++){
                                if($i==$page){
                                    $active="active";

                                }
                                else{
                                    $active="";
                                }
                                echo '<a class="'.$active.'" href="confirmed-tickets.php?page='.$i.'">'.$i.'</a>';
                            }
                           
                            if($total_page > $page){
                                echo '<a href="confirmed-tickets.php?page='.($page + 1).'">Next ></a>';
                            }
  echo '</div>';
                        }


                        
                        ?>
             
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