<?PHP
$con=new mysqli('localhost','root','','crudoperation' );


     if ($con)
      {
       // echo'connection is seccesfull' ; 
       }
     else
     {
     die(mysqli_error($con));
      }
?>