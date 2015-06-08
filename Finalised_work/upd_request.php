<?php 
include 'constants.php';

 // Database name 
$tbl_name="request"; // Table name 
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn)or die("cannot select DB");
$pid=$_GET['pid'];
$uid=$_GET['Uid'];
//$pid=30;
//$uid=12;
$sql="INSERT INTO request (uid,pid) VALUES ('$uid','$pid')";
  if (!mysql_query($sql))
  {
	die('Error lmao:' . mysql_error());
  }
  header("location:http://localhost/Projectx/Finalised_work/newsfeed.php");
  ?>