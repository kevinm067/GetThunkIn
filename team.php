<!DOCTYPE html>
<html>
         <head>
                  <link rel="stylesheet" href="rotating-card.css">
                  <link rel="stylesheet" href="/css/bootstrap/css/bootstrap.css">
                  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<style>
		 .teamcards1 {
 -    -webkit-column-count: 4; /* Chrome, Safari, Opera */
 -    -moz-column-count: 4; /* Firefox */
 -    column-count: 4;
 -
 -    -webkit-column-gap: 40px; /* Chrome, Safari, Opera */
 -    -moz-column-gap: 40px; /* Firefox */
 -    column-gap: 40px;
 -
 -    -webkit-column-rule: 4px outset #f44336; /* Chrome, Safari, Opera */
 -    -moz-column-rule: 4px outset #f44336; /* Firefox */
 -    column-rule: 4px outset #f44336;
 -}
		 .teamcards2 {
 -    -webkit-column-count: 4; /* Chrome, Safari, Opera */
 -    -moz-column-count: 4; /* Firefox */
 -    column-count: 4;
 -
 -    -webkit-column-gap: 40px; /* Chrome, Safari, Opera */
 -    -moz-column-gap: 40px; /* Firefox */
 -    column-gap: 40px;
 -
 -    -webkit-column-rule: 4px outset #f44336; /* Chrome, Safari, Opera */
 -    -moz-column-rule: 4px outset #f44336; /* Firefox */
 -    column-rule: 4px outset #f44336;
 -}
	</style>
	<style>
		
body {
	margin-top: 60px;
	font-size: 14px;
	font-family: "Helvetica Nueue",Arial,Verdana,sans-serif;
	background-color: #E5E9ED;
}
.btn:hover,
.btn:focus,
.btn:active{
    outline: 0 !important;
}
/* entire container, keeps perspective */
.card-container {
	  -webkit-perspective: 800px;
   -moz-perspective: 800px;
     -o-perspective: 800px;
        perspective: 800px;
        margin-bottom: 30px;
}
/* flip the pane when hovered */
.card-container:not(.manual-flip):hover .card,
.card-container.hover.manual-flip .card{
	-webkit-transform: rotateY( 180deg );
-moz-transform: rotateY( 180deg );
 -o-transform: rotateY( 180deg );
    transform: rotateY( 180deg );
}


.card-container.static:hover .card,
.card-container.static.hover .card {
	-webkit-transform: none;
-moz-transform: none;
 -o-transform: none;
    transform: none;
}
/* flip speed goes here */
.card {
	 -webkit-transition: -webkit-transform .5s;
   -moz-transition: -moz-transform .5s;
     -o-transition: -o-transform .5s;
        transition: transform .5s;
-webkit-transform-style: preserve-3d;
   -moz-transform-style: preserve-3d;
     -o-transform-style: preserve-3d;
        transform-style: preserve-3d;
	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	-webkit-backface-visibility: hidden;
   -moz-backface-visibility: hidden;
     -o-backface-visibility: hidden;
        backface-visibility: hidden;
	position: absolute;
	top: 0;
	left: 0;
	background-color: #FFF;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.14);
}

/* front pane, placed above back */
.front {
	z-index: 2;
}

/* back, initially hidden pane */
.back {
		-webkit-transform: rotateY( 180deg );
   -moz-transform: rotateY( 180deg );
     -o-transform: rotateY( 180deg );
        transform: rotateY( 180deg );
        z-index: 3;
}

.back .btn-simple{
    position: absolute;
    left: 0;
    bottom: 4px;
}
/*        Style       */


.card{
    background: none repeat scroll 0 0 #FFFFFF;
    border-radius: 4px;
    color: #444444;
}
.card-container, .front, .back {
	width: 100%;
	height: 420px;
	border-radius: 4px;
}
.card .cover{
    height: 105px;
    overflow: hidden;
    border-radius: 4px 4px 0 0;
}
.card .cover img{
    width: 100%;
}
.card .user{
    border-radius: 50%;
    display: block;
    height: 120px;
    margin: -55px auto 0;
    overflow: hidden;
    width: 120px;
}
.card .user img{
    background: none repeat scroll 0 0 #FFFFFF;
    border: 4px solid #FFFFFF;
    width: 100%;
}

