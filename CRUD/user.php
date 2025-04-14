<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

$sql="INSERT INTO `crud` (name,email,mobile,password) 
VALUES ('$name','$email','$mobile','$password')";

$result=mysqli_query($con,$sql);

if($result)
{
//echo"data inserted succesfully";

// Ensure no output before this point
header('Location: display.php');
exit; // Always use exit after header to stop further execution


}
else
{

  die(mysqli_error($con));
 }


}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   <div class="container my-5">
    <form method="post" autocomplete="on">
  <div class="form-group">
    <label >name</label>
    <input type="text" class="form-control" placeholder="please enter name" name="name">
  </div>
  <div>
  <label >email</label>
    <input type="email" class="form-control" placeholder="please enter email" name="email">
  </div>
 <div>
  <label >mobile</label>
    <input type="text" class="form-control" placeholder="please enter moblie" name="mobile">
  </div>
  <div>
  <label >password</label>
    <input type="password" class="form-control" placeholder="please enter password" name="password">
  </div>
  <button type="submit" class="mt-5" name="submit" >Submit</button>
  </div>
</form>
  </body>
</html> 