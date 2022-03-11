
<?php
  
  include 'dbcon.php';
  $sql="SELECT distinct * FROM `animal_categories`";
 $query=mysqli_query($conn,$sql) or die("Query Unsuccessful");
 $str="";
 while($row=mysqli_fetch_assoc($query)){
     $str .= "<option value='{$row['category_id']}'>{$row['name']}</option>";
 
 }

    

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
    <form method="POST" action="addnewanimal1.php">
    <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            
                            <h6 class="mb-4">Add Animal</h6>
                           
                            
                                <br>
                                <div class="box">
                                <label>Category</label>
                            <select id="category" name="animal_category[]"style="height:40px; width:100%;">
                            
                            <option value="" id="CatId" class="form-control" >Select Category</option>
                            <?php 
                            echo $str;
                            ?>
                            </select>
                            
                            <div class="str">

                                <ul><label>Name:</label>
                                <input type="text" class="form-control" name="name[]" />


                                </div>
                                <a href="#">Add more..</a>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary w-50 m-2" type="submit" name="add">ADD</button>
                        <button class="btn btn-outline-primary w-50 m-1" type="submit" name="cancel">Cancel</button>
                       
                        
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Template Javascript -->
 
    <script src="js/main.js"></script>
    </form>
</body>
<footer>
<?php 
include 'footer.php';
?>
</footer>
</html>

              
      <script type="text/javascript">


      $(document).ready(function(){
        $("body").on("click", "a", function() {
    $("ul:last").clone().appendTo(".str").find(":text").val("");
});


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