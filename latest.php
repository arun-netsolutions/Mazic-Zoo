

<!DOCTYPE html>
<html>
<head>
<title>Mazic Zoo | New</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="users/css/style.css" type="text/css" />
</head>

<body>
<?php
include 'user-header.php';
?>
  <div id="content">
    <div id="events">
      <h2 style="text-align: center;">Animals Joined Recently</h2>
           <br><br>
                <?php
                include 'dbcon.php';
                $sql1="SELECT * FROM animal_details ORDER BY animal_id DESC Limit 3 ";
                $res=$conn->query($sql1);
                if(!$res){
                die("invalid query: ".$conn->error);
                }
                while($row=$res->fetch_assoc()){
                echo '  <ul>
                <li>
                <div><img src="img/'.$row["animal_image"].'" style=width:265px; height:211px; />
                </div>
                <h4><a href="#">'.$row["animal_name"].'</a></h4>
                <p>'.$row["animal_description"].'</p>
              </li>
              </ul>';
    
                }
                ?>


          
        <!-- <li>
          <div><a href="#"><img src="users/images/event-lion.jpg" alt=""/></a></div>
          <h4><a href="#">This website template has been designed by freewebsite templates.com for you, for free.</a></h4>
          <p>Date : Jan 1 - 30 2011</p>
          <p>This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us</p>
        </li>
        <li>
          <div><a href="#"><img src="users/images/event-dolphin.jpg" alt=""/></a></div>
          <h4><a href="#">Suspendisse nunc nibh, commodo Nulla ac accumsan ante</a></h4>
          <p>Date : Feb 1 - 30 2011</p>
          <p>Looking for more templates? Just browse through all our Free Website Templates and find what you’re looking for. But if you don’t find any website template you can use, you can try our Free Web Design service and tell us all about it. Maybe you’re looking for something different, something special. And we love the challenge of doing something different and something special.</p>
        </li>
        <li>
          <div><a href="#"><img src="users/images/event-gorilla.jpg" alt=""/></a></div>
          <h4><a href="#">Cras tempus varius mauris, et dictum neque malesuada vitae. Cras sit amet orci at magna ornare porta nec et neque. Cras congue nibh eu felis dictum non aliquam elit scelerisque</a></h4>
          <p>Date : Feb 1 - 30 2011</p>
          <p>If you’re experiencing issues and concerns about this website template, join the discussion on our Forum and meet other people in the community who share the same interests with you.</p>
        </li>
      </ul> -->
    </div>
  </div>
 <?php
 
 include 'user-footer.php';
 ?>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
