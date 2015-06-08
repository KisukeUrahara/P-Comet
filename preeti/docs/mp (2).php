<?php 
session_start();
if(!isset($_SESSION['Uid']))
{
 header("location:http://localhost/Projectx/Finalised_work/index.html");
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <title>P-Comet</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
                    <link rel="icon" type="image/png" href="images/gsletterP12.png">
<link rel="stylesheet" href="docs/css/metro-bootstrap.css">
<link rel="stylesheet" href="docs/css/metro-bootstrap-responsive.css">
<link href="docs/css/iconFont.css" rel="stylesheet">
<link rel="stylesheet" href="docs/css/iconFont.css">


<script src ="docs/js/jquery/jquery.min.js"></script>
<script src ="docs/js/jquery/jquery.mousewheel.js"></script>
<script src="docs/js/jquery/jquery.widget.min.js"></script>
<script src="docs/js/metro.min.js"></script>
<script src="docs/js/metro-carousel.js"></script>
<script src="docs/js/prettify.js"></script>
	<style>
.container{
	width:670px;
	float:right;
	margin-right:10px;
	text-align:left;
	position: absolute;
    right: 0px;
	left:300px;
	top:56px;
	
	
	}
	</style>

</head>
<body style="background-image:url('images/grayback.jpg'); background-repeat: no-repeat; background-size: cover;" class="metro">

<nav class="navigation-bar dark" style="width:100%">

<div class="navigation-bar dark fixed-top" style="z-index:1;">
    <div class="navigation-bar-content">
        <a href="http://localhost/Projectx/Finalised_work/newsfeed.php" class="element image-button image-left place-left">P-Comet<img src="images/gsletterP12.png"></a>

        <a class="pull-menu" href="#"></a> <!-- To create button for expanding top menu !-->

                    <ul class="element-menu place-left">
 
        <span class="element-divider"></span><a class="element brand" href="http://localhost/Projectx/Finalised_work/add.php"><span class="icon-book"></span><span class="icon-plus"></span></a><span class="element-divider"></span>
        <a class="element brand" href="http://localhost/Projectx/Finalised_work/chat.php"><span class="icon-comments-2"></span></a>
        <span class="element-divider"></span>
        
        <a class="element brand" href="#"><span class="icon-alarm"></span> </a>
        <span class="element-divider"></span>
 
        
 
        
        <!--<span class="element-divider place-right"></span>
        <a class="element place-right" href="#"><span class="icon-locked-2"></span></a>-->

        </ul>

       
            <ul class="element-menu place-right">
            <span class="element-divider"></span>
        <a class="element image-button image-left" href="http://localhost/Projectx/view_profile.php">
           <?php echo $_SESSION['myusername'];?>
            <img src="<?php echo $_SESSION['dpurl'];?>"/>
        </a>
        <span class="element-divider"></span>
        <a class="element place-right" href="http://localhost/Projectx/logout.php"><i class="icon-exit"></i> Sign Out</a>
        </ul>


        
     
                            
        
    </div>
    </div>
</nav>


<br><br><br><br>

<div style="width:20%;">
<nav class="sidebar dark" style="z-index:-1; background-color: rgba(255,255,255,0.0);">
                            <ul>
                                <li class="title fg-black"><center>Quick Access Menu</center></li>
                                <li class="active"><a href="#"><i class="icon-home"></i>Home</a></li>
                                
                                <li><a href="http://localhost/Projectx/view_profile.php"><i class="icon-user-2"></i>My Profile</a></li>

                                                     <li> <a class="dropdown-toggle" ><!--href="http://localhost/Projectx/Finalised_work/view_proj.php"--> <i class="icon-book"></i>Projects</a>
                                    <ul class="dropdown-menu" data-role="dropdown" style="display: none;">
                                        <li><a href="http://localhost/Projectx/Finalised_work/add.php">Start Project</a></li>
                                        <li><a href="http://localhost/Projectx/Finalised_work/view_proj.php">My Projects</a></li>
                                             

                                                     </ul></li>

                                                        <li><a href="http://localhost/Projectx/Finalised_work/search.php"><i class="icon-search"></i>Search</a>
                                    </li>



                                       
                                        
                                        <li class="divider"></li>
                                        
                                        
                                    
                                
                               

                                
                                  
                                
                            </ul>
                        </nav>
                        </div>

  

    <div class="container">
    <div style="width:81%"><center>
                <h1>
                
                    EDIT<small class="on-right">PROFILE</small>
                </h1>
                <br><br>
                <table class="table bg-transparent">
                <tbody>
                        <tr><td class="text-center"><legend>Name</legend></td><td class="text-center"><input type="text" value="<?php echo $_SESSION['myusername'];?>" name="upuname"></td></tr>

                        <tr><td class="text-center"><legend>Email ID</legend></td><td class="text-center"> <input type="text" value="<?php echo $_SESSION['emailid'];?>" name="upemail"><br></td></tr>

                         <tr><td class="text-center"><legend>Institute</legend></td><td class="text-center"><input type="text" value="<?php echo $_SESSION['institute'];?>" name="uinst"><br></td></tr>

                          <tr><td class="text-center"><legend>Stream</legend></td><td class="text-center"><select name="upstream">
                                        <option value="CS">Computer Science Engg</option>
                                        <option value="IS">Information Science Engg</option>
                                        <option value="EE">Electrical and Electronics Engg</option>
                                        <option value="TE">Telecommunication Engg</option>
                                        <option value="EC">Electronics and Communication Engg</option>
                                        
                                        <option value="BT">Biotechnology</option>
                                        
                                        <option value="CV">Civil Engg</option>
                                        
                                        <option value="ME">Mechanical Engg</option>

                                        </select></td></tr>

                           <tr><td class="text-center"><legend>Current year</legend></td><td class="text-center"><select name="upyear">
<option value="1">First</option>
<option value="2">Second</option>
<option value="3">Third</option>
<option value="4">Fourth</option>
<option value="5">Fifth</option></select></td></tr>


<tr><td class="text-center"><legend>Skill Set</legend></td><td class="text-center"><input type="text" placeholder="Write down your skills" name="summary"> </td></tr>


<tr><td class="text-center"><legend>Profile Picture</legend></td><td class="text-center"><input type="file" name="img"></td></tr>



                        </tbody>

                        <tfoot></tfoot>
                    </table>

<center><button type="submit" name="yo" class="large  success fg-white" ><i class="icon-redo"></i> Update</button></center>
</center></div></div>
					
					 
                    
</body>
</html>