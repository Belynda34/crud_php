<?php
$servername='localhost';//
$username='root';
$password='';
$dbname='crud';
$conn=new mysqli($servername,$username,$password,$dbname);
if(!$conn){
// exit('Connection failed:'.$conn->connect_error);
echo'sorry';
}
?>