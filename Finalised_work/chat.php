<?php session_start();
if(!isset($_SESSION['myusername']))
header("location:http://localhost/Projectx/Finalised_work/index.html"); ?>
<html>
<head>
<meta charset="utf-8">
    <title>p-comet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
	
<script type="text/javascript">

var t = setInterval(function(){get_chat_msg()},5000);


//
// General Ajax Call
//
      
var oxmlHttp;
var oxmlHttpSend;
      
function get_chat_msg()
{

    if(typeof XMLHttpRequest != "undefined")
    {
        oxmlHttp = new XMLHttpRequest();
    }
    else if (window.ActiveXObject)
    {
       oxmlHttp = new ActiveXObject("Microsoft.XMLHttp");
    }
    if(oxmlHttp == null)
    {
        alert("Browser does not support XML Http Request");
       return;
    }
    
    oxmlHttp.onreadystatechange = get_chat_msg_result;
    oxmlHttp.open("GET","chat_recv_ajax.php",true);
    oxmlHttp.send(null);
}
     
function get_chat_msg_result()
{
    if(oxmlHttp.readyState==4 || oxmlHttp.readyState=="complete")
    {
        if (document.getElementById("DIV_CHAT") != null)
        {
            document.getElementById("DIV_CHAT").innerHTML =  oxmlHttp.responseText;
            oxmlHttp = null;
        }
        var scrollDiv = document.getElementById("DIV_CHAT");
        scrollDiv.scrollTop = scrollDiv.scrollHeight;
    }
}

      
function set_chat_msg()
{

    if(typeof XMLHttpRequest != "undefined")
    {
        oxmlHttpSend = new XMLHttpRequest();
    }
    else if (window.ActiveXObject)
    {
       oxmlHttpSend = new ActiveXObject("Microsoft.XMLHttp");
    }
    if(oxmlHttpSend == null)
    {
       alert("Browser does not support XML Http Request");
       return;
    }
    
    var url = "chat_send_ajax.php";
    var strname="<?php echo $_SESSION['myusername'];?>";
    var strmsg="";
    if (document.getElementById("txtname") != null)
    {
       // strname = document.getElementById("txtname").value;
        document.getElementById("txtname").readOnly=true;
    }
    if (document.getElementById("txtmsg") != null)
    {
        strmsg = document.getElementById("txtmsg").value;
        document.getElementById("txtmsg").value = "";
    }
    
    url += "?username=" + strname + "&msg=" + strmsg;
    oxmlHttpSend.open("GET",url,true);
    oxmlHttpSend.send(null);
}
</script>
<style>
.container{
    width:600px;
    float:left;
    margin-right:10px;
    position: absolute;
    right: 0px;
    left:100px;
    top:56px;
    
    }
 </style>
            
            
	
	
</head>
<body class="metro" style="background-image: url('images/grayback.jpg');background-repeat: no-repeat; background-size: cover;">
<div class="navigation-bar dark fixed-top" style="z-index:1;">
    <div class="navigation-bar-content">
        <a href="newsfeed.php" class="element image-button image-left place-left">P-Comet<img src="images/gsletterP12.png"></a>

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
            <img src="<?php $_SESSION['dpurl'];?>"/>
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
    <div class="container" style="width:100%"><center>
		<h1>
			
				CHAT
        </h1>

		
		<div style="border-right: lightslategray thin solid; border-top: lightslategray thin solid;
        border-left: lightslategray thin solid; width: 500px; border-bottom: lightslategray thin solid;
        height: 500px">
        <table style="width:100%; height:100%">
            <tr>
                <td colspan="2" class="bg-dark fg-white" style="font-weight: bold; font-size: 16pt;  background-color: #5882FA; color: blue; font-family: verdana, arial;
                    text-align: left">
                    <table  style="font-size: 12pt; color: black; font-family: Verdana, Arial">
                        <tr>
                            <td  class="bg-dark fg-white" style="width: 100px">
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
                    <input id="txtmsg" style="width: 350px" type="text" name="msg" /></td>
                <td style="width: 85px">
                    <input id="Submit2" style="font-family: verdana, arial" type="button" value="Send" onclick="set_chat_msg()"/></td>
            </tr>
            <tr>
                <td colspan="1" style="font-family: verdana, arial; text-align: center; width: 350px;">
                    </td>
                <td colspan="1" style="width: 85px; font-family: verdana, arial; text-align: center">
                </td>
            </tr>
        </table>
    </div>
		
		
    </div>

</body>
</html>