<?php
 include 'dbcon.php';
 $sql="SELECT distinct * FROM `animal_categories`";
$query=mysqli_query($conn,$sql) or die("Query Unsuccessful");
$str="";
while($row=mysqli_fetch_assoc($query)){
    $str .= "<option value='{$row['category_id']}'>{$row['name']}</option>";

}
if(isset($_POST['add'])){
  $target="img/".basename($_FILES['image']['name']);

$image=$_FILES['image']['name'];
$animal_name=$_POST['animal_name'];
$animal_category=$_POST['animal_category'];
$animal_description=$_POST['animal_description'];
// $animal_quantity=$_POST['animal_quantity'];

$status=$_POST['status'];
// $sql1="SELECT * FROM `animal_details` WHERE animal_name='$animal_name' and animal_category='$animal_category'";
// $result1 = mysqli_query($conn, $sql1);
        
// if (mysqli_num_rows($result1)>1){


//   $sql3="UPDATE animal_details SET quantity=quantity+1 where animal_name='$animal_name' and animal_category='$animal_category'";
 
// }
// else{
$sql2="INSERT INTO `animal_details`( `animal_name`, `animal_category`, `animal_description`, `animal_image`,  `status`) 
VALUES ('$animal_name','$animal_category','$animal_description','$image','$status')";

$result = mysqli_query($conn, $sql2);
        
if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){

$msg="image uploaded successfully";




}
else{
     
    $msg="Error in image uploading";

}

if(mysqli_affected_rows($conn)==1){
  header("location:animalslist.php");
 
 }

}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Add Animal</title>
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
    <form method="POST"  enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>">
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
            

         <div class="content">
            


            <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">Animal Add Form</h2>
                      <form class="form-sample">
                        <p class="card-description">
                         <h4> Personal info</h4>
                        
                        </p>
                        <!-------------         Animal name    ---------------------->
                        <!-- <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Name</label>
                              <div class="col-sm-9">
                              <input type="text" name="animal_name" class="form-control"/>
                             
                              </div>
                            </div>
                          </div>
                        </div>
                        <br><br> -->
                            <!-------------        Animal Category   ---------------------->
                            <input type="hidden" class="form-control" name=""  />
                           
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label" >Category</label>
                             
                             <div class="col-sm-9">
                           
                          <label>Category</label>
                          <select id="category" name="animal_category">
                            
                          <option value="" id="CatId" class="form-control" >Select Category</option>
                          <?php 
                          echo $str;
                          ?>
                          </select>
                          <br>
                          <label>Name</label>
                          <select id="animalName" name="animal_name">
                          <option value="" class="form-control" >Select Name</option>
</select>
<!-- // $sql1="SELECT * from animal_category";
// $result1=mysqli_query($conn, $sql1)or die("query unscessful.");
// if(mysqli_num_rows($result1)>0){
//   echo "<select name='animal' style='width:100%;'>"; 
//   while($row1 = mysqli_fetch_assoc($result1)){
//     if($row['animal_id'] == $row1['animal_id']){
// $select = "selected";
//     }else{
// $select ="";
//     }
//   echo "'<option {$select} value='{$row1['name']}'>{$row1['name']} </option>"; 
//   }
// } -->


     
                                <!-- <input type="text" name="animal_category" class="form-control" /> -->
                              </div>
                            </div>
                          </div>
                          <br><br>
                            <!-------------         Description   ---------------------->
                         
                            <!-- <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Description</label>
                              <div class="col-sm-9">
                              <input type="textarea" class="form-control" name="animal_description" />
                             
                              </div>
                            </div>
                          </div>
                            </div>
                            <br> -->
                            <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Description</label>
                              <div class="col-sm-9">
                              <input type="textarea" name="animal_description" class="form-control""/>
                             
                              </div>
                            </div>
                          </div>
                        </div>
                            <!-------------      Image   ---------------------->
                      
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Image</label>
                              <div class="col-sm-9"">
                                                      
                              <!-- <label for="formFile" class="form-label">Default file input example</label>
                              -->  <input class="form-control" type="file" id="formFile" name="image"> 
                          
                              </div>                          
                            </div>
                          </div>
                          <br>

                        






                          <!------------    Quantity             ------------>

                          <!-- <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label" aria-disabled="true">Quantity</label>
                              <div class="col-sm-9">
                              <input type="textarea" class="form-control" name="animal_quantity" />
                             
                              </div>
                            </div>
                          </div>
                            </div>
                            <br> -->
                           
                                              
    <!---------------------       status            --------------------------------->
   
    <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label" aria-disabled="true">Status</label>
                              <div class="col-sm-9">
                              <select name="status" style="height:40px; width:100%;" id="status">
             <option value="">Select Status </option>    
             <option value="0">Not Available</option>
                      <option value="1">Available</option>
                     
                     </option>  
                     </select>  
                              </div>
                            </div>
                          </div>
                            </div>
                            <br>
                        </div>
                        <button class="btn btn-primary w-50 m-2" type="submit" name="add">ADD</button>
                        <button class="btn btn-outline-primary w-50 m-1" type="submit" name="cancel">Cancel</button>
                               
                                  
                        <br><br>
                      </form>
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

      <script type="text/javascript">
      $(document).ready(function(){
        function loadData(categorytype, category_id){
          //var cid= $("#CatId").val();
          // var Category_id= 1;
          // Console.log(category_id);
          $.ajax({
            url : "LoadCategoryName.php",
            type : "POST",
            data : {categorytype: categorytype, id: category_id},
            success :function(data){
            if(categorytype == "categoryData"){
           $("#animalName").html(data);
          }else{

          }
        // $("#category").append(data);
        }
          });
        }
      // loadData();

      $("#category").on("change",function(){
        var category=$("#category").val();


        loadData("categoryData",category);
      })
      });
    </script>
    </form>
</body>

</html>