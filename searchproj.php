<?php
session_start();
 // Database name 
$tbl_name="project"; // Table name 
include 'constants.php';
// Connect to server and select databse.
$conn1=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn1)or die("cannot select DB");
$pname=$_GET['pname'];
$pname=strtoupper($pname);
$pname=$pname."%";
$pstream=$_GET['pstream']; 
$pcoll=$_GET['pcoll'];
$pcoll=strtoupper($pcoll);
$pcoll=$pcoll."%";

/*$pname="Social app";
$branch="-1";
$pstream="-1"; 
$pcoll="";*/

$str1="select * from $tbl_name WHERE ";

$strname="UPPER(project_name) LIKE '";
$strbr="Stream='";

$strcl="UPPER(Institute) LIKE'";

$spacer="' and ";

if($pname!="")
{
	$str2=$str1.$strname.$pname;
	//echo $str2;
	if($pstream!="-1")
	{
		$str2=$str2.$spacer.$strbr.$pstream;
	}
	
	if($pcoll!="")
	{
		$str2=$str2.$spacer.$strcl.$pcoll;
	}
	//echo $str2;
}
else if($pstream!="-1")
{
	
	$str2=$str1.$strbr.$pstream;
	
	if($pcoll!="")
	{
		$str2=$str2.$spacer.$strcl.$pcoll;
	}
}


else 
{
	$str2=$str1.$strcl.$pcoll;
	}
	$str2=$str2."'";
//echo $str2;
	
	$sresult=mysql_query($str2);
	
while($h=mysql_fetch_array($sresult)){
	$out[]=$h;
   
}
	
		//$out=mysql_fetch_array($sresult);
//$jsond = mysql_fetch_array($sresult);
$jsond=json_encode($out);

echo $jsond;	



?>