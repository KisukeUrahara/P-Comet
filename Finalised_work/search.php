<?php session_start();
if(!isset($_SESSION['myusername']))
header("location:http://localhost/Finalised_work/index.html"); ?>

                            <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>P-Comet</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



<script type="text/javascript" language="javascript">
function searchppl()
{

var p=document.getElementById("tk1").value;
			var b= document.getElementById("tk2").value;
			var s=document.getElementById("tk3").value;
			var c= document.getElementById("tk4").value;
					
		$.ajax({
			url: "http://localhost/Projectx/search_db.php?person="+p+"&branch="+b+"&sem="+s+"&coll="+c , 
			dataType: "json", 
            success:function(data)
			{
				$("#hehehe").html("");
				$("#ajaxo").html("<ul class=\"dropdown-menu\" data-role=\"dropdown\" style=\"display: none;\"> <li class><a href=\"http://localhost/Projectx/preeti/docs/mp.php\">Start Project</a></li>    <li><a href=\"http://localhost/Projectx/Finalised_work/view_proj.php\">My Projects</a></li></ul>");
                                                     
				$.each(data, function(i, item){
				$("#hehehe").append("<a href=\"http://localhost/Projectx/Finalised_work/c_othersprof.php?Uid="+item.Uid+"\" class=\"list\"><div class=\"list-content bd-black\">\n <img src=\""+item.dpurl+"\" class=\"icon\">\n <br><div class=\"data\">\n<span class=\"list-title place-left\">"+item.Name+"</span><br><br> </div>\n</div> </a>");
			});
			
			}
			});
			}
			function searchproj()
{
var pa=document.getElementById("tkp1").value;
			var ba= document.getElementById("tkp2").value;
			var sa=document.getElementById("tkp3").value;
			
			//?person="+p+"&branch="+b+"&sem="+s+"&coll="+c

		
		$.ajax({
			url: "http://localhost/Projectx/searchproj.php?pname="+pa+"&pstream="+ba+"&pcoll="+sa , 
			dataType: "json", 
            success:function(pdata)
			{
			$("#hehehej").html("");
				$.each(pdata, function(i, item){
				$("#hehehej").append("<a href=\"http://localhost/Projectx/Finalised_work/projectDisp.php?pid="+item.Project_id+"\" class=\"list\"><div class=\"list-content bd-black\">\n <img src=\""+item.vidurl+"\" class=\"icon\">\n <br><div class=\"data\">\n<span class=\"list-title place-left\">"+item.project_name+"</span><br><br> </div>\n</div> </a>");
			});
			}
			});
			}
		
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
        
        
        <span class="element-divider"></span>
 
        
 
        
        <!--<span class="element-divider place-right"></span>
        <a class="element place-right" href="#"><span class="icon-locked-2"></span></a>-->

        </ul>

       
            <ul class="element-menu place-right">
            <span class="element-divider"></span>
        <a class="element image-button image-left" href="http://localhost/Projectx/view_profile.php">
            
            <img src="<?php echo $_SESSION['dpurl'];?>"/>
			<?php echo $_SESSION['myusername'];?>
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
                                <li class><a href="http://localhost/Projectx/Finalised_work/newsfeed.php"><i class="icon-home"></i>Home</a></li>
                                
                                <li><a href="#"><i class="icon-user-2"></i>My Profile</a></li>

                                                    <li> <a class="dropdown-toggle" href="#"><i class="icon-book"></i>Projects</a>
													<div id="ajaxo"></div>
                                    <!--<ul class="dropdown-menu" data-role="dropdown" style="display: none;">
                                        <li class><a href="http://localhost/Projectx/preeti/docs/mp.php">Start Project</a></li>
                                        <li><a href="http://localhost/Projectx/Finalised_work/view_proj.php">My Projects</a></li>
                                             

                                                     </ul>--></li>

                                                     <li class="active"><a href="#"><i class="icon-search"></i>Search</a>
                                    </li>


                                       
                                        
                                        <li class="divider"></li>
                                        
                                        
                                    
                                
                               

                                
                                  
                                
                            </ul>
                        </nav>
                        </div>

