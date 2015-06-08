<?php
session_start();


$username = "root";
$password = "";
$hostname = "localhost";
$dbname= "pcomet"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password,$dbname) or die("Unable to connect to MySQL shit!");

$Uid1=$_POST['Uname'];
$pwd1=$_POST['pwd'];
$pwd1=md5($pwd1);
$email1=$_POST['email'];
$contact1=$_POST['contact'];
$dpman=$_POST['dpman'];
if($dpman==""|| $dpman=="undefined")
{
$dpman="http://localhost/Projectx/images/sil.png";
}

 $selected = mysql_select_db($dbname,$dbhandle) 
   or die("Could not select examples");
  $sql="INSERT INTO user (Name,Password,Contact_no,emailid,dpurl) VALUES ('$Uid1','$pwd1','$contact1','$email1','$dpman')";
  if (!mysql_query($sql,$dbhandle))
  {
	die('Error lmao:' . mysql_error());
  }


// echo"hello";

$_SESSION['institute']="";
$_SESSION['login'] = "1"; 
$_SESSION['myusername']=$Uid1;
$_SESSION['emailid']=$email1;
$_SESSION['phone']=$contact1;
$_SESSION['dpurl']=$dpman;
header("location:http://localhost/Projectx/login_success1.php");
  
  
//close the connection
mysql_close($dbhandle);
?>




