<?php session_start();?>
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

</head>
<body class="metro">
<nav class="navigation-bar dark" style="width:100%">
    <nav class="navigation-bar-content">
        <div class="element">
            <a class="dropdown-toggle" href="test.php">p-comet</a>
            
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
                                <li><a href="#">Logout</a></li>
                            </ul>
                
        </div>
        <!--<span class="element-divider place-right"></span>
        <a class="element place-right" href="#"><span class="icon-locked-2"></span></a>-->
        <span class="element-divider place-right"></span>
		<a class="element place-right" href="mp.php"><span class="icon-user"></span></a>
        <button class="element image-button image-left place-right" >
            <?php echo $_SESSION['myusername'];?>
            <img src="images/unknown.jpg"/>
        </button>
    </nav>
</nav>
</nav>
    <div class="container">
                <h1>
                    <a href="/"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
                    Project<small class="on-right">search</small>
                </h1>

                <div class="grid">
                    <div class="row">
                        <div class="span3 no-tablet-portrait">
                            <nav>
                                <ul class="side-menu">
                                    <li><a href="test.php">Newsfeed</a></li>
                                    <li><a href="mp.php">My profile</a></li>
                                    <li><a href="balloon.php">chat</a></li>
                                    <li><a href="forms.php">Search</a></li>
                                    
                                </ul>
                            </nav>
                        </div>

                        <div class="span9">
                         
						<div class="input-control text">
						<input type="text" placeholder="Search...">
						<button class="btn-search"></button>
						</div>

                            <h2 id="_radio"><i class="icon-accessibility on-left"></i>Filter Projects</h2>
                            <div>
							
                                <div class="input-control radio margin10" data-role="input-control">
                                    <label>
                                        Name
                                        <input type="radio" name="r1" checked />
                                        <span class="check"></span>
                                    </label>
                                </div>
                                <div class="input-control radio margin10" data-role="input-control">
                                    <label>
                                        Stream
                                        <input type="radio" name="r1" />
                                        <span class="check"></span>
                                    </label>
                                </div>
                                <div class="input-control radio margin10" data-role="input-control">
                                    <label>
                                        size
                                        <input type="radio" name="r1" />
                                        <span class="check"></span>
                                    </label>
                                </div>
                               
                                <div class="input-control radio margin10" data-role="input-control">
                                    <label>
                                        Region
                                        <input type="radio" name="r1" />
                                        <span class="check"></span>
                                    </label>
                                </div>
								<div class="input-control radio margin10" data-role="input-control">
                                    <label>
                                        College
                                        <input type="radio" name="r1" />
                                        <span class="check"></span>
                                    </label>
                                </div>
                            </div>
                            <h3>project description</h3>
                           
                                <form>
                                    <div class="input-control textarea" data-role="input-control">
                                        <textarea></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

    <script src="js/hitua.js"></script>

</body>
</html>