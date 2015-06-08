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
	width:20%;
	height:300px;
	float:right;
	margin-right:100px;
	text-align:left;
	position: absolute;
    right: 0px;
	left:340px;
	top:56px;
	
	
	}
	</style>

</head>
<body class="metro" style="background-image: url('images/grayback.jpg'); background-repeat: no-repeat; background-size: cover;">
<nav class="navigation-bar dark" style="width:100%">

<div class="navigation-bar dark fixed-top" style="z-index:1;">
    <div class="navigation-bar-content">
        <a href="http://localhost/Projectx/Finalised_work/newsfeed.php" class="element image-button image-left place-left">P-Comet<img src="images/gsletterP12.png"></a>

        <a class="pull-menu" href="#"></a> <!-- To create button for expanding top menu !-->

                    <ul class="element-menu place-left">
 
        <span class="element-divider"></span><a class="element brand" href="http://localhost/Projectx/preeti/docs/add.php"><span class="icon-book"></span><span class="icon-plus"></span></a><span class="element-divider"></span>
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
<nav class="sidebar light" style="z-index:-1; background-color: rgba(255,255,255,0.0);">
                            <ul>
                                <li class="title"><center>Quick Access Menu</center></li>
                                <li class="active"><a href="#"><i class="icon-home"></i>Home</a></li>
                                
                                <li><a href="http://localhost/Projectx/view_profile.php"><i class="icon-user-2"></i>My Profile</a></li>

                                                     <li> <a class="dropdown-toggle" ><!--href="http://localhost/Projectx/Finalised_work/view_proj.php"--> <i class="icon-book"></i>Projects</a>
                                    <ul class="dropdown-menu" data-role="dropdown" style="display: none;">
                                        <li><a href="http://localhost/Projectx/preeti/docs/add.php">Start Project</a></li>
                                        <li><a href="http://localhost/Projectx/Finalised_work/view_proj.php">My Projects</a></li>
                                             

                                                     </ul></li>

                                                        <li><a href="http://localhost/Projectx/Finalised_work/search.php"><i class="icon-search"></i>Search</a>
                                    </li>



                                       
                                        
                                        <li class="divider"></li>
                                        
                                        
                                    
                                
                               

                                
                                  
                                
                            </ul>
                        </nav>
                        </div>

  

						
					 <div class="container">
                        <div style="width:70%"><center>
                        <h1>
                   
                    START<small>a new project</small></center>
                </h1>
            <form method="post" action="http://localhost/Projectx/addproj.php" enctype="multipart/form-data">
                <fieldset>
                      <label>Enter some basic details to get started. You can personalize your project page and add your teammates once the page has been created.</label><br>
                    <label>Project Name</label>
                    <div class="input-control text" data-role="input-control">
                        <input type="text" name="pname" placeholder="What do you need to do?" autofocus="">
                        <button class="btn-clear" tabindex="-1" type="button"></button>
                    </div>
                    <label>Project Domain (choose your category)</label>
                  
                        <select name="pstream">
						<option selected="" value="">--Choose your domain--</option>

                         <option value="Educational">Education</option>                   
  <option value="Medical">Medicine</option>
   <option value="Research">Research</option>
   <option value="Social">Social</option>
  <option value="Military and Defense">Military and Defense</option>
  <option value="Miscellaneous">Miscellaneous</option>
</select>
                 
					
					                   
					  <label>Project Description</label>
							</label>
					
                                    <div class="input-control text" data-role="input-control">
                                        <input type="text" name="psummary" maxlength="490"  placeholder="Tell others a little about your project">
										
                                    </div>
                <br><br><br><center><button type="submit" class="large  success fg-white" ><i class="icon-redo"></i> Proceed</button></center>                
				
</div>
                    
					

					
					</form>
					

                    <div style="margin-top: 20px">
                    </div>

                </fieldset>
            </form>
        </div>
		</div>
						</body>
						</html>