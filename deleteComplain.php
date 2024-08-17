<?php
include('connection.php');
$con= mysqli_connect($servername,$username,$password,$db);  

$id = $_GET["id"];
$sql = "DELETE  FROM complain where id='$id'";
$result=mysqli_query($con,$sql);
if($result){
    header("location:record.php");
}

?>