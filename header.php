<?php 
include "dbcon.php";
session_start();
if(!isset($_SESSION["email"])){
    header("location:login.php");
}
?>


<div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
               
                <div class="navbar-nav align-items-center ms-auto">
                   
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION["first_name"] ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="profile.php" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>   
            <div class="sidebar pe-4 pb-3">
    
    <nav class="navbar bg-light navbar-light">
        <a href="admin-home.php" class="navbar-brand mx-4 mb-3">
        <img src="images.jpg" alt="profile photo" class="circle float-left profile-photo" width="100" height="auto">
      </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            
        </div>
        <div class="navbar-nav w-100">
            <a href="admin-home.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="userslist.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Users List</a>
           <?php
           if($_SESSION['role_id']==1)
           { 
            ?>
            <a href="adminlist.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i> Admin List</a>  
            <?php
           }
            ?>
             <a href="animalcategorylist.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Animal Categories</a>
          
            <a href="animalslist.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Animals List</a>
            <!-- <a href="ticketform.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Ticket Booking</a> -->
         
         
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Tickets</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="ticketform.php" class="dropdown-item">Apply Ticket</a>
                    <a href="confirmed-tickets.php" class="dropdown-item">List of all tickets</a>
                    <!-- <a href="waiting" class="dropdown-item">Log Out</a> -->
                           </div>
            </div>
        </div>
    </nav>
    
</div>