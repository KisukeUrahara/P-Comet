<?php

session_start();
if(!isset($_SESSION['Uid']))
{
 header("location:http://localhost/Projectx/Finalised_work/index.html");
}
else
{
	$uid=$_SESSION['Uid'];
	//$uid=40;
	$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="pcomet"; // Database name 
$tbl_name="project"; // Table name 
//$pid=22;
 //Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn)or die("cannot select DB");

$sql="SELECT * FROM $tbl_name WHERE Admin_id='$uid'";

	$sresult=mysql_query($sql);
	if(mysql_num_rows($sresult)==0) echo '{"status":"1"}';
	else{
while($h=mysql_fetch_array($sresult)){
	$out[]=$h;
   
}
	
		
$jsond=json_encode($out);

echo $jsond;
}
}	

?>