.card .content{
    background-color: rgba(0, 0, 0, 0);
    box-shadow: none;
    padding: 10px 20px 20px;
}
.card .content .main {
    min-height: 160px;
}
.card .back .content .main {
    height: 215px;
}
.card .name {
    font-size: 22px;
    line-height: 28px;
    margin: 10px 0 0;
    text-align: center;
    text-transform: capitalize;
}
.card h5{
    margin: 5px 0;
    font-weight: 400;
    line-height: 20px;
}
.card .profession{
    color: #999999;
    text-align: center;
    margin-bottom: 20px;
}
.card .footer {
    border-top: 1px solid #EEEEEE;
    color: #999999;
    margin: 30px 0 0;
    padding: 10px 0 0;
    text-align: center;
}
.card .footer .social-links{
    font-size: 18px;
}
.card .footer .social-links a{
    margin: 0 7px;
}
.card .footer .btn-simple{
    margin-top: -6px;
}
.card .header {
    padding: 15px 20px;
    height: 90px;
}
.card .motto{
    border-bottom: 1px solid #EEEEEE;
    color: #999999;
    font-size: 14px;
    font-weight: 400;
    padding-bottom: 10px;
    text-align: center;
}

.card .stats-container{
	width: 100%;
	margin-top: 50px;
}
.card .stats{
	display: block;
	float: left;
	width: 33.333333%;
	text-align: center;
}

.card .stats:first-child{
	border-right: 1px solid #EEEEEE;
}
.card .stats:last-child{
	border-left: 1px solid #EEEEEE;
}
.card .stats h4{
	font-weight: 300;
	margin-bottom: 5px;
}
.card .stats p{
	color: #777777;
}
/*      Just for presentation        */

.title{
    color: #506A85;
    text-align: center;
    font-weight: 300;
    font-size: 44px;
    margin-bottom: 90px;
    line-height: 90%;
}
.title small{
    font-size: 17px;
    color: #999;
    text-transform: uppercase;
    margin: 0;
}
.space-30{
	height: 30px;
	display: block;
}
.space-50{
    height: 50px;
    display: block;
}
.space-200{
    height: 200px;
    display: block;
}
.white-board{
    background-color: #FFFFFF;
    min-height: 200px;
    padding: 60px 60px 20px;
}
.ct-heart{
    color: #F74933;
}

 pre.prettyprint{
    background-color: #ffffff;
    border: 1px solid #999;
    margin-top: 20px;
    padding: 20px;
    text-align: left;
}
.atv, .str{
    color: #05AE0E;
}
.tag, .pln, .kwd{
     color: #3472F7;
}
.atn{
  color: #2C93FF;
}
.pln{
   color: #333;
}
.com{
    color: #999;
}

.btn-simple{
    opacity: .8;
    color: #666666;
    background-color: transparent;
}

.btn-simple:hover,
.btn-simple:focus{
    background-color: transparent;
    box-shadow: none;
    opacity: 1;
}
.btn-simple i{
    font-size: 16px;
}

.navbar-brand-logo{
    padding: 0;
}
.navbar-brand-logo .logo{
    border: 1px solid #333333;
    border-radius: 50%;
    float: left;
    overflow: hidden;
    width: 60px;
}
.navbar .navbar-brand-logo .brand{
    color: #FFFFFF;
    float: left;
    font-size: 18px;
    font-weight: 400;
    line-height: 20px;
    margin-left: 10px;
    margin-top: 10px;
    width: 60px;
}
.navbar-default .navbar-brand-logo .brand{
    color: #555;
}


