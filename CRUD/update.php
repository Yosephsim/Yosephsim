<?php
include 'connection.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
  $id=$row['id'];
  $name=$row['name'];
  $email=$row['email'];
  $mobile=$row['mobile'];
  $password=$row['password'];

if(isset($_POST['submit']))
{  
  $name=$_POST['name']; 
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="update  `crud` set id= '$id' ,name='$name',email='$email',
  mobile='$mobile',password='$password' where id=$id";


  $result=mysqli_query($con,$sql);   

  if($result)
  {
  echo"data updated succesfully";
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
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
    <form method="post" autocomplete="on">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Please enter name" 
            name="name" value="<?php echo $name; ?>">
        </div>
        <div>
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Please enter email" 
            name="email" value="<?php echo $email; ?>">
        </div>
        <div>
            <label>Mobile</label>
            <input type="text" class="form-control" placeholder="Please enter mobile" name="mobile" 
            value="<?php echo $mobile; ?>">
        </div>
        <div>
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Please enter password" name="password" 
            value="<?php echo $password; ?>">
        </div>
        <button type="submit" class="mt-5" name="submit">Update</button>
    </form>
</div>
</body>
</html>