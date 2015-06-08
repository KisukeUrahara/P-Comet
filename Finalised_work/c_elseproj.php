<?php session_start();
if(!isset($_SESSION['myusername']))
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

 <script src="docs/js/hitua.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script type="text/javascript" language="javascript">
	 $(document).ready(function() 
	 {
           var aa=window.location.search.substring(1);
   aa=aa.substring(5);
   var b=parseInt(aa);
		   
		   $.ajax( 
		   {
            url:"http://localhost/Projectx/Finalised_work/get_projdata.php?suid="+b,	
			dataType: "json",
             success:function(data) 
			 {
				$.each(data, function(i, item){
				if(item.Admin_id==b)
				{
					if(item.stat==1)
					{
				$("#hehehe").append("<a href=\"http://localhost/Projectx/Finalised_work/projectDisp.php?pid="+item.Project_id+"\" class=\"list\"><div class=\"list-content bd-black\">\n <img src=\""+item.vidurl+"\" class=\"icon\">\n <br><div class=\"data\">\n<span class=\"text-muted place-right\" style=\"font-size: 12px;\">"+item.tsp+"</span><span class=\"list-title place-left\">"+item.project_name+"</span><br><br> </div>\n</div> </a>");
				
					}
					else
					{
					$("#hehe1").append("<a href=\"http://localhost/Projectx/Finalised_work/projectDisp.php?pid="+item.Project_id+"\" class=\"list\"><div class=\"list-content bd-black\">\n <img src=\""+item.vidurl+"\" class=\"icon\">\n <br><div class=\"data\">\n<span class=\"text-muted place-right\" style=\"font-size: 12px;\">"+item.tsp+"</span><span class=\"list-title place-left\">"+item.project_name+"</span><br><br> </div>\n</div> </a>");
				
					}
				}
				else
				{
					if(item.stat==1)
					{
				$("#hehehe1").append("<a href=\"http://localhost/Projectx/Finalised_work/projectDisp.php?pid="+item.Project_id+"\" class=\"list\"><div class=\"list-content bd-black\">\n <img src=\""+item.vidurl+"\" class=\"icon\">\n <br><div class=\"data\">\n<span class=\"text-muted place-right\" style=\"font-size: 12px;\">"+item.tsp+"</span><span class=\"list-title place-left\">"+item.project_name+"</span><br><br> </div>\n</div> </a>");
				
					}
					else
					{
					$("#hehe12").append("<a href=\"http://localhost/Projectx/Finalised_work/projectDisp.php?pid="+item.Project_id+"\" class=\"list\"><div class=\"list-content bd-black\">\n <img src=\""+item.vidurl+"\" class=\"icon\">\n <br><div class=\"data\">\n<span class=\"text-muted place-right\" style=\"font-size: 12px;\">"+item.tsp+"</span><span class=\"list-title place-left\">"+item.project_name+"</span><br><br> </div>\n</div> </a>");
				
					}
				}
			});
			$("#hikari1").html("<a href=\"c_othersprof.php?Uid="+b+"\"><i class=\"icon-book\"></i>View Profile</a>");
			  
                                        
                                        
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
    top:54px;
    
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
        <a class="element image-button image-left" href="#">
            <?php echo $_SESSION['myusername'];?>
           <img src="<?php echo $_SESSION['dpurl'];?>" alt=""/>
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
                                <li><a href="newsfeed.php"><i class="icon-home"></i>Home</a></li>
                                
                                <li class="active"><a href="http://localhost/Projectx/view_profile.php"><i class="icon-user-2"></i>My Profile</a></li>

                                                    <li> <a class="dropdown-toggle" href="#"><i class="icon-book"></i>Projects</a>
                                    <ul class="dropdown-menu" data-role="dropdown" style="display: none;">
                                        <li><a href="addproject.html">Start Project</a></li>
                                        <li><a href="">My Projects</a></li>
                                             

                                                     </ul></li>
    <li><a href="search.php"><i class="icon-search"></i>Search</a>
                                    </li>



                                       
                                        
                                        <li class="divider"></li>
                                        
                                        
                                    
                                
                               

                                
                            </ul>
                        </nav>
                        </div>




    <div class="container">
<br>
   <div class="panel bg-transparent" style="width: 81%;"><center>
        
            
            <h1>
                    
                    USER<small class="on-right">PROJECTS</small>
                </h1></center>
           
                    <div class="tab-control" data-effect="fade" data-role="tab-control">
                        <ul class="tabs">
                            <li class="active"><a href="#tab1"><i class="icon-user-2"></i> Projects</a></li>
                            <div id="hikari1"> </div>
                            
                            <!-- when you click on this button, then all the fields must become mutable, or, the "readonly" tag must be removed so the fields can be edited. Also, an additional option for editing password must become optional -->
                             
                        </ul>
                       
                                
							
                            <div class="frame" id="tab2">
							
							<div class="grid">
							<center><legend>As Admin</legend></center>
							<div class="row">
							<div class="span5"><legend>Active Projects</legend>
                           
                                 
                                    
                                 <div class="listview">
								 <div id="hehehe">
								 </div>
								 </div>
                                    
                                   </div>
								   

                                    <div class="offset1 span5"><legend>Past Projects</legend>
                                 <div class="listview">
                                    <div id="hehe1"></div>
                                    </div></div>
									<center><legend>As Member</legend></center>
									<div class="row">
							<div class="span5">
                           
                                 
                                    
                                 <div class="listview">
								 <div id="hehehe1">
								 </div>
								 </div>
                                    
                                   </div>
								   </div>

                                    <div class="offset1 span5">
                                 <div class="listview">
                                    <div id="hehe12"></div>
                                    </div></div>
                                    

                            </div>
                            
                       
                                </div>
                         

                            

                  

            
            </body>
        

   
  
  </html>


