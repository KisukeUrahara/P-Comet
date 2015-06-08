
   <!DOCTYPE html>
    <html lang="en">
            <head>
                    <title>P-Comet</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
                    <link rel="icon" type="image/png" href="images/gsletterP12.png">
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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


<script>
$(function(){
$("#Login1, #Login2").on('click', function(){
                            $.Dialog({
                                overlay: true,
                                shadow: true,
                                flat: true,
                                draggable: true,
                                icon: '<img src="images/gsletterP12.png">',
                                title: 'Flat window',
                                content: '',
                                padding: 10,
                                onShow: function(_dialog){
                                    var content =  '<form method="post" action="http://localhost/Projectx/checklogin.php" class="user-input">' +
                                            '<center><label><i class="icon-mail"></i> Email ID</label>' +
                                            '<div class="input-control text"><input type="email" required="required" name="email1" id="email" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+[\.]{1}[A-Za-z]{2,4}$"></div>' +
                                            '<label><i class="icon-key-2"></i> Password</label>'+
                                            '<div class="input-control password"><input type="password" required="required" name="mypassword"></div>' +
                                            '<div class="input-control checkbox"></div>'+
                                            '<div class="form-actions">' + '<button class="large info" style="box-shadow: 2px 2px 2px #000000;" type="submit"><i class="icon-enter"></i> Login</button>&nbsp<hr>'+
                                            
                                           
                                            '</div></center>'+
                                            '</form>';
											
											
										
											
                                   
								   $.Dialog.title("Login");
                                    $.Dialog.content(content);
                                }
                            });
                        });


$("#Register1, #Register2, #Register3").on('click', function(){
                            $.Dialog({
                                overlay: true,
                                shadow: true,
                                flat: true,
                                draggable: true,
                                icon: '<img src="images/gsletterP12.png">',
                                title: 'Flat window',
                                content: '',
                                padding: 10,
                                onShow: function(_dialog){
                                    var content = '<form id="myForm" method="post" action="http://localhost/Projectx/dispuserbro.php" class="user-input">' +
'<label id="err" style="color:red; font-size:10px"></label>' +
                                            '<center><label><i class="icon-user-2"></i> Name <color=red>*</color></label>' +
                                            '<div class="input-control text"><input type="text" required="required" name="Uname" id="name1" pattern="^[A-Za-z ]+$"></div>' +
                                            '<label><i class="icon-mail"></i> Email ID <color=red>*</color></label>' +
                                            '<div class="input-control text"><input type="email" required="required" name="email" id="email1" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+[\.]{1}[A-Za-z]{2,4}$"></div>' +
                                            
'<label></enter><i class="icon-key-2"></i> Password (must be alphanumeric)<color=red>*</color></label>'+
                                            '<div class="input-control password"><input type="password" id="pass" required="required" name="pwd" pattern="^((?=.*)(?=.*[a-zA-Z])[a-zA-Z0-9!@#$%&*]{6,20})$"></div>' +
                                            
'<label></enter><i class="icon-phone"></i> Contact No.</label>'+
                                            '<div class="input-control text"><input type="text" name="contact" id="phn"></div>' +

                                            '<div class="form-actions">' +
                                            '<button class="large success" type="submit" id="sbmt1" style="box-shadow: 2px 2px 2px #000000;"><i class="icon-book"></i><i class="icon-pencil"></i> Register</button>&nbsp;' +'<hr><button class="command-button danger" id="authobutton" onclick="handleAuthClick()" style="box-shadow: 2px 2px 2px #000000;"> Sign up with  <i class="icon-google-plus"></i></button><hr>'+
                                            '</div></center>'
                                            
                                            '</form>';

                                    $.Dialog.title("Register (* fields are mandatory)");
                                    $.Dialog.content(content);
                                }
                            });
                        });});

</script>


<script>
				$(document).ready(function(){
						$.ajax({
								url: 'trendingSource.php' ,
								dataType: 'json' ,
								success: function(data){
										//alert('in success');
										$.each(data,function(i,item){
												$('#naruto').append("<ul><div class=\"listview\"><a href=\"#\" class=\"list\"><div class=\"list-content bd-black bg-white\"><img src='"+item.vidurl+"'class=\"icon\"/><div class='data'><span class=\"text-muted place-right\" style=\"font-size: 12px;\">"+item.tsp+"</span><span class=\"list-title place-left\">Name:&nbsp &nbsp "+item.project_name+"</span><br><span class=\"list-title place-left\">Started by:&nbsp &nbsp "+item.admin+"</span><br><span class=\"list-title place-left\">Domain:&nbsp &nbsp "+item.stream+" </span><br></div></div></a></div></ul>");
												
										});
								} ,
								error: function(){
									
								}
						});
				});
 </script>

                   
            </head>

            <div class="container" id="body-container">

        <header>
            <nav class = "navigation-bar dark fixed-top" style="width:100%;">
