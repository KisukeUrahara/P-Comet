<?php
session_start();
if(!isset($_SESSION['Uid']))
{
 header("location:http://localhost/Projectx/Finalised_work/index.html");
}
else
{
	$pid=$_GET['pid'];
	$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="pcomet"; // Database name 
$tbl_name="project"; // Table name 

 //Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn)or die("cannot select DB");

$sql2="SELECT * FROM works_on WHERE pid='$pid'";
$sresult=mysql_query($sql2);
while($h=mysql_fetch_array($sresult)){
	$out[]=$h;
	}
	$jsond=json_encode($out);
	

echo $jsond;
}

?>