<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Aquaria
Version    : 1.0
Released   : 20070602
Description: A two-column fixed-width template. Suitable for blogs and small business websites.

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Selamat Datang</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	color: #0066FF;
}
.style2 {
	color: #0066FF
}
.style4 {
	font-size: 24px;
	color: #0066FF;
}
.style7 {color: #FF0000}
-->
</style>
</head>
<body>

<?php include('menu.php'); ?>
<!-- end #menu -->
<div id="header">
	 <a href="logout.php"></a>
	  <h1>&nbsp;</h1>
</div>
<!-- end #header -->

<div id="page">

  <p class="style8 style16"><span class="style4">Selamat Datang <span class="style7"><?php echo $_SESSION["MM_Username"];?></span> di QC Laboratorium PT. Sandoz Indonesia</span> </p>
  <p class="style8 style16">&nbsp;</p>
  <div class="style1" id="content"></div>
<!-- end #content -->
<div style="clear: both;">&nbsp;
    <p class="style2"><a href="logout.php"></a></p>
  </div>
</div>
<!-- end #page -->
<div id="footer">
	<p id="legal">Copyright &copy; Yudi Saesar<a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets"></abbr></a></p>
</div>
<!-- end #footer -->
<div align=center></div>
</body>
</html>
