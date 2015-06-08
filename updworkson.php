<?php
session_start();
//updworkson

$username = "root";
$password = "";
$hostname = "localhost";
$dbname= "pcomet";


/*$pname1=$_POST['pname'];
$admin_name=$_SESSION['myusername'];
$admin_id=$_SESSION['Uid'];
$pstream=$_POST['pstream'];
$psummary=$_POST['psummary'];*/

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password,$dbname) or die("Unable to connect to MySQL shit!");
//echo $_GET["pid"].$_SESSION['Uid'];
  $selected = mysql_select_db($dbname,$dbhandle) 
   or die("Could not select examples");
  $sql="INSERT INTO works_on (uid,pid,uname) VALUES ('".$_GET['suid']."','".$_GET['pid']."','".$_GET['uname']."')";
  
  if (!mysql_query($sql,$dbhandle))
  {
	die('Error lmao:' . mysql_error());
  }
  else
  {
	$unreq="DELETE FROM request WHERE uid='".$_GET['suid']."' AND pid='".$_GET['pid']."'";
	$result=mysql_query($unreq) or die('wtf man'.mysql_error());
	
	
	header("location:http://localhost/Projectx/Finalised_work/newsfeed.php");
	}
	



mysql_close($dbhandle);
?>




