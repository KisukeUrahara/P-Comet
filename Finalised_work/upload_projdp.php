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
<script src="docs/js/metro-dropdown.js"></script>

 <script src="js/hitua.js"></script>
 
 


<style>
.container{
    width:600px;
    float:right;
    margin-right:10px;
    position: absolute;
    right: 0px;
    left:300px;
    top:56px;
    
    }
 </style>
            
     

   
</head>
<body class = "metro" style="background-image: url('images/grayback.jpg'); background-repeat: no-repeat; background-size: cover;">

<div class="navigation-bar dark fixed-top" style="z-index:1;">
    <div class="navigation-bar-content">
        <a href="index.html" class="element image-button image-left place-left">P-Comet<img src="images/gsletterP12.png"></a>

        <a class="pull-menu" href="#"></a> <!-- To create button for expanding top menu !-->

                    <ul class="element-menu place-left">
 
        
        
        <span class="element-divider"></span>
        
        <a class="element brand" href="#"><span class="icon-alarm"></span></a>
        <span class="element-divider"></span>
 
        
 
        
        <!--<span class="element-divider place-right"></span>
        <a class="element place-right" href="#"><span class="icon-locked-2"></span></a>-->

        </ul>

       
            <ul class="element-menu place-right">
            <span class="element-divider"></span>
        <a class="element image-button image-left" href="#">
            <?php echo $_SESSION['myusername'];?>
            <img src="<?php echo $_SESSION['dpurl'];?>"/>
        </a>
        <span class="element-divider"></span>
        <a class="element place-right" href="#"><i class="icon-exit"></i> Sign Out</a>
        </ul>


        
     
                            
        
    </div>
    </div>
</div>


<br><br><br><br>

<div style="width:20%;">
<nav class="sidebar light" style="z-index:-1; background-color: rgba(255,255,255,0.0);">
                            <ul>
                                <li class="title"><center>Quick Access Menu</center></li>
                                <li class="active"><a href="#"><i class="icon-home"></i>Home</a></li>
                                
                                <li><a href="profile.html"><i class="icon-user-2"></i>My Profile</a></li>

                                                    <li> <a class="dropdown-toggle" href="#"><i class="icon-book"></i>Projects</a>
                                    <ul class="dropdown-menu" data-role="dropdown" style="display: none;">
                                        <li><a href="add.php">Start Project</a></li>
                                        <li><a href="view_proj.php">My Projects</a></li>
                                             

                                                     </ul></li>

                                                        <li><a href="search.php"><i class="icon-search"></i>Search</a>
                                    </li>



                                       
                                        
                                        <li class="divider"></li>
                                
                                
                            </ul>
                        </nav>
                        </div>

    <div class="container">

    <div class="grid ">
                        <div class="row">
                            <div class="span7">
   <div class="panel bg-transparent" style="width: 100%;"><center>
        
            
            <h1>Upload Project Poster</h1><hr style="width:100%;">

        You must Upload a poster to proceed.
                        
                        <div id="scrollbox1" data-role="scrollbox1" data-scroll="vertical">
                             
                        
                                <div class="listview" id="feed">
                                    
                                </div>
                            </div></center></div></div>
                            <script>
                $(function(){
                    $("#scrollbox1").scrollbar({
                        height: 400,
                        axis: 'y'
                    });
                    
                });
            </script>
                            <div class="span3">
                            <br><br><br><br>
                            
                            <center>
							<form method="post" action="http://localhost/Projectx/haiyo.php" enctype="multipart/form-data">
                                <br><br><input type="file" name="img" value="Choose file from computer"><br><br><br><br><br>
                                                                  
									<input type="submit" name="yo11" class="bg-darkRed fg-white" value="Upload Poster">
									</form>
									</div>
                                    <!--<a href="#" class="list">
                                        <div class="list-content bd-black">
                                            <img src="images/addproj2.jpg" class="icon">
                                            <div class="data">
                                                <span class="text-muted place-right" style="font-size: 12px;">1, 1, 2014</span><span class="list-title place-left">Name: </span><br>
                                                <span class="list-title place-left">Started by: </span><br>
                                                
                                                <span class="list-title place-left">Domain: </span><br>
                                                <span class="list-title place-left">Privacy:</span><br>
                                                
                                                <button class="small info">View Page</button> <button class="small">Send Request</button>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list">
                                        <div class="list-content bd-black">
                                            <img src="images/addproj2.jpg" class="icon">
                                            <div class="data">
                                                <span class="text-muted place-right" style="font-size: 12px;">1, 1, 2014</span><span class="list-title place-left">Name: </span><br>
                                                <span class="list-title place-left">Started by: </span><br>
                                                
                                                <span class="list-title place-left">Domain: </span><br>
                                                <span class="list-title place-left">Privacy:</span><br>
                                                
                                                <button class="small info">View Page</button> <button class="small">Send Request</button>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list">
                                        <div class="list-content bd-black">
                                            <img src="images/addproj2.jpg" class="icon">
                                            <div class="data">
                                                <span class="text-muted place-right" style="font-size: 12px;">1, 1, 2014</span><span class="list-title place-left">Name: </span><br>
                                                <span class="list-title place-left">Started by: </span><br>
                                                
                                                <span class="list-title place-left">Domain: </span><br>
                                                <span class="list-title place-left">Privacy:</span><br>
                                                
                                                <button class="small info">View Page</button> <button class="small">Send Request</button>

                                            </div>
                                        </div>
                                    </a>-->
									
                                    </center>
                                <!--/div-->
                            </div>

                            

                  

            
            </body>
        

   
  
  </html>
