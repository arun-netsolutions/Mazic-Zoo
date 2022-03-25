<!DOCTYPE html>
<html>
<head>
<title>Animal Kingdom Zoo | Gallery</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
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
    <style>
      .card{
        box-shadow: 0px 2px 10px rgba(0,0,0,0.5);
         }
      .ribbon {
 font-size: 16px !important;
 /* This ribbon is based on a 16px font side and a 24px vertical rhythm. I've used em's to position each element for scalability. If you want to use a different font size you may have to play with the position of the ribbon elements */

 width: 50%;
    
 position: relative;
 background: #ba89b6;
 color: #fff;
 text-align: center;
 padding: 1em 2em; /* Adjust to suit */
 margin: 2em auto 3em; /* Based on 24px vertical rhythm. 48px bottom margin - normally 24 but the ribbon 'graphics' take up 24px themselves so we double it. */
}
.ribbon:before, .ribbon:after {
 content: "";
 position: absolute;
 display: block;
 bottom: -1em;
 border: 1.5em solid #986794;
 z-index: -1;
}
.ribbon:before {
 left: -2em;
 border-right-width: 1.5em;
 border-left-color: transparent;
}
.ribbon:after {
 right: -2em;
 border-left-width: 1.5em;
 border-right-color: transparent;
}
.ribbon .ribbon-content:before, .ribbon .ribbon-content:after {
 content: "";
 position: absolute;
 display: block;
 border-style: solid;
 border-color: #804f7c transparent transparent transparent;
 bottom: -1em;
}
.ribbon .ribbon-content:before {
 left: 0;
 border-width: 1em 0 0 1em;
}
.ribbon .ribbon-content:after {
 right: 0;
 border-width: 1em 1em 0 0;
}

    </style>
</head>
<body>
  <form name="" action="animaldetails.php" enctype="multipart/form-data" method="POST">
<?php
include 'user-header.php';

?> 
  
  <h1 class="ribbon">
   <strong class="ribbon-content">CATEGORIES</strong>
</h1>
<div class="container">
<div class="row" >
  <div class="col-sm-3">
  <div class="card" style="width: 15rem;">
  <img class="card-img-top" src="users/images/mammal-logo.jpg" alt="Card image cap"style="height: 211px;width:222px;">
  <div class="card-body">
    <h5 class="card-title">Mammal</h5>
    <input type="hidden" value="1" name="catid1">
   <input type="submit" name="mammal" value="view" class="btn btn-info rounded-pill m-2"/>
    
  </div>
</div>

  </div>

  <div class="col-sm-3">
  <div class="card" style="width: 15rem;">
  <img class="card-img-top" src="users/images/birds-logo.jpg" alt="Card image cap" style="height: 211px;width:222px;">
  <div class="card-body">
    <h5 class="card-title">Bird</h5>
    <input type="hidden" value="2" name="catid2">
   <input type="submit" name="bird" value="view" class="btn btn-info rounded-pill m-2"/>
      </div>
</div>

  </div>

  <div class="col-sm-3">
  <div class="card" style="width: 15rem;">
  <img class="card-img-top" src="users/images/reptiles.jpg" alt="Card image cap" style="height: 211px;width:222px;">
  <div class="card-body">
    <h5 class="card-title">Reptile</h5>
    <input type="hidden" value="3" name="catid3">
   <input type="submit" name="reptile" value="view" class="btn btn-info rounded-pill m-2" />
     </div>
</div>

  </div>

<div class="col-sm-3">
  <div class="card" style="width: 15rem;">
  <img class="card-img-top" src="users/images/fish.jpg" alt="Card image cap"style="height: 211px;width:222px;">
  <div class="card-body">
    <h5 class="card-title">Fish</h5>
    <input type="hidden" value="4" name="catid4">
   <input type="submit" name="fish" value="view" class="btn btn-info rounded-pill m-2" />
     </div>
</div>

  </div>


</div>
<br>
<!---------------------------------------  2nd Row   -------------------------------------->
<div class="row">
  

  <div class="col-sm-3">
  <div class="card" style="width: 15rem;">
  <img class="card-img-top" src="users/images/amphibians.jpg" alt="Card image cap"style="height: 211px;width:222px;">
  <div class="card-body">
    <h5 class="card-title">Amphibia</h5>
    <input type="hidden" value="5" name="catid5">
   <input type="submit" name="Amphibia" value="view"class="btn btn-info rounded-pill m-2" />
    </div>
</div>

  </div>

  <div class="col-sm-3">
  <div class="card" style="width: 15rem;">
  <img class="card-img-top" src="users/images/bug.jpg" alt="Card image cap" style="height: 211px;width:222px;">
  <div class="card-body">
    <h5 class="card-title">Bug</h5>
    <input type="hidden" value="6" name="catid6">
   <input type="submit" name="bug" value="view" class="btn btn-info rounded-pill m-2" />
   </div>
</div>

  </div>

  <div class="col-sm-3">
  <div class="card" style="width: 15rem;">
  <img class="card-img-top" src="users/images/Invertbrate.jpg" alt="Card image cap" style="height: 211px;width:222px;">
  <div class="card-body">
    <h5 class="card-title">Invertbrate</h5>
    <input type="hidden" value="7" name="catid7">
   <input type="submit" name="invert" value="view" class="btn btn-info rounded-pill m-2" />
  </div>
</div>

  </div>



</div>
</div>


<?php 
include 'user-footer.php';
?> 
 </form>
</body>
</html>



