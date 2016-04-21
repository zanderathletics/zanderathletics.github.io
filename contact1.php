<!DOCTYPE html>
<html lang="en">
<head>
<title>Fitness by Alexander | Contact</title>
<meta name="description" content="Scottsdale Personal Trainer and Phoenix, AZ.  Specializing in Golf Fitness, Coaching for Basketball, Weight Loss, and Private Personal Training in Scottsdale." />
<meta name="keywords" content="best personal trainer Scottsdale, personal training scottsdale, Scottsdale Personal Trainer, Method Athlete, Scottsdale Golf Fitness, scottsdale personal trainer, fitness Scottsdale Arizona, fitness Phoenix Arizona, Scottsdale wellness, Scottsdale Personal Training, Golf Personal Trainer, Fitness Trainer Scottsdale, Fitness Training, Phoenix Personal Training, Scottsdale BootCamp, Nutrition Program" />
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Kozuka_Gothic_Pro_OpenType_300.font.js" type="text/javascript"></script>
<script src="js/Kozuka_Gothic_Pro_OpenType_500.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('form#contact-form').submit(function() {
		$('#result').html('<img src="http://www.tutorialstag.com/examples/images/loader.gif" class="loading-img" alt="loader image">').fadeIn();
		var input_data = $('form#contact-form').serialize() + '&ajax=1';

		$.ajax({
			type: "POST",
			url:  "http://fitnessbyalexander.com/contact1.php",
			data: input_data,
			success: function(msg){
			$('.loading-img').remove(); //Removing the loader image because the validation is finished
				$('<div class="message">').html(msg).appendTo('div#result').hide().fadeIn('slow'); //Appending the output of the php validation in the html div
			}				   
		});	
		return false;
	});
});	
</script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page6">
<!--==============================header=================================-->
<header>
  <div class="menu-row">
    <div class="main">
      <nav class="wrapper">
          <ul class="menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="aboutme.html">About Me</a></li>
          <li><a href="testimonials.html">Testimonials</a></li>
          <li><a class="active" href="contact1.php">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="row-bot">
    <div class="row-bot-bg">
      <div class="main">
        <div class="wrapper">
        <h1><img src="images/alex-logo.png" width="195" height="223" alt="alexander-koutoudis"/></h1>
        <div id="call">Free Consultation (973) 715-6478</div>
 		 <img src="images/slogan1.png" alt="personal-trainer-scottsdale" />
        </div>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
<section id="content">
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <article class="grid_4">
          <h3>Independence Gym</h3>
          <div class="img-indent-bot">
            <figure class="img-border2">
              <iframe width="250" height="182" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=2980+North+Hayden+Road,+Scottsdale,+AZ&amp;aq=0&amp;oq=2980+North+Hayden+Road,+Scottsdale&amp;sll=37.0625,-95.677068&amp;sspn=33.02306,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=2980+N+Hayden+Rd,+Scottsdale,+Maricopa,+Arizona+85251&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
            </figure>
            <div class="clear"></div>
          </div>
          <dl>
            <dt class="p1">2980 North Hayden Road</dt>
            <p>Scottsdale, AZ 85251</p>
            <dd><span>Phone:</span> (973) 715-6478</dd>
            <dd><span>Email:</span> <a href="mailto:fitnessbyalexander@gmail.com">alex@fitnessbyalexander.com</a></dd>
            <dd><span>Hours:</span></dd> 
            Monday - Thursday 6:00AM - 7:00PM
            <p style="margin-left:76px;">Friday 6:00AM - 5:00PM
            <br />Saturday 8:00AM - 1:00PM</p>    
        </dl>  
        </article>
        <article class="grid_8">
          <h3>Contact Alex Koutoudis</h3>
              <form id="contact-form" action="contact1.php" method="post" enctype="multipart/form-data">
              <div id="result"></div>
            <fieldset>
				<label><span class="text-form">Your Name:<br /></span><input class="text" name="name" type="text" value="" /><br /></label>
				<label><span class="text-form">Your Email:<br /></span><input class="text" name="email" type="text" value="" /><br /></label>
<div style="clear:left;">
					
					<div class="text-form">Your Message:<br /></div><textarea class="text-form" name="msg"></textarea><br />
				</div>
				<input type="hidden" name="browser_check" value="true" />
                  <div class="buttons" style="float:left; margin-left:93px;"><input type="submit" class="button" style="background:url(../images/button-tail.gif); color:#FFF; font-weight:bold; width:92px;" value="send"></div>
                </div>
              </div>
            </fieldset>
          </form>
        </article>
      </div>
    </div>
  </div>
</section>
<!--==============================footer=================================-->

  <div class="main">
    <div class="aligncenter"><a href="http://www.acefitness.org/ " target="_blank"><img src="images/ace.png"/></a><a href="http://www.facebook.com/PTbyAlexander" target="_blank"><img src="images/facebook.png"></a><a href="http://healthpromotion.asu.edu/" target="_blank"><img src="images/ASU.png" /></a>
      <p class="p0">Copyright 2012-2015 &copy; <a href="index.html">Fitness by Alexander.</a> All Rights Reserved</p>
    
  </div>
 
<script type="text/javascript">Cufon.now();</script>
</body>
</html>