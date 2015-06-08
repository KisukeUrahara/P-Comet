
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
	width:670px;
	float:right;
	margin-right:10px;
	text-align:left;
	position: absolute;
    right: 0px;
	left:340px;
	top:50px;
	
	
	}
	</style>

</head>
<body class="metro">
<nav class="navigation-bar dark" style="width:100%">
    <nav class="navigation-bar-content">
        <div class="element">
            <a class="dropdown-toggle" href="test.html">p-comet</a>
            
        </div>
 
        <span class="element-divider"></span>
		<a class="element brand" href="balloon.html"><span class="icon-comments-2"></span></a>
		
        <a class="element brand" href="forms.html"><span class="icon-book"></span></a>
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
                                <li><a href="http://localhost/Projectx/logout.php">Logout</a></li>
                            </ul>
                
        </div>
        <!--<span class="element-divider place-right"></span>
        <a class="element place-right" href="#"><span class="icon-locked-2"></span></a>-->
        <span class="element-divider place-right"></span>
		<a class="element place-right" href="mp.html"><span class="icon-user"></span></a>
        <button class="element image-button image-left place-right" >
            
            <img src="images/unknown.jpg"/>
        </button>
    </nav>
</nav>
<div style="width:20%">
<nav class="sidebar light">
                            <ul>
                                <li class="title">Quick Access Menu</li>
                                <li class="active"><a href="test.html"><i class="icon-home"></i>Dashboard</a></li>
                                <li class="stick bg-red"><a href="#"><i class="icon-cog"></i>Settings</a></li>
                                <li class="stick bg-yellow">
                                    <a class="dropdown-toggle" href="#"><i class="icon-tree-view"></i>Categories</a>
                                    <ul class="dropdown-menu" data-role="dropdown" style="display: none;">
                                        <li><a href="">IT & Software</a></li>
											 <li><a href="">Design, Media & Architecture</a></li>
													 <li><a href="">Medicine</a></li>
									 <li><a href="">Accounting, Human Resources & Legal</a></li>
											 <li><a href="">Sales & Marketing</a></li>
											 <li><a href="">Engineering & Science</a></li>
												 <li><a href="">Mobile Phones & Computing</a></li>
										 <li><a href="">Product Sourcing & Manufacturing</a></li>
                                       
                                        
                                        <li class="divider"></li>
                                        
                                        
                                    </ul>
                                </li>
                               

                                <li class="title">Advanced options</li>
                                <li><a href="#">Search</a></li>
                                <li><a href="#">Add projects</a></li>
								 <li><a href="#">Chat</a></li>
								
                                
                                <li>
                                    <a class="dropdown-toggle" href="#">Profile</a>
                                    <ul class="dropdown-menu" data-role="dropdown">
                                        <li><a href="">view Profile</a></li>
                                        <li><a href="">Edit Profile</a></li>
                                        <li><a href="">Projects</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
						</div>
    <div class="container">
                <h1>
                    <a href="/"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
                    Update<small class="on-right">Profile</small>
                </h1>
                <div class="example">
                    <div class="tab-control" data-role="tab-control">
                        <ul class="tabs">
                            <li class="active"><a href="#tab1">Profile</a></li>
                            <li><a href="#tab2">Projects</a></li>
                        </ul>
                        <div class="frames">
                            <div class="frame clearfix" id="tab1">
                                <div class="accordion span3 place-left margin10" data-role="accordion" data-closeany="false">
                                    <div class="accordion-frame">
                                       <div class="imgholder"><img src="images/unknown.jpg" alt="" /></div>
									<div class="udetail">
                                    </div>
									</div>
                                </div>
                                <div class="accordion with-marker span3 place-left margin10" data-role="accordion" data-closeany="false">
                                    <div class="accordion-frame">
									<form method="post" action="http://localhost/Projectx/profile_update.php">
                                        Name:<br> <input type="text" value="<?php echo $_SESSION['myusername'];?>" name="upuname"><br>
										email-id: <input type="text" value="<?php echo $_SESSION['emailid'];?>" name="upemail"><br>
										Stream:<br>
<select name="upstream">
<option value="CS">Comp Science Engg</option>
<option value="BT">Biotechnology</option>
<option value="IS">Info. Science</option>
<option value="TE">Telecom</option>
<option value="ME">Mechanical</option>
</select><br>
										How many Years have you completed:<br />
<select name="upyear">
<option value="First">One</option>
<option value="Second">Two</option>
<option value="Third">Three</option>
<option value="Fourth">Four</option></select>
										<br> <textarea type="text" maxlength="65535" rows="6" id="summary" name="summary" placeholder="Tell us a bit about yourself" field="Summary"></textarea>

                                    
									<input type="submit" class="bg-darkRed fg-white" value="Update Profile">
									</div>
									</div>
									</form>
                            												
                               		 <div class="frame" id="tab2">tab2</div>
							
                        </div>
					
					
                    <br />
					
					 
                    
</body>
</html>