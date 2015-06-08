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


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
								
								</script>
<script>

				$(document).ready(function(){
				var flaga=false;
				 var aa=window.location.search.substring(1);
   aa=aa.substring(4);
   var b=parseInt(aa);
   
		   $("#xmen1").html("<button id=\"sbmt2\" hidden=\"hidden\" onClick=\"sendmsg()\"></button>");
		   document.getElementById('sbmt2').style.visibility='hidden';
		   $("#bluez").html("<button id=\"Submit2\" onClick=\"bypass()\">Send</button>");
						$.ajax({ 
								url: "projson.php?pid="+aa ,
								
								dataType: "json" ,
								success: function(data){
								//alert("bye");
								$("#proj0").html("<img src='"+data.vidurl+"'\>");
								$("#proj1").html(data.project_name);
								$("#proj2").html(data.Stream);
								$("#proj3").html(data.Description);
								
								if(data.Admin_id==<?php echo $_SESSION['Uid'];?>)
								{
								$("#dayum").html("<form method=\"post\" action=\"http://localhost/Projectx/Finalised_work/updatestat.php?pid="+data.Project_id+"\"><input type=\"radio\" name=\"statusbro\" value=\"1\">In Process<br><br><input type=\"radio\" name=\"statusbro\" value=\"0\">Completed<br><br><input type=\"submit\" value=\"Set Status\"></form>");
								}
								else{
								$("#shima1").html("Participate");
								$("#shima").html("<button id=\"luffy\" class=\"large success\"><a href=\"http://localhost/Projectx/Finalised_work/upd_request.php?pid="+aa+"&Uid="+<?php echo $_SESSION['Uid'];?>+"\">Send Request</button>");
								}
										}
										});
                        
						
						$.ajax({
								url:"http://localhost/Projectx/Finalised_work/projmem_display.php?pid="+aa,
								dataType: "json" ,
								success:function(stuff){
								
								
								$.each(stuff, function(ab, haha){
								if(haha.uid==<?php echo $_SESSION['Uid'];?>)
								{	
									flaga=true;
								}
								$("#tk1").append("<a href=\"http://localhost/Projectx/Finalised_work/c_othersprof.php?Uid="+haha.uid+"\">"+haha.uname+"</a><br><br>");
								
						});
						}
						});
						
						if(flaga)
						{
							
							document.getElementById('ourchat').innerHTML="";
						}
						});
						function bypass()
{

	document.getElementById("sbmt2").click();
}
function sendmsg()
						{
						var aa4=window.location.search.substring(1);
   aa4=aa4.substring(4);
						var hehe=document.getElementById('txtmsg').value;
						var txtmsg="<?php echo $_SESSION['myusername'];?>"+":  "+hehe+"\n";
						$.ajax({
								url: "http://localhost/Projectx/pchat/texting.php?msg="+txtmsg+"&cpid="+aa4 ,
								dataType: "text" ,
								success: function(hell){
								
							$("#DIV_CHAT").html(hell);
								
								},
								error:function(){
								alert("damn bro");
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
 
        <span class="element-divider"></span><a class="element brand" href="addproject.html"><span class="icon-book"></span><span class="icon-plus"></span></a><span class="element-divider"></span>
        <a class="element brand" href="http://localhost/Projectx/Finalised_work/chat.php"><span class="icon-comments-2"></span></a>
        <span class="element-divider"></span>
        
        <a class="element brand" href="#"><span class="icon-alarm"></span></a>
        <span class="element-divider"></span>
        </ul>

       
            <ul class="element-menu place-right">
            <span class="element-divider"></span>
        <a class="element image-button image-left" href="http://localhost/Projectx/view_profile.php">
            <?php echo $_SESSION['myusername'];?>
            <img src="<?php echo $_SESSION['dpurl'];?>" alt=""/>
        </a>
        <span class="element-divider"></span>
        <a class="element place-right" href="http://localhost/Projectx/logout.php"><i class="icon-exit"></i> Sign Out</a>
        </ul>


        
     
                            
        
    </div>
    </div>



<br><br><br><br>
 
<div style="width:20%;">
<nav class="sidebar light" style="z-index:-1; background-color: rgba(255,255,255,0.0);">
                            <ul>
                                <li class="title"><center>Quick Access Menu</center></li>
                                <li class><a href="http://localhost/Projectx/Finalised_work/newsfeed.php"><i class="icon-home"></i>Home</a></li>
                                
                                <li><a href="http://localhost/Projectx/view_profile.php"><i class="icon-user-2"></i>My Profile</a></li>

                                                    <li> <a class="dropdown-toggle" href="http://localhost/Projectx/Finalised_work/view_proj.php"><i class="icon-book"></i>Projects</a>
                                    <ul class="dropdown-menu" data-role="dropdown" style="display: none;">
                                        <li class><a href="http://localhost/Projectx/Finalised_work/add.php">Start Project</a></li>
                                        <li><a href="http://localhost/Projectx/Finalised_work/view_proj.php">My Projects</a></li>
                                             

                                                     </ul></li>

                                                     <li><a href="http://localhost/Projectx/Finalised_work/search.php"><i class="icon-search"></i>Search</a>
                                    </li>


                                       
                                        
                                        <li class="divider"></li>
                                        
                                        
                                    
                                
                               

                                <li class="title"><center>More Options</center></li>
                                <li><a href="http://localhost/Projectx/Finalised_work/chat.php"><i class="icon-comments-2"></i>Private Message System</a></li>
                                <li><a href="#"><i class="icon-alarm"></i>View Notifications</a></li>
                                  
                                
                            </ul>
                        </nav>
						
                        </div>
<div id="xmen1"></div>						
<div id="xmen">
<div class="container"><br>
                        <div style="width:81%"><center>

                        <div class="panel">
                        <div class="panel-content"><br><h2><div id="proj0"> </div></h2><br><br></div>
                        <div class="notice marker-on-top bg-dark fg-white"><h1><div id="proj1"></div>
                        </div>
                        <br>
                        <table class="table bg-transparent">
                        
                           



                        <tbody>
                        <tr><td class="text-center"><h3>Domain:  </h3></td><td class="text-center"><h3><form>
                                    <div class="input-control textarea" data-role="input-control fixed">
                                        <div id="proj2"></div>
										</div>
                               
                        <tr><td class="text-center"><h3>Description:  </h3></td><td class="text-center"><h3>
                                   
                                        <div id="proj3"> </div> 
                                    </div>
                                
                        <tr><td class="text-center"><h3><div id="shima1"></div></h3></td><td class="text-center"><h3><center> 
                                   <div id="proj4"><div id="shima"><!--<button id="luffy" class="large success" onclick="requesto()">Send Request</button>--></div><div>
								   <br> <tr><td class="text-center"><h3>Members:</h3></td>
								  <td class="text-center"><h3>
                                    <div id="tk1"></div>
									
                     
                        </tbody>
                           <div class="place-left" id="dayum"></div>
                        <tfoot></tfoot>
                    </table>


      
</div>
<div id="ourchat">
<div style="border-right: lightslategray thin solid; border-top: lightslategray thin solid;
        border-left: lightslategray thin solid; width: 500px; border-bottom: lightslategray thin solid;
        height: 500px" >
        <table style="width:100%; height:100%">
            <tr>
                <td colspan="2" class="bg-dark fg-white" style="font-weight: bold; font-size: 16pt;  background-color: #5882FA; color: blue; font-family: verdana, arial;
                    text-align: left">
                    <table  style="font-size: 12pt; color: black; font-family: Verdana, Arial">
                        <tr>
                            <td  class="bg-dark fg-white" style="width: 800px">
                                Name: <?php echo $_SESSION['myusername'];?> </td>
                            
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="vertical-align: middle;" valign="middle" colspan="2">
                    <div style="width: 480px; height: 400px; border-right: darkslategray thin solid; border-top: darkslategray thin solid; font-size: 10pt; border-left: darkslategray thin solid; border-bottom: darkslategray thin solid; font-family: verdana, arial; overflow:scroll; text-align: left;" id="DIV_CHAT">
                    
					</div>
                </td>
            </tr>
            <tr>
                <td style="width: 310px">
                    <input id="txtmsg" style="width: 350px" type="text" name="msg"></td>
                <td style="width: 85px">
                   
            </tr>
            <tr>
                <td colspan="1" style="font-family: verdana, arial; text-align: center; width: 350px;">
                    </td>
                <td colspan="1" style="width: 85px; font-family: verdana, arial; text-align: center">
				<div id="bluez"></div>
                </td>
				
            </tr>
        </table>
    </div>
</div>


        </div>


</div>
                  
         </div>   
           
		  
		   
		   </body>
        

   
 
  </html>
