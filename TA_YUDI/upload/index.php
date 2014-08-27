<?php session_start(); ?>
<?php require_once('../Connections/koneksi.php'); ?>


<html>
<head>
<title>Directory Listing PT Sandoz Indonesia</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<script>
function myFunction()
{
alert("upload sukses!");
}
</script>
<style type="text/css">
<!--
.style1 {
	font-size: 18px
}
.style2 {font-size: 18}
.style3 {font-size: 18; color: #FFFFFF; }
.style4 {font-size: 16pt}
-->
</style>
</head>
<body>
 <?php include('../menu.php'); ?>

<section id="intro" class="main style1 dark fullscreen">
  <div class="content container small">
					<header>
                      <span class="style26">Menu SCAN UAR Quality	Control	PT.	Sandoz	Indonesia</span></header>



 

<form action="upload_file.php" method="post" enctype="multipart/form-data">
 
 
<p>&nbsp;</p>
<table width="347" border="0" align="center">
  <tr>
    <td><div align="center" class="style3"><b>Upload UAR yang telah di scan disini :</b><br />
    </div></td>
  </tr>
  <tr>
    <td>
      <div align="center" class="style2">
        <input type="file" name="file" size="50" required />
      </div></td>
  </tr>
  <tr>
    <td>
      <div align="center" class="style2">
        <input type="submit" value="Upload" onClick="myFunction()" />
      </div></td>
  </tr>
  <tr>
    <td>
      <div align="center" class="style2">
        <?php
	$dir='./testupload/';
	echo '<b>Daftar file dari folder ',$dir,'</b>';
	$dh=opendir($dir) or die('error');
	while(($f=readdir($dh)) !== false){
		if(is_file($dir.$f)){
			echo '<li><a href="',$dir.$f,'">', $f, '</a></li>';
		}
	}
	closedir($dh);
?>
      </div></td>
  </tr>
</table>

				<div align="center"><br>
				    <a href="#" class="style4" onclick="history.go(-1);return false;">[Go Back]</a> <br>
                </div>
</body>
</html>