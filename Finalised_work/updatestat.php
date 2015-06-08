<?php
session_start();
 // Database name 
 include 'constants.php';
 
 $conn1=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn1)or die("cannot select DB");

$stat=$_POST['statusbro'];
$stat=intval($stat);

$sql="UPDATE project SET stat= '$stat' WHERE Project_id='".$_GET['pid']."'";
if (!mysql_query($sql))
  {
	die('Error lmao:' . mysql_error());
  }
  header("location:http://localhost/Projectx/Finalised_work/newsfeed.php");
  
  ?>