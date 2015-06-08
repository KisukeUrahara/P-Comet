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

 <script type="text/javascript" language="javascript">
	 $(document).ready(function() 
	 {
           var aa=window.location.search.substring(1);
   aa=aa.substring(4);
   var b=parseInt(aa);
		   
		   $.ajax( 
		   {
            url:'http://localhost/Projectx/Finalised_work/get_prodata.php',	
			data:{Uid:aa},
			dataType: "json",
             success:function(data) 
			 {
			 
			  $("#sach1").html("<legend>Name: <b>"+data.Name+"</b></legend><br><legend>Email: <b>"+data.emailid+"</b></legend><br> <legend>College : <b>"+data.institute+"</b></legend><br><legend>Stream : <b>"+data.Stream+"</b></legend><br> <legend>Semester : <B>"+data.Year+"</b></legend><br>");
               $("#sach2").html(" <img src="+data.dpurl+" alt=''/> "); 
			  $("#tk5").html(data.Description); 
				$("#hikari").html("<a href=\"c_elseproj.php?suid="+b+"\"><i class=\"icon-book\"></i>View Projects</a>");							
                                        
             }
           });
		   $("#recruit").on('click', function(){
		   document.getElementById("boringo").setAttribute("action", "send_invite.php?uid="+aa);
		   $.ajax( 
		   {
            url:'http://localhost/Projectx/all_adminprojs.php',	
			
			dataType: "json",
             success:function(lol) 
			 {
			 
			 $.each(lol, function(i, item){
			  $("#lolz").append("<div class=\"listview\"><a href=\"#\" class=\"list\"><div class=\"list-content bd-black\"><img src=\""+item.vidurl+"\" class=\"icon\"><div class=\"data\"><br><span class=\"text-muted place-right\" style=\"font-size: 12px;\"><input name=\"invs[]\"  type=\"checkbox\" value=\""+item.Project_id+"\"><span class=\"check\"></span></span><span class=\"list-title place-left\">"+item.project_name+"</span><br><br></div></div></a><hr>");
			 });
			 $("#lolz").append("<input type=\"submit\" value=\"Send Invite\">");
			 
			 }
			 });
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
 
        <span class="element-divider"></span><a class="element brand" href="addproject.html"><span class="icon-book"></span><span class="icon-plus"></span></a><span class="element-divider"></span>
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
                                <li class="title fg-dark"><center>Quick Access Menu</center></li>
                                <li><a href="newsfeed.php"><i class="icon-home"></i>Home</a></li>
                                
                                <li><a href="#"><i class="icon-user-2"></i>My Profile</a></li>

                                                    <li> <a class="dropdown-toggle" href="view_proj.php"><i class="icon-book"></i>Projects</a>
                                    <ul class="dropdown-menu" data-role="dropdown" style="display: none;">
                                        <li><a href="http://localhost/Projectx/preeti/docs/add.php">Start Project</a></li>
                                        <li><a href="">My Projects</a></li>
                                             

                                                     </ul></li>
    <li><a href="search.html"><i class="icon-search"></i>Search</a>
                                    </li>



                                       
                                        
                                     
                                  
                                
                            </ul>
                        </nav>
                        </div>




    <div class="container">
<br>
   <div class="panel bg-transparent" style="width: 81%;"><center>
        
            
            <h1>
                    
                    USER<small class="on-right">PROFILE</small>
                </h1></center>
           
                    <div class="tab-control" data-effect="fade" data-role="tab-control">
                        <ul class="tabs">
                            <li class="active"><a href="#tab1"><i class="icon-user-2"></i> General</a></li>
							 
                             <!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
                          <script>

                       $('.list div').on('click',function(){
 
  $(this).addClass('selected');
});  

                           
						</script>

                
                           
                             
                        </ul>
                        <div class="frames">

                            <div class="frame clearfix" id="tab1" style="z-index: -1;">
                            <div class="grid"><div class="row">
                                <div class="span5 place-left">
                                    <div class="accordion-frame">
                                       <div id="sach2" class="imgholder"></div>
                                    <div class="udetail">
                                    </div>
                                    </div>
                                </div>
                                <div  class="span5">
                                    <div class="accordion-frame">
                         				<div id="sach1">
                                        
										 </div>
										 <legend id="sach5"> </legend>
											<div id="tk5"></div>
                                       </div>
                                    </div>
                                    
                                    <div class="span2">
                                    <div class="accordion-frame">
                                                                           
                                                                     
                               
                                        
                                       </div></div>
                                    </div>
                                    </div>
									<li class="place-right"><button class="recruit large primary" id="recruit"><i class="icon-star"></i> Recruit</button></li> <br><br>
                                    <center><form id="boringo" method="post"><div id="lolz"></div></form></center>
                                   
                                        </div>
                    
                                

                            <div class="frame" id="tab2"><div class="grid"><div class="row"><div class="span5"><legend>Active Projects</legend>
                           
                                 
                                    
                                 <div class="listview">
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
                                    </a></div></div>

                                    <div class="offset1 span5"><legend>Past Projects</legend>
                                 <div class="listview">
                                    
                                    
                                   </div></div>
                                    

                            </div>
                            
                       
                                </div>
                         

                            

                  

            
            </body>
        

   
  
  </html>


