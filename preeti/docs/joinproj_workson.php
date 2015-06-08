<?php
session_start();
if(!isset($_SESSION['myusername']))
{
 header("location:http://localhost/Projectx/Finalised_work/index.html");
}
else
{
	
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
  $sql="INSERT INTO works_on (uid,pid,uname) VALUES ('".$_SESSION['Uid']."','".$_SESSION['pid']."','".$_SESSION['myusername']."')";
  //echo $sql;
  if (!mysql_query($sql,$dbhandle))
  {
	die('Error lmao:' . mysql_error());
  }
  else
  {
	
	header("location:http://localhost/Projectx/Finalised_work/upload_projdp.php");
	}
	
}

?>