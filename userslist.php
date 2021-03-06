

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

</head>

<body>
    <form method="POST" action="admin_user_update.php">
    <div class="container-xxl position-relative bg-white d-flex p-0">
      


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
                        <h6 class="mb-0">LIST OF USERS</h6>
                        <a href="export.php" button type="button" class="btn btn-info rounded-pill m-2" name="export_csv_data" value="Export to CSV"> EXport to CSV</button></a>
                      
                        <a href="newuseradd.php" button type="button" class="btn btn-primary rounded-pill m-2"> + Add New</button></a>
               
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>

                                <tr class="text-dark">
                                    <!-- <th scope="col"><input class="form-check-input" type="checkbox"></th> -->
                                    <th scope="col" Name="first_name">First Name</th>
                                    <th scope="col" Name="last_name">Last Name</th>
                                    <!-- <th scope="col" Name="user_name">User Name</th> -->
                                    <th scope="col" Name="mail">E-mail</th>
                                    <th scope="col" Name="role">Role</th>
                                    <th scope="col" Name="staus">Status</th>
                                    <th colspan="2" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                             $limit=5;
                                          
                                           if(isset($_GET['page'])){
                                            $page=$_GET['page'];
                                           }else{
                                            $page=1;
                                           }
                                           $offset=($page-1)*$limit;
                                $sql1="SELECT * FROM users where role_id=3 ORDER BY user_id DESC LIMIT {$offset},{$limit}";
                                $res=$conn->query($sql1);
                                if(!$res){
                                die("invalid query: ".$conn->error);
                                }
                                while($row=$res->fetch_assoc()){
                                    $first_name=$row["first_name"];
                                    $last_name=$row["last_name"];
                                
                                    echo " <tr>
                                    
                                    <td>".ucfirst($first_name)."</td>
                                    <td>".ucfirst($last_name)."</td>
                                    <td>".$row["email"]."</td>";
                                    if($row["role_id"]==3){
                                        echo"<td>user</td>";
                                    }
                                    elseif($row["role_id"]==1) {
                                        echo"<td> Super Admin</td>";
                                    }
                                    if($row["role_id"]==2){
                                        echo"<td>Catalog manager</td>";
                                    }


                                    if($row["user_status"]==1){
                                        echo "<td>Active </td>";
                                      }
                                    elseif($row["user_status"]==0){
                                      echo "<td>Pending</td>";
                                    }
                                    else{
                                        echo"<td>Rejected</td>";
                                    }
                                   

                          echo "<td><div class='dropdown'>
                          <a href='#' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'><i class='far fa-file-alt me-2'></i>Action</a>
                          <div class='dropdown-menu bg-border-2px solid blue'>
                              <a href=admin_user_update.php?uid=$row[user_id] name='update' class='dropdown-item-edit'>Edit</a><br>";
                              
                            if($row['user_status']==0){
                            echo "<a href='accept.php?uid=$row[user_id]&us=$row[user_status]' class='dropdown-item-accept'>Accept</a><br>";
                            }                  
                            
                            echo " <input type='hidden' class='delete_id_value' value=".$row['user_id'].">
                            <a href='javascript:void(0)' type='submit' name='delete' class='dropdown-item-delete'>Delete</a>
       
                       
                                    </div>          
                                    </td></tr>";
                                }   


                           
                                ?>
                                
                            </tbody>
                        </table>
                        <br>
                        <?php
                        $sql2="SELECT * FROM users ";
                        $result2=mysqli_query($conn,$sql2) or die("failed");
                        if(mysqli_num_rows($result2)>0){
                            $total_records=mysqli_num_rows($result2);
             
                            $total_page=ceil($total_records/$limit);
                            echo '<div class="pagination">';

                            if($page > 1){
                                echo '<a href="userslist.php?page='.($page - 1).'">< Previous</a>';
                            }

                            
                            for($i =1;$i <= $total_page;$i++){
                                if($i==$page){
                                    $active="active";

                                }
                                else{
                                    $active="";
                                }
                                echo '<a class="'.$active.'" href="userslist.php?page='.$i.'">'.$i.'</a>';
                            }
                           
                            if($total_page > $page){
                                echo '<a href="userslist.php?page='.($page + 1).'">Next ></a>';
                            }
  echo '</div>';
                        }


                        
                        ?>
                     

                        
                    <!-- <li class="active"><a>1</a></li> -->
                    
       
                   

    
                        
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
    <script>

$(document).ready(function(){
    $('.dropdown-item-delete').click(function (e){

e.preventDefault();

var deleteid=$(this).closest("tr").find('.delete_id_value').val();
// console.log(deleteid);
swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Data!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
        type:"POST",
        url: "reject.php",
        data: {
            "delete_btn_set":1,
            "delete_id":deleteid,
        },
       
        success:function (response){
            swal("data Deleted Successfully",{
            
            icon: "success",
           
            }).then((result) => {
                location.reload();
            });
                    }
                });
    
  } 
});
});
});

    </script>


    </form>
</body>

</html>