/*       Fix bug for IE      */

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
    .front, .back{
        -ms-backface-visibility: visible;
        backface-visibility: visible;
    }

    .back {
        visibility: hidden;
        -ms-transition: all 0.2s cubic-bezier(.92,.01,.83,.67);
    }
    .front{
        z-index: 4;
    }
    .card-container:not(.manual-flip):hover .back,
    .card-container.manual-flip.hover .back{
        z-index: 5;
        visibility: visible;
    }
}
</style>
        <div class="teamcards1">
		 <div class="card-container">
         <div class="card">
             <div class="front">
                 <div class="cover">
                     <img src="http://kingofwallpapers.com/abstract/abstract-006.jpg"/>
                 </div>
                 <div class="user">
                     <img class="img-circle" src="https://pbs.twimg.com/profile_images/725677511070208002/wNF2siRT.jpg"/>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h3 class="name">Luca Galassi</h3>
                         <p class="profession">Project Leader</p>

                         <p class="text-center">"Guys We are behind! Get back to work! 10 Seconds Later: Did you see the big game last night?"</p>
                     </div>
                     <div class="footer">
                         <div class="rating">
                             <i class="fa fa-mail-forward"></i> Tap Or Click
                         </div>
                     </div>
                 </div>
             </div> <!-- end front panel -->
             <div class="back">
                 <div class="header">
                     <h5 class="motto">"Get Work Done, Then Have Fun!"</h5>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h4 class="text-center">About Luca Galassi</h4>
                         <p class="text-center">I cover everything that is needed in this project. If you would like to contact me or need help with anything please go to <a href="https://community.thunkable.com">community.thunkable.com</a> and message @lucatunes</p>
                         <div class="stats-container">
                             <div class="stats">
                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="footer">
                     <div class="social-links text-center">
                         <a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                     </div>
                 </div>
             </div> <!-- end back panel -->
         </div> <!-- end card -->
     </div> <!-- end card-container -->

		 <div class="card-container">
         <div class="card">
             <div class="front">
                 <div class="cover">
                     <img src="images/rotating_card_thumb3.png"/>
                 </div>
                 <div class="user">
                     <img class="img-circle" src="images/rotating_card_profile.png"/>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h3 class="name">Sander Jochems</h3>
                         <p class="profession">Head Of Techincal Services</p>

                         <p class="text-center">"Im Really Lazy And Didnt Feel Like Writing A Bio"</p>
                     </div>
                     <div class="footer">
                         <div class="rating">
                             <i class="fa fa-mail-forward"></i> Tap Or Click
                         </div>
                     </div>
                 </div>
             </div> <!-- end front panel -->
             <div class="back">
                 <div class="header">
                     <h5 class="motto">"Sander Send Me A Motto On The Forums"</h5>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h4 class="text-center">About Sander Jochems</h4>
                         <p class="text-center">Web Devloper, PHP Pro, Thunkable Expert, And More! You can contact me on the Thunkable Community Forms, Message @Sander0542.</p>
                         </div>

                     </div>
                 </div>
                 <div class="footer">
                     <div class="social-links text-center">
                         <a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                     </div>
                 </div>
             </div> <!-- end back panel -->
         </div> <!-- end card -->
     </div> <!-- end card-container -->
				 <div class="card-container">
         <div class="card">
             <div class="front">
                 <div class="cover">
                     <img src="http://allswalls.com/images/abstract-wallpaper-22.jpg"/>
                 </div>
                 <div class="user">
                     <img class="img-circle" src="http://community.thunkable.com/uploads/default/original/2X/0/015fd61bf40015820b713295c7011a17c7ec8edf.png"/>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h3 class="name">Jackson Abney</h3>
                         <p class="profession">Lesson Writer</p>

                         <p class="text-center">"An Alaskan Android Developer with two apps on the Google Play store."</p>
                     </div>
                     <div class="footer">
                         <div class="rating">
                             <i class="fa fa-mail-forward"></i> Tap Or Click
                         </div>
                     </div>
                 </div>
             </div> <!-- end front panel -->
             <div class="back">
                 <div class="header">
                     <h5 class="motto">"Keep trying and things will either go right or honorably wrong."</h5>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h4 class="text-center">About Jackson Abney</h4>
                         <p class="text-center">Lesson Writer, Network Specialist. Tells artist to get to work while sitting in bed wearing pajamas watching TV and eating Pizza. You can contact me on the Thunkable Community Fourms @MrLazy113</p>

                         <div class="stats-container">
                             <div class="stats">

                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="footer">
                     <div class="social-links text-center">
                         <a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                     </div>
                 </div>
             </div> <!-- end back panel -->
         </div> <!-- end card -->
     </div> <!-- end card-container -->
	 <div class="card-container">
         <div class="card">
             <div class="front">
                 <div class="cover">
                     <img src="https://static.pexels.com/photos/370/lights-night-dark-abstract.jpeg"/>
                 </div>
                 <div class="user">
                     <img class="img-circle" src="http://community.thunkable.com/uploads/default/optimized/2X/0/0a2f5d14f89dfb0e7926b106c23be113308055f9_1_400x500.jpeg"/>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h3 class="name">Kevin Mehta</h3>
                         <p class="profession">Technical Services</p>

                         <p class="text-center">"Fact #234583738637
