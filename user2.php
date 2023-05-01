<?php
include 'connect.php';
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$email=$_POST['email'];
$password=MD5($_POST['password']);
$gender=$_POST['gender'];
$sql="INSERT INTO Users(fname,Email,Password,Gender)
values('$fname','$email','$password','$gender')";
$result=$conn->query($sql);
if($result){
//echo  "Data inserted successfully";
header('location:display.php');
}else{
die(mysqli_error($conn));
}
}
?>