<?php
include('connection.php');
$con= mysqli_connect($servername,$username,$password,$db);  

$id = $_GET["oid"];
$sql = "DELETE  FROM officer where officer_id='$id'";
$result=mysqli_query($con,$sql);
if($result){
    header("location:manageOfficer.php");
}

?>