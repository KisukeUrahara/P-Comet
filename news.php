<?php
session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="pcomet"; // Database name 
$tbl_name="project"; // Table name 

// Connect to server and select databse.
$conn1=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn1)or die("cannot select DB");


$str1="select * from $tbl_name where tsp < NOW() ORDER BY tsp DESC LIMIT 10";


	
	$sresult=mysql_query($str1);
	//if(!$result)
	//$hist = array();
	
while($h=mysql_fetch_array($sresult))
{
	$out[]=$h;
}		
echo json_encode($out);
//echo $jsond;
?>