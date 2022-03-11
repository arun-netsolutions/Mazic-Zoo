<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<script>
$(function(){
$('#myModal').modal({
keyboard:false
});
});


</script>
<style>
  .modal-content{
    text-align: center;
vertical-align: middle;
line-height: 90px;
  }
  
</style>
</head>
<body>
<form name="" method="POST" action="modalLogin.php">
<div class="container" >
  <!-- <h2>Select One</h2>
   Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">New User</button>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Alreday Registerd</button> --> 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <a   button type="submit" class="btn btn-info btn-lg" href="newuseradd.php">New User</button></a>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Alreday Registerd</button>

          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alreday User</h4>
        </div> -->
        <!-- <div class="modal-body">
         <label>Email</label>
         <input type="email" name="lemail" class="form-control">
         <label>Password</label>
         <input type="password" name="lpassword" class="form-control">
        </div>
        <div class="modal-footer">
            <input type="submit" name="login" class="btn btn-success" value="login"></button>
          <button type="button" class="btn btn-default" data-target="#">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>
  <!-- Modal1 -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
     
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div> 
        <div class="modal-body">
         <label>User Name</label>
         <?php
         include 'dbcon.php';
         $sql1="SELECT * FROM users";
$result1=mysqli_query($conn, $sql1)or die("query unscessful.");
if(mysqli_num_rows($result1)>0){
  echo "<select name='user_id' style='width:100%; height:40px;'>"; 
  while($row1 = mysqli_fetch_assoc($result1)){
  echo "'<option value='{$row1['user_id']}'>{$row1['first_name']}({$row1['email']})</option>"; 
  }
}
  ?>)
  </div>
        <div class="modal-footer">
            <input type="submit" name="login" class="btn btn-success" value="login"></button>
          <button type="button" class="btn btn-default" data-target="#">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  </div>
</div>
</form>
</body>
</html>

