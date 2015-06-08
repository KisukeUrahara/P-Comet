<?php
session_start();
if((isset($_SESSION['myusername']))||(isset($_SESSION['login']) && $_SESSION['login'] != ''))

{
	$username = "root";
$password = "";
$hostname = "localhost";
$dbname= "pcomet"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password,$dbname) or die("Unable to connect to MySQL shit!");
$selected = mysql_select_db($dbname,$dbhandle); 
	
$worki="SELECT * FROM user WHERE emailid='".$_SESSION['emailid']."'";
$arr=mysql_query($worki);
$info = mysql_fetch_array($arr);
$_SESSION['Uid']=$info['Uid'];
//echo $_SESSION['Uid'];
	header("location:http://localhost/Projectx/Finalised_work/newsfeed.php");
}
	else
	{
		alert("Incorrect details");
		header("location:http://localhost/Projectx/Finalised_work/index.html");
	}
		
		
?>

