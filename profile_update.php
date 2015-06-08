<?php
session_start();
			if(!isset($_SESSION['myusername']))
			{
				header("http://localhost/Projectx/workingonshiva.php");
			}

			else
			{
			$target="";
			if(isset($_POST['yo']))
{
			$image_name= $_FILES['img']['name'];
			if($image_name!="")
			{
						
			$image_type= $_FILES['img']['type'];
			$image_size= $_FILES['img']['size'];
			
			$image_tmp_name= $_FILES['img']['tmp_name'];
			function findexts ($filename) 
			{ 
 
				$exts = pathinfo($filename, PATHINFO_EXTENSION);
				return $exts; 
			} 
 
 //This applies the function to our file  
 $ext = findexts ($_FILES['img']['name']) ;
 
			//$imname="uzu";
			$target="profile_pics/".$_SESSION['Uid'].".".$ext;
			
			
			move_uploaded_file($image_tmp_name,$target);
			$target="http://localhost/Projectx/".$target;
			$_SESSION['dpurl']=$target;
			}
			
				/*$host="localhost"; // Host name 
				$username="root"; // Mysql username 
				$password=""; // Mysql password 
				$db_name="pcomet"; // Database name 
				$tbl_name="user"; // Table name 

// Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn)or die("cannot select DB");

$sql1="UPDATE $tbl_name SET dpurl='$target' WHERE Uid='".$_SESSION['Uid']."'";
$retval1 = mysql_query($sql1,$conn);
if(!$retval1 )
{
  die('Could not update data: ' . mysql_error());
}
			
				
			----------------------------------------------------------------------------------------
			*/
			
			
				$host="localhost"; // Host name 
				$username="root"; // Mysql username 
				$password=""; // Mysql password 
				$db_name="pcomet"; // Database name 
				$tbl_name="user"; // Table name 

// Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn)or die("cannot select DB");

$uinst=$_POST['uinst'];
$upuname=$_POST['upuname'];
$upemail=$_POST['upemail'];
$upyear=$_POST['upyear'];
$upstream=$_POST['upstream'];
$Uid=$_SESSION['Uid'];
$summary=$_POST['summary'];

if($target!="")
{
$sql = "UPDATE $tbl_name SET Name = '$upuname', emailid='$upemail', institute='$uinst',dpurl='$target',Year='$upyear',
Description='$summary', Stream='$upstream' WHERE Uid = '$Uid'";

}
else
{
$sql = "UPDATE $tbl_name SET Name = '$upuname', emailid='$upemail', institute='$uinst',Year='$upyear',Description='$summary', Stream='$upstream' WHERE Uid = '$Uid'" ;

}

$retval = mysql_query($sql,$conn);
if(!$retval )
{
  die('Could not update data: ' . mysql_error());
}
}
}
$_SESSION['institute']=$uinst;
$_SESSION['myusername']=$upuname;
$_SESSION['emailid']=$upemail;
$_SESSION['year']=$upyear;
//$_SESSION['upstream']=$upstream;

//$summary=$_SESSION['summary'];

header("location:http://localhost/Projectx/view_profile.php");
?>