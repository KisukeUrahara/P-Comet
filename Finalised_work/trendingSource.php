<?php
include 'constants.php';
$tbl_name="request"; // Table name 
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn)or die("cannot select DB");
//$sql="SELECT * FROM $tbl_name r,project p,user u WHERE r.pid=Project_id AND p.admin_id='".$_SESSION['Uid']."'AND r.uid=u.Uid AND r.status=1";
$sql="SELECT u.Name as admin,project_name,p.Stream as stream,pregion,vidurl,tsp,p.Description as description
FROM project p,user u
where Admin_id=Uid
LIMIT 4
";
$info=mysql_query($sql);
while($h=mysql_fetch_array($info))
{ $out[]=$h;
}
//$result= mysqli_fetch_array($info);
echo json_encode($out);//encoding into json.
?>