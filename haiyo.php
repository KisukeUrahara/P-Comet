<?php
session_start();

if(isset($_POST['yo11']))
{
			//$_SESSION['Uid']=$_GET['Uid'];
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
			$target="project_pics/".$_SESSION['pid'].".".$ext;
			
			
			move_uploaded_file($image_tmp_name,$target);
			$target="http://localhost/Projectx/".$target;
			//$_SESSION['dpurl']=$target;
			}
			else
			{ $target=$_SESSION['dpurl'];
			}
			}
							
				$host="localhost"; // Host name 
				$username="root"; // Mysql username 
				$password=""; // Mysql password 
				$db_name="pcomet"; // Database name 
				$tbl_name="project"; // Table name 

// Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$link=mysql_select_db("$db_name",$conn)or die("cannot select DB");
 $sql="UPDATE project SET vidurl='$target' WHERE Project_id='".$_SESSION['pid']."'";
 $retval = mysql_query($sql) or die("Unable to connect to $site".mysql_error());
 

 header("location:http://localhost/Projectx/Finalised_work/search.php");
 ?>
 
 
