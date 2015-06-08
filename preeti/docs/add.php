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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Metro UI CSS Framework">
    <meta name="description" content="Simple responsive css framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">
    <meta name="keywords" content="js, css, metro, framework, windows 8, metro ui">

    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/prettify/prettify.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>
    <script src="js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>
    <script src="js/github.info.js"></script>
	<script src="min/metro.min.js"></script>
	<script src="js/metro-dropdown.js"></script>
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
	top:50px;
	
	
	}
	</style>

</head>
<body class="metro" style="background-image: url('images/grayback.jpg'); background-repeat: no-repeat; background-size: cover;">
<nav class="navigation-bar dark" style="width:100%">
    <nav class="navigation-bar-content">
        <div class="element">
            <a class="dropdown-toggle" href="http://localhost/Projectx/Finalised_work/newsfeed.php">p-comet</a>
            
        </div>
 
        <span class="element-divider"></span>
		<a class="element brand" href="balloon.php"><span class="icon-comments-2"></span></a>
		
        <a class="element brand" href="forms.php"><span class="icon-book"></span></a>
        <a class="element brand" href="#"><span class="icon-alarm"></span></a>
        <span class="element-divider"></span>
 
        <div class="element input-element">
            <form>
                <div class="input-control text">
                    <input type="text" placeholder="Search...">
                    <button class="btn-search"></button>
                </div>
            </form>
        </div>
 
        <div class="element place-right">
            <a class="dropdown-toggle" href="#">
                <span class="icon-cog"></span>
            </a>
            <ul class="dropdown-menu place-right" data-role="dropdown" style="display: none;">
                                <li><a href="#">Settings</a></li>
                                
                                <li><a href="#">Support</a></li>
                                <li><a href="http://localhost/Projectx/logout.php">">Logout</a></li>
                            </ul>
                
        </div>
        <!--<span class="element-divider place-right"></span>
        <a class="element place-right" href="#"><span class="icon-locked-2"></span></a>-->
        <span class="element-divider place-right"></span>
		<a class="element place-right" href="mp.php"><span class="icon-user"></span></a>
        <button class="element image-button image-left place-right" >
            <?php echo $_SESSION['myusername'];?>
            <img src="<?php echo $_SESSION['dpurl'];?>" alt=""/>
        </button>
    </nav>
</nav>
 <br><br><br><br>

<div style="width:20%">
<nav class="sidebar light" style="z-index:-1;">
                            <ul>
                                <li class="title"><center>Quick Access Menu</center></li>
                                <li class="active"><a href="http://localhost/Projectx/Finalised_work/newsfeed.php"><i class="icon-home"></i>Home</a></li>
                                
                                <li>
                                    <a class="dropdown-toggle"><i class="icon-user-2"></i>My Profile</a>
                                    <ul class="dropdown-menu" data-role="dropdown" style="display: none;">
                                        <li><a href="mp.php">View My Profile</a></li>
                                             <li><a href="mp.php">Edit My Profile</a></li>
                                                     </ul></li>

                                                    <li> <a class="dropdown-toggle" href="#"><i class="icon-book"></i>My Projects</a>
                                    <ul class="dropdown-menu" data-role="dropdown" style="display: none;">
                                        <li><a href="add.php">Add Project</a></li>
                                        <li><a href="">Current Projects</a></li>
                                             <li><a href="">Finished Projects</a></li>

                                                     </ul></li>

                                                     <li><a class="dropdown-toggle" href="#"><i class="icon-search"></i>Search</a>
                                    <ul class="dropdown-menu" data-role="dropdown" style="display: none;">
                                        <li><a href="">People</a></li>
                                        <li><a href="forms.php">Projects</a></li>
                                            

                                                     </ul></li>


                                       
                                        
                                        <li class="divider"></li>
                                        
                                        
                                    
                                
                               

                                <li class="title"><center>More Options</center></li>
                                <li><a href="balloon.php"><i class="icon-comments-2"></i>Quick Chat</a></li>
                                <li><a href="#"><i class="icon-alarm"></i>View Notifications</a></li>
                                  
                                
                            </ul>
                        </nav>
                        </div>

						
						<div class="container">
						<div style="width:60%">
						<h1>
                    <a href="/"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
                    Project<small class="on-right">details</small>
                </h1>
            <form method="post" action="http://localhost/Projectx/addproj.php" enctype="multipart/form-data">
                <fieldset>
                    
                    <label>Project Name</label>
                    <div class="input-control text" data-role="input-control">
                        <input type="text" name="pname" placeholder="What do you need to do?" autofocus="">
                        <button class="btn-clear" tabindex="-1" type="button"></button>
                    </div>
                    <label>Enter Project Stream: </label>
                    <div class="input-control text" data-role="input-control">
                        <select name="pstream">
						<option value="Miscellaneous">Miscellaneous</option>
  <option value="Medical">Medical</option>
  <option value="Military and Defense">Military</option>
  <option value="Social">Social</option>
  <option value="Educational">Education</option>
  <option value="Research">Research</option>
</select>
                    </div>
					
					                   
					<label>Describe your project in detail:  
							</label>
					
                                    <div class="input-control textarea" data-role="input-control">
                                        <input type="text" name="psummary" maxlength="490" style="width: 600px;">
										
                                    </div>
                                
				
					
 <div class="clearfix">
                        
                   
</div>
</div>
                    
					<br><br><input type="submit" class="bg-darkRed fg-white" value="Create Project">

					
					</form>
					

                    <div style="margin-top: 20px">
                    </div>

                </fieldset>
            </form>
        </div>
		</div>
						</body>
						</html>