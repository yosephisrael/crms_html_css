<?php
include('connection.php');
$con= mysqli_connect($servername,$username,$password,$db);  

$id = $_GET["cid"];
$sql = "DELETE  FROM criminal where cid='$id'";
$result=mysqli_query($con,$sql);
if($result){
    header("location:criminal.php");
}

?>