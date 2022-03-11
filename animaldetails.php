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
    <form enctype="multipart/form-data">
<div id="page">
  <div id="header"> <a href="#" id="logo"><img src="" alt=""/></a>
    <ul id="links">
      <li class="first">
        <h2><a href="live.html">Live</a></h2>
        <span>Have fun in your visit</span> </li>
      <li>
        <h2><a href="#">Love</a></h2>
        <span>Donate for the animals</span> </li>
      <li>
        <h2><a href="#">Learn</a></h2>
        <span>Get to know the animals</span> </li>
    </ul>
    <a href="#" id="button">Buy tickets / Check Events</a>
    <ul id="navigation">
      <li id="link1"><a href="index.html">Home</a></li>
      <li id="link2"><a href="zoo.html">The Zoo</a></li>
      <li id="link3"><a href="info.html">Visitors Info</a></li>
      <li id="link4"><a href="tickets.html">Tickets</a></li>
      <li id="link5"><a href="events.html">Events</a></li>
      <li id="link6" class="selected"><a href="gallery.html">Gallery</a></li>
      <li id="link7"><a href="contact.html">Contact Us</a></li>
    </ul>
  </div>   
  
  <h1 class="ribbon">
   <strong class="ribbon-content">Images</strong>
</h1>
<div class="container">
<div class="row" >
<?php
include 'dbcon.php';

if(isset($_POST["mammal"])){
    
    $id=$_POST["catid1"];
  
    $sql = "SELECT * FROM animal_details where animal_category={$id}";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo' <div class="col-sm-3">
        <div class="card" style="width: 15rem;">
        <img class="card-img-top"  src="img/'.$row["animal_image"].'"  alt="Card image cap"style="height: 211px;width:222px;">
        <div class="card-body">
          <h5 class="card-title">'.$row['animal_name'].'</h5>
         
          <p>'.$row["animal_description"].'</p>
        </div>
      </div>
      
        </div>';
      
      
      
      }
    } else {
      echo "0 results";
    }
    $conn->close();

}

elseif(isset($_POST["bird"])){
    $id=$_POST["catid2"];
  
    $sql = "SELECT * FROM animal_details where animal_category={$id}";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      
      while($row = $result->fetch_assoc()) {
        echo' <div class="col-sm-3">
        <div class="card" style="width: 15rem;">
        <img class="card-img-top"  src="img/'.$row["animal_image"].'"  alt="Card image cap"style="height: 211px;width:222px;">
        <div class="card-body">
          <h5 class="card-title">'.$row['animal_name'].'</h5>
         
          <p>'.$row["animal_description"].'</p>
        </div>
      </div>
      </div>';
      
        
      
      
      
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    echo'</div>';
}
elseif(isset($_POST["reptile"])){
    $id=$_POST["catid3"];
  
    $sql = "SELECT * FROM animal_details where animal_category={$id}";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      
      while($row = $result->fetch_assoc()) {
        echo' <div class="col-sm-3">
        <div class="card" style="width: 15rem;">
        <img class="card-img-top"  src="img/'.$row["animal_image"].'"  alt="Card image cap"style="height: 211px;width:222px;">
        <div class="card-body">
          <h5 class="card-title">'.$row['animal_name'].'</h5>
         
          <p>'.$row["animal_description"].'</p>
        </div>
      </div>
      </div>';
      
        
      
      
      
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    echo'</div>';
}

elseif(isset($_POST["fish"])){
    $id=$_POST["catid4"];
  
    $sql = "SELECT * FROM animal_details where animal_category={$id}";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      
      while($row = $result->fetch_assoc()) {
        echo' <div class="col-sm-3">
        <div class="card" style="width: 15rem;">
        <img class="card-img-top"  src="img/'.$row["animal_image"].'"  alt="Card image cap"style="height: 211px;width:222px;">
        <div class="card-body">
          <h5 class="card-title">'.$row['animal_name'].'</h5>
         
          <p>'.$row["animal_description"].'</p>
        </div>
      </div>
      </div>';
      
        
      
      
      
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    echo'</div>';
}


elseif(isset($_POST["Amphibia"])){
    $id=$_POST["catid5"];
  
    $sql = "SELECT * FROM animal_details where animal_category={$id}";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      
      while($row = $result->fetch_assoc()) {
        echo' <div class="col-sm-3">
        <div class="card" style="width: 15rem;">
        <img class="card-img-top"  src="img/'.$row["animal_image"].'"  alt="Card image cap"style="height: 211px;width:222px;">
        <div class="card-body">
          <h5 class="card-title">'.$row['animal_name'].'</h5>
         
          <p>'.$row["animal_description"].'</p>
        </div>
      </div>
      </div>';
      
        
      
      
      
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    echo'</div>';
}

elseif(isset($_POST["bug"])){
    $id=$_POST["catid6"];
  
    $sql = "SELECT * FROM animal_details where animal_category={$id}";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      
      while($row = $result->fetch_assoc()) {
        echo' <div class="col-sm-3" style="margin-left:65px;">
        <div class="card" style="width: 15rem;">
        <img class="card-img-top"  src="img/'.$row["animal_image"].'"  alt="Card image cap"style="height: 211px;width:222px;">
        <div class="card-body">
          <h5 class="card-title">'.$row['animal_name'].'</h5>
         
          <p>'.$row["animal_description"].'</p>
        </div>
      </div>
      </div>';
      
        
      
      
      
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    echo'</div>';
}
elseif(isset($_POST["invert"])){
    $id=$_POST["catid7"];
  
    $sql = "SELECT * FROM animal_details where animal_category={$id}";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      
      while($row = $result->fetch_assoc()) {
        echo' <div class="col-sm-3">
        <div class="card" style="width: 15rem;">
        <img class="card-img-top"  src="img/'.$row["animal_image"].'"  alt="Card image cap"style="height: 211px;width:222px;">
        <div class="card-body">
          <h5 class="card-title">'.$row['animal_name'].'</h5>
         
          <p>'.$row["animal_description"].'</p>
        </div>
      </div>
      </div>';
      
        
      
      
      
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    echo'</div>';
}




?>





</div>



  <div id="footer">
    <div> <a href="#" class="logo"><img src="images/animal-kingdom.jpg" alt=""/></a>
      <div>
        <p>Ellentesque habitant morbi tristique senectus et 0000</p>
        <span>285 067-39 282 / 5282 9273 999</span> <span>email@animalkingdomzoo.com</span> </div>
      <ul class="navigation">
        <li><a href="index.html">Home</a></li>
        <li><a href="tickets.html">Tickets</a></li>
        <li><a href="zoo.html">The Zoo</a></li>
        <li><a href="events.html">Events</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="gallery.html">Gallery</a></li>
      </ul>
      <ul>
        <li><a href="#">Live : Have fun in your visit</a></li>
        <li><a href="#">Love : Donate for the animals</a></li>
        <li><a href="#">Learn : Get to know the animals</a></li>
      </ul>
      <p>Copyright &copy; <a href="#">Domain Name</a> - All Rights Reserved | Template By <a target="_blank" href="http://www.freewebsitetemplates.com/">FreeWebsiteTemplates.com</a></p>
    </div>
  </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div>
    </form>
</body>
</html>



