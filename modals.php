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
backdrop:'static',
keyboard:false
});
});


</script>
</head>
<body>
<form name="" method="POST" action="modalLogin.php">
<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">New User</button>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Alreday Registerd</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New User</h4>
        </div>
        <div class="modal-body">
         <label>Email</label>
         <input type="text" name="email" class="form-control">
         <label>Password</label>
         <input type="password" name="password" class="form-control">
        </div>
        <div class="modal-footer">
            <button type="submit" name="login" class="btn btn-success" >Login</button>
          <button type="button" class="btn btn-default" data-target="#">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</form>
</body>
</html>
