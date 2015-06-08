<?php
session_start();
include 'constants.php';
 
$tbl_name="project"; // Table name 

// Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn)or die("cannot select DB");

// username and password sent from form 
$myUid=$_SESSION['Uid']; 
//$myUid=5;


$sql="SELECT * FROM project WHERE Admin_id='$myUid'";
//echo $sql;
$info=mysql_query($sql);

//$result= mysql_fetch_array($info);
//echo $result['project_name'];
while($h=mysql_fetch_array($info)){
$out[]=$h;
   
}
	if($out==null) 
	{ 
		echo json_encode(array("screwu" => 'screwu'));
	}
	else{
		echo json_encode($out);
}	
?>