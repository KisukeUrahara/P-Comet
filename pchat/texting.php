<?php
$pid=$_GET['cpid'];
$stringData = $_GET['msg'];
$stringData=$stringData."\n";
$myFile = $pid.".txt";
$fh = fopen($myFile, 'a') or die("can't open file");
fwrite($fh, $stringData);
//$stringData = "New Stuff 2\n";
//fwrite($fh, $stringData);


fclose($fh);
$fh1 = fopen($myFile, 'r') or die("can't open file");
while(!feof($fh1)) { 
	    echo fgets($fh1)."<br>";
	}
	fclose($fh1);
?>