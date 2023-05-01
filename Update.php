<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * FROM Users where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$fname=$row['fname'];
$email=$row['email'];
$password=$row['password'];
$gender=$row['gender'];

if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$sql ="update Users set id='$id',fname='$fname',email='$email',password='$password',gender='$gender' where id=$id";
$result=mysqli_query($conn,$sql);
if($result){
//echo "Updated successfully";
header('location:display.php');
}else{
die(mysqli_error($conn));
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=
shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/
bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Crud Operations</title>
  </head>
  <body>
    <div class="container">

<form method="post" >
 <div class="form-group">
   <label for="exampleInputFname">First_Name</label>
   <input name="fname" class="form-control" id="exampleInputFname" 
placeholder="Enter your first name">
 </div>
 <!--<div class="form-group">
   <label for="exampleInputLname">Last_Name</label>
   <input name="lname" class="form-control" id="exampleInputLname" 
placeholder="Enter your last name">
 </div>-->
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" class="form-control" id="exampleInputEmail1" 
aria-describedby="emailHelp" placeholder="Enter your email">
    <small id="emailHelp" class="form-text text-muted">We'll never sh
your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" 
id="exampleInputPassword1" placeholder=" Enter your Password">
  </div>
 <div class="form-group">
   <label for="exampleInputGender">Gender</label>
   <input name="gender" class="form-control" id="exampleInputGender" 
placeholder="Gender">
 
<div>
  <button name="submit" class="btn btn-primary">Update</button>
</div>

</form>
</div>
  </body>
</html>