<div class="container">
<br>
						
                        <div class="panel bg-transparent" style="width:81%;"><center>
                      <h1>
                   
                    SEARCH<small class="on-right">for people or projects</small>
                </h1>

                        <div class="accordion" data-closeany="true" data-role="accordion">
						
						
						
	<div id="searchres">
    <div class="listview">	
	<div id="hehehe"></div>
	</div>
	<div class="accordion-frame">
	     <a class="heading active" href="#">

            <h3><center>Search For People</center></h3>
			<!--	 <form method="post" id="pplsearch">-->
        </a>
        <div class="content">

             <div class="input-control text">
			
                        <input type="text" id="tk1" name="person" placeholder="Enter the name of a person">
                        <button class="btn-search"></button>
                        </div>

                            <legend id="_radio"><i class="icon-equalizer on-left"></i>Filter your search by:</legend>
                            <div>
                            

                                
                                <div class="input-control checkbox default-style margin10" data-role="input-control">
                                    
                                </div>  <select id="tk2" name="branch" class="span6 valid">
                    <option value="CS">Computer Science and Engineering/</option>
                    <option value="EC">Electronics and Communication Engineering/Telicommunication Engineering</option>
                    <option value="EE">Electrical and Electronics Engineering</option>
                    <option value="ME">Mechanical Engineering</option>
                    <option value="CV">Civil Engineering</option>
                    <option value="BT">Biotechnology</option>
                    <option value="IS">Information Science Engineering</option>
                    <option value="TE">Telecom</option>
                 
                    <option selected="" value="-1">--Choose your Stream--</option>
                    </select><br>

                   
                                <div class="input-control checkbox default-style margin10" data-role="input-control">
                                    
                                </div> <select id="tk3" name="sem" class="span6 valid">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                                        
                    <option selected="" value="-1">--Choose your Year--</option>
                    </select><br>
                               <div id="hehehe"></div>
                                <div class="input-control checkbox default-style margin10" data-role="input-control">
                                    <label>
                                        College
                                        
                                    </label>
                                
                            </div><div class="input-control textarea" data-role="input-control fixed">
                                        <input id="tk4" type="text" name="coll"> 
                                    </div>
									<button onClick="searchppl()">Search</button>
									<!--</form>-->
                            
                                
        </div></div>
</div>
        <div class="accordion-frame">
        <a class="heading active" href="#">
           <h3><center> Search For Projects</center></h3>
		   

        </a>
        <div class="content">
        
             <div class="input-control text">
                        <input type="text" id="tkp1" name="pname" placeholder="Enter Project name"> 
                        <button class="btn-search"></button>
                        </div>

                           <legend id="_radio"><i class="icon-equalizer on-left"></i>Filter your search by:</legend>
                            <div>
                            
                                
                                <div class="input-control checkbox default-style margin10" data-role="input-control">
                                    <label>
                                        Stream
                                        
                                    </label>
                                </div> <select id="tkp2" name="pstream">
						<option value="Miscellaneous">Miscellanious</option>
  <option value="Medical">Medical</option>
  <option value="Military and Defense">Military</option>
  <option value="Social">Social</option>
  <option value="Educational">Education</option>
  <option value="Research">Research</option>
  <option selected="" value="-1">--Choose Project Target Audience--</option>
</select><br>
                                
									
												<br>
                               
                                <div class="input-control checkbox default-style margin10" data-role="input-control">
                                    <label>
                                        College
                                        </label>
										</div><div class="input-control textarea" data-role="input-control fixed">
                                        <input type="text" id="tkp3" name="pcoll" style="width: 500px;"> 
                                    </div>
									<button onClick="searchproj()">Search</button>
									
                                
                            
    </div>
    </div>

                     

                       
                         
                       
                     
                    <br>   <br>                 

                   
 

                 

                </div>
             <div class="listview">	
	<div id="hehehej"></div>
	</div>
        
 </div>
 </div>
                  

            
            </body>
        

   
  
  </html>