<div class="container">

                <div class="navigation-bar-content">
                    <a href="index.html" class="element image-button image-left place-left">P-Comet<img src="images/gsletterP12.png"></a>
             

                    <a class="pull-menu" href="#"></a> <!-- To create button for expanding top menu !-->

                    <ul class="element-menu place-right">

                       
                        <span class="element-divider"></span>
                        <li> <button class="element" id="Login1"><i class="icon-enter"></i> Login</button></li>
                        <span class="element-divider"></span>
                        <li> <button class="element" id="Register1"><i class="icon-book"></i><i class="icon-pencil"></i> Register</button></li><span class="element-divider"></span>          
                        <li> <a class="element" href="about.html"><i class="icon-info-2"></i> About</a></li><span class="element-divider"></span>                                                                   
                    </ul>
                            
                    </div>
                </div>
                </div>
            </nav>
        </div> 
</header>

            <body class = "metro">
     

     

		
            <br><br>


            


<div class="panel padding10 bg-transparent" id="masthead" style="background-image: url('images/cometbish4.jpg');  background-repeat: no-repeat; background-size:cover;"><div class="container"><br><br><br><br><br><br><br><br><center><div style="font-family: 'Open Sans Light';"><a href="index.html"><image src="images/logopc.png" ></image> <div class="panel fg-black bg-transparent"><div class="panel-content"><h1><em></em></h1></div></div></a><br><button id="Login2" class="command-button large inverse" style="box-shadow: 4px 4px 2px #000000;"> <i class="icon-enter on-left"></i>
&nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</button>&nbsp;&nbsp;<button id="Register3" class="command-button large inverse" style="box-shadow: 4px 4px 2px #000000;"> <i class="icon-book on-left"></i><i class="icon-pencil on-left"></i>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</button>
</center><br><br><br><br><br><br><br><br><br></div></div>

<style>


/*.fadeIn {
 
        opacity:0;
        -webkit-animation:fadeIn ease-in 1;
        -moz-animation:fadeIn ease-in 1;
        -o-animation:fadeIn ease-in 1;
        animation:fadeIn ease-in 1;
        -webkit-animation-fill-mode:forwards;
        -moz-animation-fill-mode:forwards;
        -o-animation-fill-mode:forwards;
        animation-fill-mode:forwards;
}
/* Animation Times - Time for image to fade in
---------------------------------------------------- */
/*.fadeIn-3s {
        -webkit-animation-duration:1.5s;
        -moz-animation-duration:1.5s;
        -o-animation-duration:1.5s;
        animation-duration:1.5s;
}

/* Animation Delay - Time for image to be delayed
---------------------------------------------------- */

/* Key Frames
---------------------------------------------------- */
/*@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-o-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }*/
.command-button
{
	-webkit-opacity: 0.75;
  -moz-opacity: 0.75;
  opacity: 0.75;
-webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -ms-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;

}

.command-button:hover
{
	-webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1; 
}
</style>

          </body>
          <body class="metro" style="background-image: url('images/grayback.jpg'); background-size: cover; background-repeat: no-repeat; ">
        
 
<div class="container">

<div class="grid fluid">
                <div class="row">
<div class="span6">
<div class="text-center padding10 border" style="background-color: rgba(255,255,255,0.0); text-color: black;"><center><br><br><br><h1><div style="font-family: 'Open Sans Light';">WELCOME TO <div class="text-alert">P-COMET!</div></div></h1><br><h2>The new and upcoming social media platform for <strong>project collaboration</strong> between students from various schools, colleges, and universities.</h2>
<h2><br>Get started in three simple, easy steps below.</h2><br><br><br>

</center></div></div>

<div class="span6">
        <div class="carousel" id="carousel1" data-role="carousel" data-height="532" >
        
       
            <div class="slide">
         
