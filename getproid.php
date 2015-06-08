<?php
session_start();


$username = "root";
$password = "";
$hostname = "localhost";
$dbname= "pcomet";

//echo $_GET["pname"];
//$pname1=$_GET['pname1'];
$admin_name=$_SESSION['myusername'];
//$admin_id=$_SESSION['Uid'];
//$pstream=$_POST['pstream'];
//$psummary=$_POST['psummary'];

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password,$dbname) or die("Unable to connect to MySQL shit!");

  $selected = mysql_select_db($dbname,$dbhandle) 
   or die("Could not select examples");
   $sql8=" SELECT MAX(Project_id) from project";
	$result=mysql_query($sql8);
$info = mysql_fetch_array($result);
$pname1=$info['MAX(Project_id)'];
echo $pname1;
  /*$sql="select * from project WHERE project_name='$pname1'";
  $result=mysql_query($sql);
$info = mysql_fetch_array($result );
$_SESSION['pid']=$info['Project_id'];
//echo $info['Project_id'];
$Pid=$info['Project_id'];
$hid=$_SESSION['Uid'];
// echo $Pid;
	header("location:http://localhost/Projectx/Finalised_work/upload_projdp.php?pid=$Pid&Uid=$hid");
	
	



mysql_close($dbhandle);*/
?>




