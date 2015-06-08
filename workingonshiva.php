  <!DOCTYPE html>
    <html lang="en">
            <head>
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

<script>
$(function(){
$("#Login").on('click', function(){
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
                                    var content = '<form method="POST" action="checklogin.php" class="user-input">' +
                                            '<center><label><i class="icon-user-2"></i> Enter your Name</label>' +
                                            '<div class="input-control text"><input type="text" required="required" name="myusername"></div>' +
                                            '<label><i class="icon-key-2"></i> Password</label>'+
                                            '<div class="input-control password"><input type="password" required="required" name="mypassword"></div>' +
                                            '<div class="input-control checkbox"><label><input type="checkbox" name="remember" unchecked/><span class="check"></span>Remember me</label></div>'+
                                            '<div class="form-actions">' +
                                            '<input type="submit" value="Login">'+
                                           
                                            '</div></center>'+
                                            '</form>';

                                    $.Dialog.title("Login to your P-Comet account");
                                    $.Dialog.content(content);
                                }
                            });
                        });


$("#Register1, #Register2").on('click', function(){
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
                                    var content = '<form class="user-input" method="POST" action="dispuserbro.php">' +
                                            '<center><label><i class="icon-user-2"></i> Name</label>' +
                                            '<div class="input-control text"><input type="text" required="required" name="Uname"></div>' +
                                            '<label><i class="icon-mail"></i> Email ID</label>' +
                                            '<div class="input-control text"><input type="text" required="required" name="email"></div>' +
                                            '<label></enter><i class="icon-key-2"></i> Password</label>'+
                                            '<div class="input-control password"><input type="password" required="required" name="pwd"></div>' +
                                            '<label></enter><i class="icon-phone"></i> Contact No.</label>'+
                                            '<div class="input-control text"><input type="text" name="contact"></div>' +

                                            '<div class="form-actions">' +
                                            '<input type="submit" value="Submit">'+
                                            '</div></center>'
                                            
                                            '</form>';

                                    $.Dialog.title("Create a new account");
                                    $.Dialog.content(content);
                                }
                            });
                        });});

</script>

                    <style>
                   
#body-container
{
    background-image: url('images/back1.jpg');

    background-size: cover;
}

                        
                    </style>
            </head>

            <body class = "metro">
     
        <div class="container" id="body-container">

        <header>
            <nav class = "navigation-bar dark fixed-top">
<div class="container">

                <div class="navigation-bar-content">
                    <a href="index.html" class="element image-button image-left place-left">P-Comet<img src="images/gsletterP12.png"></a>
             

                    <a class="pull-menu" href="#"></a> <!-- To create button for expanding top menu !-->

                    <ul class="element-menu place-right">

                        <span class="element-divider"></span>
                       


                        <span class="element-divider"></span>
                        <li> <button class="element" id="Login"><i class="icon-enter"></i> Login</button></li>
                        <span class="element-divider"></span>
                        <li> <button class="element" id="Register1"><i class="icon-book"></i><i class="icon-pencil"></i> Register</button></li><span class="element-divider"></span>                                                                          
                    </ul>
                            
                    </div>
                </div>
                </div>
            </nav>
        </div> <!-- end of nav bar code !-->
<br><br><br></header>
 
<div class="container">

<div class="grid fluid">
                <div class="row">
<div class="span6">
<div class="text-center padding10 border" style="background-color: rgba(255,255,255,0.9); text-color: black;"><center><h1>WELCOME TO <img src="images/logopc.png"/></h1><br><h2>The new and upcoming social media platform for <b><em>project collaboration</em></b> between students from various schools, colleges, and universities.</h2>
<h2><br><em>Get started in three simple, easy steps below.</em></h2>

</center></div></div>

<div class="span6">
        <div class="carousel" id="carousel1" data-role="carousel" data-height="543" >
        
       
            <div class="slide">
         
<img src="images/4.jpg" class="cover polaroid bd-black"/>

        
                    </div>
             
            <div class="slide mixed">
            
            <img src="images/1.jpg" class="cover polaroid bd-black"/>
           </div>
            
             <div class="slide">
           
            <img src="images/6.jpg" class="cover polaroid bd-black"/>
            </div>
             
             
            <a class="controls left"><i class="icon-arrow-left-3"></i></a>
            <a class="controls right"><i class="icon-arrow-right-3"></i></a>
           
        </div>
      

</div>
</div></div></div>
</div> <!-- end of carousel container !-->
<br>

<div class="container">

<div class="grid fluid">
                <div class="row">
                    <div class="span4">
                      
                        <div class="panel">
                            
                            <div class="panel-content">
                            <center><div class="image-container">
                            <image src="images/adduser.jpg"/></div></center>
                                
                            </div>
                            <div class="notice marker-on-top bg-black fg-white">
                               <center><p class="panel-header button success" id="Register2">

    Sign up (click here!)

</p></center>
                            </div>
                        </div>
                    </div>

                    <div class="span4">
                        
                        <div class="panel">
                            
                            <div class="panel-content">
                            <center><div class="image-container">
                            <image src="images/addproj.jpg"/></div></center>
                                
                            </div>
                            <div class="notice marker-on-top bg-black fg-white">
                                <center><p class="panel-header text-muted">Start a project</p></center>
                            </div>
                        </div>
                    </div>

                    <div class="span4">
                        
                        <div class="panel">
                            
                            <div class="panel-content">
                            <center><div class="image-container">
                            <image src="images/connect.jpg"/></div></center>
                                
                            </div>
                            <div class="notice marker-on-top bg-black fg-white">
                                <center><p class="panel-header text-muted">Get connected</p></center>
                            </div>
                        </div>
                    </div>
                </div><br>
                

            </div>




            
</div>
            

</body>


<!--<footer style="background-image: url('images/back2.jpg'); background-size: cover;">-->
<footer style="background-color: rgba(123,234, 0,0.4); background-size: cover;">
<div class="container"><br>
<center><h2><em>Top and trending projects of the week</em></h2></center>
        <div class="container">
        <div class="grid">
        <div class="row">
<div class="tile-group clearfix" style="width: 100%">
                        <div class="tile double ol-transparent"></div>
                    <div class="tile double ol-transparent"></div>
                    <div class="tile double ol-transparent"></div>
                    <div class="tile double ol-transparent"></div>
                
                </div>

                </div>

                  <div class="row">
<div class="tile-group clearfix" style="width: 100%">
                        <div class="tile double ol-transparent"></div>
                    <div class="tile double ol-transparent"></div>
                    <div class="tile double ol-transparent"></div>
                    <div class="tile double ol-transparent"></div>
                
                </div>

                </div>

                  <div class="row">
<div class="tile-group clearfix" style="width: 100%">
                        <div class="tile double ol-transparent"></div>
                    <div class="tile double ol-transparent"></div>
                    <div class="tile double ol-transparent"></div>
                    <div class="tile double ol-transparent"></div>
                
                </div>

                </div></div>

                
                </div>

</div>


<br><br><br>
            <nav class="navigation-bar light fixed-bottom">
<div class="container">
<div class="navigation-bar-content">
 <a class="element place-right">Copyright 2014, webdev team at Student Nokia Developer</a>
</div></div>
            </nav>
            </div>
</div></footer></footer>
            
    </html>