<img src="images/4.jpg" class="cover"/>

        
                    </div>
             
            <div class="slide">
            
            <img src="images/1.jpg" class="cover"/>
           </div>
            
             <div class="slide">
           
            <img src="images/6.jpg" class="cover"/>
            </div>
             
             
                                
            <a class="controls left"><i class="icon-arrow-left-5 fg-white smaller" style="background: gray;
          
           
           border-radius: 100%"></i></a>
            <a class="controls right"><i class="icon-arrow-right-5 fg-white smaller" style="background: gray;
           
           
           border-radius: 100%"></i></a>
           
        </div>
      

</div>
</div></div></div>
</div> <!-- end of carousel container !-->

<div style="background-color: lightBlue; background-size: cover; opacity: 0.92;"><br>
<div class="container" >

<div class="grid fluid">
                <div class="row">
                    <div class="span4">
                      
                        <div class="panel">
                            
                            <div class="panel-content ol-lightBlue">
                            <center>
                            <image src="images/adduser2.jpg" style=" width:50%; height: 50%;"/></div></center>
                                
                            
                            <div class="notice marker-on-top bg-black fg-white">
                               <center><button class="panel-header success" id="Register2" hint-position="bottom" data-hint="Click here to create an account.">

    Sign up (click here!)

</p></center>
                            </div>
                        </div>
                    </div>

                    <div class="span4">
                        
                        <div class="panel ">
                            
                            <div class="panel-content"><center>
                            
                            <image src="images/addproj2.jpg" style="width:50%; height: 50%;"/></div></center>
                                
                            
                            <div class="notice marker-on-top bg-black fg-white">
                                <center><p class="panel-header text-muted" hint-position="bottom" data-hint="A <code>Project</code> on this website is similar to a <code>Page</code> on facebook.">Start a project</p></center>
                            </div>
                        </div>
                    </div>

                    <div class="span4">
                        
                        <div class="panel">
                            
                            <div class="panel-content">
                            <center>
                            <image src="images/connect3.jpg" style=";width:50%; height: 50%;"/></div></center>
                                
                            
                            <div class="notice marker-on-top bg-black fg-light">
                                <center><p class="panel-header text-muted" hint-position="bottom" data-hint="Get your friends on board with your new project!">Get connected</p></center>
                            </div>
                        </div>
                    </div>
                </div>
                
</div>
            </div>

<br>



            
</div>
            

<!--<footer style="background-image: url('images/back2.jpg'); background-size: cover;">-->
<div id="f1" style="background-color: rgba(123,234,45,0.5); background-size: cover;">
<div class="container"><br>
<center><h2>Top and trending projects of the week</h2>
        <div class="container">
      
                           <style>
#scroller{height:100%;margin:0;padding:0;line-height:30px;position:relative;}
#scroller ul{float:right;height:100%;padding:10 0 0 10px;list-style-position:inside;}
#scrollerWrapper{height:100%; width:100%;margin:0px;overflow:hidden;}
</style>
<script>
$(document).ready(function(){
    var speed = 3;
    var items, scroller = $('#scroller');
    var width = 0;
    scroller.children().each(function(){
        width += $(this).outerWidth(true);
    });
    scroller.css('width', width);
    scroll();
    function scroll(){
        items = scroller.children();
        var scrollWidth = items.eq(0).outerWidth();
        scroller.animate({'left' : 0 - scrollWidth}, scrollWidth * 100 / speed, 'linear', changeFirst);
    }
    function changeFirst(){
        scroller.append(items.eq(0).remove()).css('left', 0);
        scroll();
    }
});
</script>
</head>
<body>
<center><div class="bg-transparent" id="scrollerWrapper">
<ul id="scroller"><center>
                                <div id="naruto" style="width:100%;">
                                    <!--  <ul><div class="listview">
                                    <a href="#" class="list">
                                        <div class="list-content bd-black bg-white">
                                            <img src="images/addproj2.jpg" class="icon">
                                            <div class="data">
                                                <span class="text-muted place-right" style="font-size: 12px;">1, 1, 2014</span><span class="list-title place-left">Name: </span><br>
                                                <span class="list-title place-left">Started by: </span><br>
                                                
                                                <span class="list-title place-left">Domain: </span><br>
                                                <span class="list-title place-left">Privacy:</span><br>
                                                
                                                <button class="small info">View Page</button> 
                                            </div>
                                        </div>
                                    </a></div></ul>
                                     <ul><div class="listview">
                                    <a href="#" class="list">
                                        <div class="list-content bd-black bg-white">
                                            <img src="images/addproj2.jpg" class="icon">
                                            <div class="data">
                                                <span class="text-muted place-right" style="font-size: 12px;">1, 1, 2014</span><span class="list-title place-left">Name: </span><br>
                                                <span class="list-title place-left">Started by: </span><br>
                                                
                                                <span class="list-title place-left">Domain: </span><br>
                                                <span class="list-title place-left">Privacy:</span><br>
                                                
                                                <button class="small info">View Page</button> 
                                            </div>
                                        </div>
                                    </a></div></ul>
                                     <ul><div class="listview">
                                    <a href="#" class="list">
                                        <div class="list-content bd-black bg-white">
                                            <img src="images/addproj2.jpg" class="icon">
                                            <div class="data">
                                                <span class="text-muted place-right" style="font-size: 12px;">1, 1, 2014</span><span class="list-title place-left">Name: </span><br>
                                                <span class="list-title place-left">Started by: </span><br>
                                                
                                                <span class="list-title place-left">Domain: </span><br>
                                                <span class="list-title place-left">Privacy:</span><br>
                                                
                                                <button class="small info">View Page</button> 
                                            </div>
                                        </div>
                                    </a></div></ul>
                                    <ul><div class="listview">
                                    <a href="#" class="list">
                                        <div class="list-content bd-black bg-white">
                                            <img src="images/addproj2.jpg" class="icon">
                                            <div class="data">
                                                <span class="text-muted place-right" style="font-size: 12px;">1, 1, 2014</span><span class="list-title place-left">Name: </span><br>
                                                <span class="list-title place-left">Started by: </span><br>
                                                
                                                <span class="list-title place-left">Domain: </span><br>
                                                <span class="list-title place-left">Privacy:</span><br>
                                                
                                                <button class="small info">View Page</button> 
                                            </div>
                                        </div>
                                    </a></div></ul> -->
									</div></center>
                                </ul></div>

                                   </center>
                                    

                            </div>
                            
                       <br>
                                </div>

