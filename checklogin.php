<?php
session_start();

include 'constants.php';

 // Database name 
$tbl_name="user"; // Table name 

// Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn)or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['email1']; 
$mypassword=$_POST['mypassword']; 
$mypassword = md5($mypassword);
//echo $myusername;

// To protect MySQL injection (more detail about MySQL injection)

$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE emailid='$myusername' and Password='$mypassword'";
$result=mysql_query($sql);
$info = mysql_fetch_array($result );
$_SESSION['emailid']=$info['emailid'];
//echo $info['id'];

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

$_SESSION['year']=$info['Year'];
$_SESSION['institute']=$info['institute'];
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['Uid']=$info['Uid'];
$_SESSION['myusername']=$info['Name'];
$_SESSION['dpurl']=$info['dpurl']; 
//echo $_SESSION['username'];
header("location:login_success1.php?user=$myusername");

}
else {
echo "Wrong Username or Password";
}
?>