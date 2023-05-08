<?php
include 'connect.php';
if($_SERVER['REQUEST_METHOD']== 'POST'){
$email=$_POST["email"];
$password=sha1($_POST["password"]);

 $result=$conn->query("SELECT * FROM Users WHERE email='$email' AND password='$password'"  );

if(!$result){
 echo "Error:".$mysqli->error;
 exit();
}

if($result){
//header("location:index.php");

session_start();
$_SESSION["email"]=$email;
header("location:display.php");
exit();
}else{
header("Location:display.php");
exit();
}
}
?>


<html>
<head>
<title>Login Page</title>
<head>
<body>
<h2>Login Form</h2>
<form action="" method="POST">
<label>Username:</label>
<input type="text" name="username"><br><br>
<label>Password:</label>
<input type="password" name="password"><br><br>
<input type="submit" name="submit" value="login">
</form>
</body>
</html>
