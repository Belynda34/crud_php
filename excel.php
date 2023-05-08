<?php
include 'connect.php';
$result =$conn->query("SELECT * FROM Users");
if($result->num_rows > 0){
$delimiter = ",";
$filename= "Users.data_" . date('Y-m-d') ."csv";
$f =fopen('php://memory','w');
$fields =array('id','fname','email','gender');
fputcsv($f,$fields,$delimiter);
while($row =$result->fetch_assoc()){
$lineData =array($row['id'],$row['fname'],$row['email'],$row['gender']);
fputcsv($f,$lineData,$delimiter);
}
fseek($f,0);
header('Content-Type:text/csv');
header('Content-Disposition:attachment; filename='.$filename.';');
fpassthru($f);
exit;
}
header("Location:display.php");
exit;
?> 