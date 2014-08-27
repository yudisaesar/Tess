<?php session_start(); ?>
<?php require_once('Connections/koneksi.php'); ?>
<?php include('session-member.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Welcome to Quality Control PT Sandoz Indonesia</title>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!--
.style1 {font-size: 0.74px}
-->
</style>
<style type="text/css">
<!--
.style18 {color: #FFFFFF}
.style23 {color: #000000}
.style24 {font-size: 24px}
.style26 {font-size: 24px; color: #CAF0FF; }
.style27 {color: #0000FF}
-->
</style>
</head>
<body>
<?php include('menu.php'); ?>
  </div>
			<!-- Intro -->
<section id="intro" class="main style1 dark fullscreen">
  <div class="content container small">
					<header>
                      <span class="style26">Menu Operator Quality Control PT Sandoz Indonesia					</span></header>
    <p class="style8 style15 style24"><span class="style8 style6 style23"><span class="style18">Anda login sebagai,</span> <span class="style18"><?php echo $_SESSION["MM_Username"];?></span> <span class="style18">|</span> <a href="update/update-password.php">Change Password</a></span></p>
      <p class="style8 style15 style24">&nbsp;</p>
      <p class="style8 style15 style24">Menu Member :</p>
      <p class="style8 style15 style24">1. <a href="#one" class="style27">Input Produk</a></p>
      <p class="style8 style15 style24">2. <a href="#two" class="style27">Proses Hasil Analisa</a></p>
				</div>
                             						<a href="#one" class="button style2 down">More</a></section>
             <!-- Intro -->
			<section id="one" class="main style1 left dark fullscreen">
				<div class="content container small">	
<iframe name="Stack" src="input/produk/index.php" width="1200" height="400"
        frameborder="0" scrolling="no" id="iframe"> ...
</iframe>
				</div>
                <a href="#two" class="button style2 down">More</a>
			</section>
             <!-- Intro -->
<section id="two" class="main style1 left dark fullscreen">
				<div class="content container small">	
<iframe name="Stack" src="input/analisa/index.php" width="1000" height="400"
        frameborder="0" scrolling="yes" id="iframe"> ...
</iframe>
				</div>
                               						<a href="#top" class="button style2 top">Back to Top</a></section>
</section>
 
</div>
		
		<!-- Footer -->
			<footer id="footer">
			
				<!--
				     Social Icons
				     
				     Use anything from here: http://fortawesome.github.io/Font-Awesome/cheatsheet/)
				-->
					<ul class="actions">
						<li><a href="https://www.twitter.com/yudisaesar" class="fa solo fa-twitter"><span>Twitter</span></a></li>
						<li><a href="https://www.facebook.com/profile.php?id=1578805506" class="fa solo fa-facebook"><span>Facebook</span></a></li>
			
					</ul>

	    <!-- Menu -->
					<ul class="menu">
						<li>&copy; 2014</li>
						<li><a href="http://www.html5xcss3.com" target="_blank">Created by Free Html5 Templates</a> by <a href="http://html5up.net/">HTML5 UP</a> |  <a href="index.php">Edited by Yudi Saesar</a></li>
			  </ul>
			
	</footer></body>
</html>
