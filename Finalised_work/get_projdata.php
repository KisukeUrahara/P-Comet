<?php 
include 'constants.php';

  
$tbl_name="project"; // Table name 
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn)or die("cannot select DB");
$suid=$_GET['suid'];
//$suid=41;
$sql1="select * from works_on where uid='$suid'";
$result1=mysql_query($sql1);

while($row=mysql_fetch_array($result1))
{
	$sql="SELECT * from project WHERE Project_id='".$row['pid']."'";
$result=mysql_query($sql);
$out[]=mysql_fetch_array($result);
   
}
	
		
$jsond=json_encode($out);

echo $jsond;
?>	
