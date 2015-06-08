<?php
//projson
session_start();
if(!isset($_SESSION['Uid']))
{
 header("location:http://localhost/Projectx/Finalised_work/index.html");
}
else
{
	$pid=$_GET['pid'];
	//$pid=30;
	$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="pcomet"; // Database name 
$tbl_name="project"; // Table name 
//$pid=22;
 //Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn)or die("cannot select DB");

$sql="SELECT * FROM $tbl_name WHERE Project_id='$pid'";
$result=mysql_query($sql);
$info = mysql_fetch_array($result);

echo json_encode($info);
}


?>