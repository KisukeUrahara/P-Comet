
   <!DOCTYPE html>
    <html lang="en">
            <head>
                    <title>p-comet</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-

scale=1.0, user-scalable=no">
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
                                    var content = '<form class="user-input">' +
                                            '<label>Email or username</label>' +
                                            '<div class="input-control text"><input type="text" 

name="user"></div>' +
                                            '<label>Password</label>'+
                                            '<div class="input-control password"><input type="password" 

name="password"></div>' +
                                            '<div class="input-control checkbox"><label><input 

type="checkbox" name="c1" unchecked/><span class="check"></span>Remember me</label></div>'+
                                            '<div class="form-actions">' +
                                            '<button class="button success"><i class="icon-enter"></i> 

Login</button>&nbsp;'+
                                            '<button class="button" type="button" onclick="$.Dialog.close

()"><i class="icon-cancel"></i> Cancel</button> '+
                                            '</div>'+
                                            '</form>';

                                    $.Dialog.title("Login");
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
                                    var content = '<form class="user-input">' +
                                            '<label>Full name</label>' +
                                            '<div class="input-control text"><input type="text" 

name="name"></div>' +
                                            '<label>Email ID</label>' +
                                            '<div class="input-control text"><input type="text" 

name="email"></div>' +
                                            '<label>Password</label>'+
                                            '<div class="input-control password"><input type="password" 

name="password"></div>' +                                                  
                                            '<div class="form-actions">' +
                                            '<button class="button success"><i class="icon-book"></i><i 

class="icon-pencil"></i> Register</button>&nbsp;'+
                                            '<button class="button" type="button" onclick="$.Dialog.close

()"><i class="icon-cancel"></i> Cancel</button> '+
                                            '</div>'
                                            
                                            '</form>';

                                    $.Dialog.title("Register at P-Comet");
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
            <nav class = "navigation-bar dark fixed-top">
<div class="container">

                <div class="navigation-bar-content">
                    <a href="index.html" class="element image-button image-left place-left">P-Comet<img 

src="images/gsletterP12.png"></a>
             

                    <a class="pull-menu" href="#"></a> <!-- To create button for expanding top menu !-->

                    <ul class="element-menu place-right">

                        <span class="element-divider"></span>
                        <li><button class="element" href="index.html"><i class="icon-home"></i>

  Home</button></li>
                        <span class="element-divider"></span>
                        <li> <button class="element" id="Login"><i class="icon-enter"></i> 

Login</button></li>
                        <span class="element-divider"></span>
                        <li> <button class="element" id="Register1"><i class="icon-book"></i><i 

class="icon-pencil"></i> Register</button></li><span class="element-divider"></span>                       

                                                   
                    </ul>
                            
                    </div>
                </div>
                </div>
            </nav>
        </div> <!-- end of nav bar code !-->
<br><br><br>
 
<div class="container">

<div class="grid fluid">
                <div class="row">
<div class="span6">
<div class="text-center padding10 border" style="background-color: rgba(255,255,255,0.9); text-color: 

black;"><br><br><br><center><h1>WELCOME TO <img src="images/logotext.png"/></h1><br><h2>The new and 

upcoming social media platform for <b><em>project collaboration</em></b> between students from various 

schools, colleges, and universities.</h2>
<h2><br><em>Get started in three simple, easy steps, given below.</em></h2>

</center><br><br><br></div></div>

<div class="span6">
        <div class="carousel" id="carousel1" data-role="carousel" data-height="545" >
        
       
            <div class="slide">
         
<img src="images/4.jpg" class="cover polaroid bd-black"/>

        
                    </div>
             
            <div class="slide mixed">
            
            <img src="images/1.jpg" class="cover polaroid bd-black"/>
<div class="description">
xdifjxdfgjsdofgjsd oghj dfog dkjf ldfgkj </div>
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

<footer background="images/back<?php echo "".date("w"); ?>.jpg" background-size: 

cover;">
<div class="container"><br>
<center><h2 class="panel-header" style="color:black;">CURRENTLY TRENDING PROJECTS</h2></center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class = "container">
            <nav class="navigation-bar light fixed-bottom">
<div class="container">
<div class="navigation-bar-content">
 <a class="element place-right">Copyright 2014, webdev team at Student Nokia Developer</a>
</div></div>
            </nav>
            </div>
</div></footer></footer>
            
    </html>
