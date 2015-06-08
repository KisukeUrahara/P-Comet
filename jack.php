<?php
session_start();
 // Database name 
 include 'constants.php';
$tbl_name="user"; // Table name 
$conn=mysqli_connect("$host", "$username", "$password","pcomet")or die("cannot connect"); 
$sql="SELECT * FROM $tbl_name WHERE Name='".$_SESSION['myusername']."'";
$info=mysqli_query($conn,$sql);
$result= mysqli_fetch_array($info);
echo json_encode($result);//encoding into json.
?>
