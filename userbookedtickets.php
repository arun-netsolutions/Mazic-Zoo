<?php


?>
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
      <h2 style="text-align: center;">your tickets</h2>
           <br><br>
           <table border="3">
                            <thead>

                                <tr class="text-dark">
                                    
                                    <th scope="col" Name="first_name">First Name</th>
                                    <th scope="col" Name="Email">Email</th> 
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
                                    
                                    <td>".$row["first_name"]."</td>
                                    <td>".$row["email"]."</td>
                                    <td>".$row["phone"]."</td>
                                    <td>".$row["quantity"]."</td>
                                    <td>".$row["adult"]."</td> 
                                    <td>".$row["child"]."</td>
                                    <td>".$row["date"]."</td>";
                                  



                          echo "<td><div class='dropdown'>
                         

                              <a href='ticketprint.php?tid=$row[user_id]' name='print' class='dropdown-item'>Print</a>
                                      </div>          
                                    </td></tr>";
                                }   


                           
                                ?>
                                
                            </tbody>
                          
                             
                              
                                           
                        </table>

          
        
    </div>
  </div>
 <?php
 
 include 'user-footer.php';
 ?>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>

?>