<?php

$firstname = $_POST['firstname'];
?>

<!DOCTYPE html>
<html>
<head>

  <title>SRO Audiences Web</title>
  
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="ourtheme.css" />
  <link rel="stylesheet" href="jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile.structure-1.4.2.min.css" /> 
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script> 
  <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script> 

</head>
				
			
<body>   
    
<div data-role="page" id="HOMEPAGE">

<div data-theme="a" data-role="header" data-position="fixed">

<h3>SRO Audience</h3>

</div>

<div data-role="content">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<a  href="#CURRENTSHOWS" data-role="button" data-theme="#" data-icon="arrow-r">
Current Shows
</a>
<br>
<a data-role="button" data-theme="#"data-icon="arrow-r" href="#">
Scrapbook
</a>
<br>
<a data-role="button" data-theme="#"data-icon="arrow-r" href="#">
About Us?
</a>
<br>
<a data-role="button" data-theme="#"data-icon="arrow-r" href="#">
Contact Us
</a>

<div data-theme="a" data-role="footer" data-position="fixed">
<h3>www.sroaudiences.com</h3>
<div data-role="navbar" data-iconpos="top">

</div>
</div>
</div>
</div>




<!-- Current Shows Page -->

<div data-role="page" id="CURRENTSHOWS">

<div data-theme="a" data-role="header" data-position="fixed">

<h3>SRO Audience</h3>
</div>

<div data-role="content">

<?php echo = Your first name is <strong>" . $firstname . "</strong>"; ?>
</div>
</div>

<div data-role="navbar" data-iconpos="bottom">
<ul>
<li>

<a href="#HOMEPAGE" data-transition="fade" data-theme="a" data-icon="">
Menu
</a>
</li>
<li>
<a href="#CURRENTSHOWS" data-transition="fade" data-theme="a" data-icon="">
Current Shows
</a>
</li>
<li>
<a href="#SCRAPBOOK" data-transition="fade" data-theme="a" data-icon="">
Scrapbook
</a>
</li>
<li>
<a href="#ABOUTUS" data-transition="fade" data-theme="a" data-icon="">
About Us
</a>
</li>
</ul>
</div>
</div>

<div data-role="navbar" data-iconpos="left">
<ul>
<li>
<a href="#HOMEPAGE" data-transition="fade" data-theme="a" data-icon="back">
CLICK HERE TO GO TO HOMEPAGE
</a>
</li>
</ul>
</div>
</div>

<br />
<br />
<br />

<ul data-role="listview" data-inset="true" data-divider-theme="a">

<div align="center">

<h1> CURRENT SHOWS </h1>

</div>

<li data-theme="a">
<a href="#LOOSEWOMENPAGE" data-transition="slide">
LOOSE WOMEN
</a>
</li>
<li data-theme="a">
<a href="#THEGRAHAMNORTONSHOWPAGE" data-transition="slide">
THE GRAHAM NORTON SHOW
</a>
</li>
<li data-theme="a">
<a href="#THEJONATHANROSSSHOWPAGE" data-transition="slide">
THE JONATHAN ROSS SHOW
</a>
</li>
<li data-theme="a">
<a href="#ALANCARRCHATTYMANPAGE" data-transition="slide">
ALAN CARR: CHATTY MAN
</a>
</li>
<li data-theme="a">
<a href="#COUNTDOWNPAGE" data-transition="slide">
COUNTDOWN
</a>
</li>
</ul>

<div data-role="footer" data-theme="a" data-position="fixed">
<h3>
www.sroaudiences.com
</h3>
</div>
</div>



</div>
</div>
</body>
</html>