If i won the award for laziness , I would send somebody to pick it up for me.
Btw you didn't even read the fact number."</p>
                     </div>
                     <div class="footer">
                         <div class="rating">
                             <i class="fa fa-mail-forward"></i> Tap Or Click
                         </div>
                     </div>
                 </div>
             </div> <!-- end front panel -->
             <div class="back">
                 <div class="header">
                     <h5 class="motto">"Be Lazy"</h5>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h4 class="text-center">About Kevin Mehta</h4>
                         <p class="text-center">A Website creator, Ethical Hacker, small youtuber Link to my Channel where i teach hacks for iOS, App developer and a friendly guyContact me at thunkable community @Kevin</p>

                         <div class="stats-container">
                             <div class="stats">
                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="footer">
                     <div class="social-links text-center">
                         <a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                     </div>
                 </div>
             </div> <!-- end back panel -->
         </div> <!-- end card -->
     </div> <!-- end card-container -->
        <div class="teamcards2">
		 <div class="card-container">
         <div class="card">
             <div class="front">
                 <div class="cover">
                     <img src="http://kingofwallpapers.com/abstract/abstract-026.jpg"/>
                 </div>
                 <div class="user">
                     <img class="img-circle" src="http://community.thunkable.com/user_avatar/community.thunkable.com/domhnall/120/561_1.png"/>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h3 class="name">Domhnall O' Hanlon</h3>
                         <p class="profession">Lead Lesson Writer</p>

                         <p class="text-center">"Coming Soon!"</p>
                     </div>
                     <div class="footer">
                         <div class="rating">
                             <i class="fa fa-mail-forward"></i> Tap Or Click
                         </div>
                     </div>
                 </div>
             </div> <!-- end front panel -->
             <div class="back">
                 <div class="header">
                     <h5 class="motto">"Coming Soon!"</h5>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h4 class="text-center">f</h4>
                         <p class="text-center">Thunkable Expert, Lesson Writer. </p>

                         <div class="stats-container">
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="footer">
                     <div class="social-links text-center">
                         <a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                     </div>
                 </div>
             </div> <!-- end back panel -->
         </div> <!-- end card -->
     </div> <!-- end card-container -->
		 <div class="card-container">
         <div class="card">
             <div class="front">
                 <div class="cover">
                     <img src="images/rotating_card_thumb3.png"/>
                 </div>
                 <div class="user">
                     <img class="img-circle" src="images/rotating_card_profile.png"/>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h3 class="name">Inna Corman</h3>
                         <p class="profession">Product Manager</p>

                         <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                     </div>
                     <div class="footer">
                         <div class="rating">
                             <i class="fa fa-mail-forward"></i> Auto Rotation
                         </div>
                     </div>
                 </div>
             </div> <!-- end front panel -->
             <div class="back">
                 <div class="header">
                     <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h4 class="text-center">Job Description</h4>
                         <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                         <div class="stats-container">
                             <div class="stats">
                                 <h4>235</h4>
                                 <p>
                                     Followers
                                 </p>
                             </div>
                             <div class="stats">
                                 <h4>114</h4>
                                 <p>
                                     Following
                                 </p>
                             </div>
                             <div class="stats">
                                 <h4>35</h4>
                                 <p>
                                     Projects
                                 </p>
                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="footer">
                     <div class="social-links text-center">
                         <a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                     </div>
                 </div>
             </div> <!-- end back panel -->
         </div> <!-- end card -->
     </div> <!-- end card-container -->
		 <div class="card-container">
         <div class="card">
             <div class="front">
                 <div class="cover">
                     <img src="images/rotating_card_thumb3.png"/>
                 </div>
                 <div class="user">
                     <img class="img-circle" src="images/rotating_card_profile.png"/>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h3 class="name">Inna Corman</h3>
                         <p class="profession">Product Manager</p>

                         <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                     </div>
                     <div class="footer">
                         <div class="rating">
                             <i class="fa fa-mail-forward"></i> Auto Rotation
                         </div>
                     </div>
                 </div>
             </div> <!-- end front panel -->
             <div class="back">
                 <div class="header">
                     <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h4 class="text-center">Job Description</h4>
                         <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                         <div class="stats-container">
                             <div class="stats">
                                 <h4>235</h4>
                                 <p>
                                     Followers
                                 </p>
                             </div>
                             <div class="stats">
                                 <h4>114</h4>
                                 <p>
                                     Following
                                 </p>
                             </div>
                             <div class="stats">
                                 <h4>35</h4>
                                 <p>
                                     Projects
                                 </p>
                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="footer">
                     <div class="social-links text-center">
                         <a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                     </div>
                 </div>
             </div> <!-- end back panel -->
         </div> <!-- end card -->
     </div> <!-- end card-container -->
		 <div class="card-container">
         <div class="card">
             <div class="front">
                 <div class="cover">
                     <img src="images/rotating_card_thumb3.png"/>
                 </div>
                 <div class="user">
                     <img class="img-circle" src="images/rotating_card_profile.png"/>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h3 class="name">Inna Corman</h3>
                         <p class="profession">Product Manager</p>

                         <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                     </div>
                     <div class="footer">
                         <div class="rating">
                             <i class="fa fa-mail-forward"></i> Auto Rotation
                         </div>
                     </div>
                 </div>
             </div> <!-- end front panel -->
             <div class="back">
                 <div class="header">
                     <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h4 class="text-center">Job Description</h4>
                         <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                         <div class="stats-container">
                             <div class="stats">
                                 <h4>235</h4>
                                 <p>
                                     Followers
                                 </p>
                             </div>
                             <div class="stats">
                                 <h4>114</h4>
                                 <p>
                                     Following
                                 </p>
                             </div>
                             <div class="stats">
                                 <h4>35</h4>
                                 <p>
                                     Projects
                                 </p>
                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="footer">
                     <div class="social-links text-center">
                         <a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                     </div>
                 </div>
             </div> <!-- end back panel -->
         </div> <!-- end card -->
     </div> <!-- end card-container -->
</div>

		
