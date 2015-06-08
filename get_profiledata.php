<?php
session_start();


$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="pcomet"; // Database name 
$tbl_name="user"; // Table name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysqli_select_db($conn,"$db_name")or die("cannot select DB");

// username and password sent from form 
//$myUid=$_SESSION['Uid']; 

$myUid=2;

$sql="SELECT * FROM $tbl_name WHERE Uid='$myUid'";
$result=mysqli_query($conn,$sql);
$jsondata= mysqli_fetch_array($result);
$jsond=$jsondata['Name'];
$jsond=json_encode($jsond);
//echo $myUid;
echo $jsond;


?>