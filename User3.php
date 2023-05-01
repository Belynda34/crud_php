<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * FROM `Users` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$fname=$row['fname'];
$email=$row['email'];
$password=$row['password'];
$gender=$row['gender'];

if(isset($_PSOT['submit'])){
$fname=$_POST['fname'];
$email=$_POST['email'];
$password=$_POST
['password'];
$gender=$_POST['gender'];

$sql ="update `Users` set id='$id',fname='$fname',email='$email',password='$password',gender='$gender' where id=$id";
$result=mysql_query($conn,$sql);
if($result){
//echo "Updated successfully";
header('location:display.php');
}else{
die(mysqli_error($conn));
}
}




?>