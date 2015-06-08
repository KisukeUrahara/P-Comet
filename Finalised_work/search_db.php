<?php
session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="pcomet"; // Database name 
$tbl_name="user"; // Table name 

// Connect to server and select databse.
$conn1=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn1)or die("cannot select DB");
/*$person=$_POST['person'];
$branch=$_POST['branch'];
$sem=$_POST['sem']; 
$coll=$_POST['coll'];*/


$person="sachit";
$branch="-1";
$sem="-1"; 
$coll="";

$str1="select * from $tbl_name where ";

$strname="Name='";
$strbr="Stream='";
$strsm="Year='";
$strcl="institute='";

$spacer="' and ";

if($person!="")
{
	$str2=$str1.$strname.$person;
	//echo $str2;
	if($branch!="-1")
	{
		$str2=$str2.$spacer.$strbr.$branch;
	}
	if($sem!="-1")
	{
		$str2=$str2.$spacer.$strsm.$sem;
	}
	if($coll!="")
	{
		$str2=$str2.$spacer.$strcl.$coll;
	}
	//echo $str2;
}
else if($branch!="-1")
{
	
	$str2=$str1.$strbr.$branch;
	if($sem!="-1")
	{
		$str2=$str2.$spacer.$strsm.$sem;
	}
	if($coll!="")
	{
		$str2=$str2.$spacer.$strcl.$coll;
	}
}
else if($sem!="-1")
{
	$str2=$str1.$strsm.$sem;
	if($coll!="")
	{
		$str2=$str2.$spacer.$strcl.$coll;
	}
}
else 
	$str2=$str1.$strcl.$coll;
	$str2=$str2."'";
	//$str2="select * from user where Name='sachit'";
	//echo $str2;
	
	$sresult=mysql_query($str2);
	//if(!$result)
	
	
		
$jsond = mysql_fetch_array($sresult);
$jsond=json_encode($jsond);
echo $jsond;
?>