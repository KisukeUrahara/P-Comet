<?php
session_start();

include 'constants.php';

 

// Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn)or die("cannot select DB");

 $bruh = $_POST['invs'];
  if(empty($bruh)) 
  {
    echo("You didn't select any buildings.");
  } 
  else
  {
    $N = count($bruh);
 
      for($i=0; $i < $N; $i++)
    {
		//echo $bruh[$i];
     $sql="INSERT into invite (auid,ruid,pid) VALUES ('".$_SESSION['Uid']."','".$_GET['uid']."','$bruh[$i]')";
	  $result=mysql_query($sql) or die('lolol'.mysql_error());
	  
    }
	header("location:newsfeed.php");
  }
  
  ?>
