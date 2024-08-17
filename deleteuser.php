<?php
include('connection.php');
$con= mysqli_connect($servername,$username,$password,$db);  

$id = $_GET["username"];
$sql = "DELETE  FROM user where username='$id'";
$result=mysqli_query($con,$sql);
if($result){
    header("location:manageUsers.php");
}
?>