<?php
session_start();
 // Database name 
 include 'constants.php';
$tbl_name="invite"; // Table name 
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn)or die("cannot select DB");
//$conn=mysqli_connect("$host", "$username", "$password","pcomet")or die("cannot connect"); 
$sql="SELECT * FROM $tbl_name r,project p,user u WHERE r.pid=Project_id AND r.ruid=".$_SESSION['Uid']." AND r.auid=u.Uid";
$info=mysql_query($sql);
//echo $sql;

//$h=mysql_fetch_array($info);
while($h=mysql_fetch_array($info))
{ $out[]=$h;

}
//$result= mysqli_fetch_array($info);
echo json_encode($out);//encoding into json.
//echo $h['uid'];
?>