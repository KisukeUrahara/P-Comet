<?php
session_start();
if(!isset($_SESSION['Uid']))
{
 header("http:localhost/Projectx/workingonshiva.php");
}

$username = "root";
$password = "";
$hostname = "localhost";
$dbname= "pcomet";

//echo $_SESSION['Uid'];
$pname1=$_POST['pname'];
$admin_name=$_SESSION['myusername'];
$admin_id=$_SESSION['Uid'];
$pstream=$_POST['pstream'];
$psummary=$_POST['psummary'];

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password,$dbname) or die("Unable to connect to MySQL shit!");

  $selected = mysql_select_db($dbname,$dbhandle) 
   or die("Could not select examples");
  $sql="INSERT INTO project (project_name,Admin_id,institute,Stream,Description) VALUES ('".$pname1."','".$admin_id."','".$_SESSION['institute']."','".$pstream."','".$psummary."')";
  
  if (!mysql_query($sql,$dbhandle))
  {
	die('Error lmao:' . mysql_error())
	;
  }
  else
  {
	
	$sql8=" SELECT MAX(Project_id) FROM project";
	$result=mysql_query($sql8);
$info = mysql_fetch_array($result);
$pname1=$info['MAX(Project_id)'];
$myFile = "pchat/".$pname1.".txt";
$fh = fopen($myFile, 'w') or die("can't open file");
fclose($fh);
$_SESSION['pid']=$pname1;
	
header("location:http://localhost/Projectx/joinproj_workson.php");
	}
	



mysql_close($dbhandle);
?>