<?php session_start();
if(!isset($_SESSION['myusername']))
header("location:http://localhost/Finalised_work/index.html"); ?>

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
				$(document).ready(function(){
						$.ajax({
								url: 'http://localhost/Projectx/news.php' ,
								dataType: 'json' ,
								success: function(data){
										//alert('in success');
										$.each(data,function(i,item){
												$('#request').append("<a href='#' class='list' style='width:80%>");
												$('#request').append("<div class='list-content bd-black'>");
												$('#request').append("<img src='"+item.vidurl+"'style='height:100px%;width:80%;' class='icon'/>");
												$('#request').append("<div class='data'>");
                                                $('#request').append("<span class='text-muted place-right' style='font-size: 12px;'>"+item.tsp+"</span><span class='list-title place-left'>");
												$('#request').append(" &nbsp &nbsp <legend>Name:<i>"+item.project_name+"</i></legend><legend>Description: <i>"+item.Description+"</i></legend><legend>Stream: <i>"+item.Stream+"</i></legend></span><br>");
											   var	x=""+item.Project_id;
												$('#request').append("<button class=\"large info\" ><a href=\"http://localhost/Projectx/Finalised_work/projectDisp.php?pid="+item.Project_id+"\">View Page </a></button> <br><br><br></div></div></a>");
										});
								} ,
								error: function(){
									alert('error1');
								}
						});
				});
				$(document).ready(function(){
						$.ajax({
								url: 'http://localhost/Projectx/requestDisp.php' ,
								dataType: 'json' ,
								success: function(data){
										        $.each(data,function(i,item){
												   
												$('#sacrequest').append("<div class='list-content bd-black'>");
												$('#sacrequest').append("<img src='"+item.dpurl+"'style='height:50%;width:50%;' class='icon'/>");
												$('#sacrequest').append("<div class='data'>");
                                                $('#sacrequest').append("<span class='text-muted place-right' style='font-size: 12px;'>"+item.tsp+"</span><span class='list-title place-left'>");
												$('#sacrequest').append(" &nbsp &nbsp <legend>Sent By: <i>"+item.Name+"</i></legend><legend>For Project:<i>"+item.project_name+"</i></legend></legend></span><br>");
											   var	x=""+item.Project_id;
												$('#sacrequest').append("<button id=\"preetiaccept\"class=\"large info\"><a href=\"http://localhost/Projectx/updworkson.php?suid="+item.uid+"&pid="+item.Project_id+"&uname="+item.Name+"\">Accept Request </button> <button class=\"large\"><a href=\"http://localhost/Projectx/Finalised_work/c_othersprof.php?uid="+item.uid+"\">See Profile </button><br><br><br></div></div></a>");
										});
								} ,
								error: function(){
									$('#sacrequest').append("<legend> No Requests</legend>");
								}
						});
						$.ajax({
								url: 'http://localhost/Projectx/inviteDisp.php' ,
								dataType: 'json' ,
								success: function(data){
										        $.each(data,function(i,item){
												   
												$('#sacrequest7').append("<div class='list-content bd-black'>");
												$('#sacrequest7').append("<img src='"+item.vidurl+"'style='height:50%;width:50%;' class='icon'/>");
												$('#sacrequest7').append("<div class='data'>");
                                                $('#sacrequest7').append("<span class='text-muted place-right' style='font-size: 12px;'>"+item.tsp+"</span><span class='list-title place-left'>");
												$('#sacrequest7').append(" &nbsp &nbsp <legend>Invited By: <i>"+item.Name+"</i></legend><legend>For Project:<i>"+item.project_name+"</i></legend></legend></span><br>");
											   var	x=""+item.Project_id;
												$('#sacrequest7').append("<button id=\"preetiaccept\"class=\"large info\"><a href=\"http://localhost/Projectx/updworkson.php?suid=<?php echo $_SESSION['Uid'];?>&pid="+item.Project_id+"&uname=<?php echo $_SESSION['myusername'];?>\">Accept Invite </button> <button class=\"large\"><a href=\"http://localhost/Projectx/Finalised_work/c_othersprof.php?uid="+item.auid+"\">See Profile </button><br><br><br></div></div></a>");
										});
								} ,
								error: function(){
									$('#sacrequest7').append("<legend> No Invites</legend>");
								}
						});
				});
				
					
 </script>


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
        <a href="http://localhost/Projectx/Finalised_work/newsfeed.php" class="element image-button image-left place-left">P-Comet<img src="images/gsletterP12.png"></a>

        <a class="pull-menu" href="#"></a> <!-- To create button for expanding top menu !-->

                    <ul class="element-menu place-left">
 
        <span class="element-divider"></span><a class="element brand" href="http://localhost/Projectx/Finalised_work/add.php"><span class="icon-book"></span><span class="icon-plus"></span></a><span class="element-divider"></span>
        <a class="element brand" href="http://localhost/Projectx/Finalised_work/chat.php"><span class="icon-comments-2"></span></a>
        <span class="element-divider"></span>
        
        <a class="element brand" href="#"><span class="icon-alarm"></span></a>
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
</div>


<br><br><br><br>

<div style="width:20%;">
<nav class="sidebar light" style="z-index:-1; background-color: rgba(255,255,255,0.0);">
                            <ul>
                                <li class="title"><center>Quick Access Menu</center></li>
                                <li class="active"><a href="#"><i class="icon-home"></i>Home</a></li>
                                
                                <li><a href="http://localhost/Projectx/view_profile.php"><i class="icon-user-2"></i>My Profile</a></li>

                                                     <li> <a class="dropdown-toggle" href="http://localhost/Projectx/Finalised_work/view_proj.php"> <i class="icon-book"></i>Projects</a>
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

    <div class="grid ">
                        <div class="row">
                            <div class="span7">
   <div class="panel bg-transparent" style="width: 100%;"><center>
        
            
            <h1>NEWS<small>request</small></h1><hr style="width:100%;">

        
                        
                        <div id="scrollbox1" data-role="scrollbox1" data-scroll="vertical">
                             
                        
                                <div class="listview" id="request">
                                 
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
                            <div class="span4">
                            <br><br><br><br>
                            <h2>&nbsp &nbsp REQUESTS <small>RECEIVED</small></h2>
                            <center>
                                
                                    <div id="sacrequest"> 
									</div>
									<!--/div-->
                                    </center>
									<br><br><br>
									 <h2>&nbsp &nbsp INVITES<small>RECEIVED</small></h2>
									 <center>
                                
                                    <div id="sacrequest7"> 
									</div>
									<!--/div-->
                                    </center>
                                </div>
                            </div>

                            

                  

            
            </body>
        

   
  
  </html>