</div>



            
            </div>
</div></div>


<script type="text/javascript">
var apiKey='AIzaSyBKmb1ckJssgixVcva9Vsoi2Q5aQg3GtJQ';
var clientId='1020314509781-9uffvulfnr2fgmvef61d920am198e9c2.apps.googleusercontent.com';

var scopes='https://www.googleapis.com/auth/plus.me https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile';
function handleClientLoad()
{
	gapi.client.setApiKey(apiKey);
	window.setTimeout(checkAuth,1);
	}
	function checkAuth(){
	gapi.auth.authorize({client_id: clientId, scope: scopes, immediate: true},handleAuthResult());
	}
	function handleAuthResult(authResult)
	{
		var authorizeButton=document.getElementById('authobutton');
		if(authResult)
		{
			authorizeButton.style.visibility='hidden';
			console.log("hi1");
			//authorizeButton.onclick=handleAuthClick;
			
			makeApiCall();
			
			}
			else{
			//authorizeButton.style.visibility='';
			authorizeButton.onclick=handleAuthClick;
	}
	}
	function handleAuthClick(event)
	{
		gapi.auth.authorize({client_id: clientId, scope: scopes, immediate: false},handleAuthResult);
		return false;
	}
	function logResponse(resp)
	{
		console.log(resp);
	}
	function makeApiCall()
	{
		gapi.client.load('oauth2','v2',function(){
		console.log("hi3");
		var request=gapi.client.oauth2.userinfo.get();
		console.log("hi4");
		
		request.execute(function(logResponse){
		console.log("hi5");
		document.getElementById('name1').value=logResponse.name;
		document.getElementById('email1').value=logResponse.email;
		//document.getElementById('verified_email').value=logResponse.verified_email;
		//document.getElementById('ext_id').value=logResponse.id;
		console.log(logResponse.email);
		console.log(logResponse.id);
		console.log(logResponse.picture);
		console.log("hishgfg");
		document.getElementById("sbmt1").click();
		});
	});
	gapi.client.load('plus','v1',function(){
	var request=gapi.client.plus.people.get({
	'userId':'me'
	});
	request.execute(function(logResponse){
	
	console.log("hiyo");
	console.log(logResponse.displayName);
	console.log(logResponse.picture);
	console.log(logResponse.email);
	console.log("crap");
	console.log(logResponse);
	});
	});
	}
	</script>
	<script src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>
</body>
<footer id="f2" class="fg-light">
<div class="container"><br>
<p class="text-muted place-left">Copyright &copy; 2014, webdev team at Student Nokia Developer</p><p class="text-muted place-right" style="font-size: 16px;"><right>Created using Metro UI CSS Bootstrap</right></p><br><br></div>

</footer>
            
    </html>
