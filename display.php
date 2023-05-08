<?php
include 'connect.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/
bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <button class="btn btn-primary my-5"><a href="connect.html" class="text-light">Add user</a></button>
 <a href="pdf.php" class="btn btn-dark mb-3">To pdf</a>
  <a href="excel.php" class="btn btn-dark mb-3">To excel</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    
 <th scope="col">Gender</th>
 <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
<?php
$sql="select * from `Users`";
$result=mysqli_query($conn,$sql);
if($result){
 while( $row=mysqli_fetch_assoc($result)){
 $id=$row['id'];
$fname=$row['fname'];
$email=$row['email'];
$gender=$row['gender'];
echo '<tr>
  <th scope="row">'.$id.'</th>
  <td>'.$fname.'</td>
  <td>'.$email.'</td>
  
  <td>'.$gender.'</td>
   <td>
<button class="btn btn-primary"><a href="Update.php? updateid='.$id.' " class="text-light">Update</a></button>


<button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
</td>
</tr>';
}
}
?>





  </tbody>
</table>
</body>
</html>