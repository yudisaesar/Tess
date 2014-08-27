<?php session_start(); ?>
<?php require_once('../Connections/koneksi.php'); ?>
<?php include('password.php'); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Quality Control PT Sandoz Indonesia</title>
<meta name="keywords" content="mini social, free download, website templates, CSS, HTML" />
<meta name="description" content="Mini Social is a free website template from templatemo.com" />
<link href="../default.css" rel="stylesheet" type="text/css" />


<script src="../add/js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="../add/js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="../add/js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="../add/js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="../add/js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="../add/js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

<style type="text/css">
<!--
.style2 {font-size: 16pt}
.style3 {font-size: 16}
.style4 {font-size: 24px}
.style5 {font-size: 16px}
-->
</style>
<script>
function myFunction()
{
if (document.getElementById('password').value!='')
	{	
	alert("Sukses Ganti Password!");
	}
}
</script>


</head>
<body>
<?php include('../menu.php'); ?>

        
<section id="intro" class="main style1 dark fullscreen">
  <div class="content container small">
					<header>
                      <div align="center"><span class="style26 style4">Change Password</span></div>
					</header>
                    <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
                      <div align="center">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <table width="61%" height="189" align="center" class="fa-fw">
                          <tr valign="baseline">
                            <td width="31%" align="right" nowrap="nowrap"><div align="center"><span class="style2">Username</span></div></td>
                            <td width="2%"><div align="center">:</div></td>
                            <td width="67%"> <div align="center"><span class="style3"><?php echo $_SESSION["MM_Username"];?></span></div></td>
                          </tr>
                          <tr valign="baseline">
                            <td nowrap="nowrap" align="right"><div align="center"><span class="style2">Current Password</span></div></td>
                            <td><div align="center">:</div></td>
                            <td><div align="center">
                              <input type="password" name="password1" value="<?php echo $_SESSION["MM_Password"];?>" size="32" required />
                            </div></td>
                          </tr>
                          <tr valign="baseline">
                            <td nowrap="nowrap" align="right"><div align="center" class="style2">Password Baru</div></td>
                            <td><div align="center">:</div></td>
                            <td><div align="center">
                              <input type="password" name="password" value="" placeholder="Masukkan Password Baru" id="password" size="32" required />
                            </div></td>
                          </tr>
                          <tr valign="baseline">
                            <td nowrap="nowrap" align="right"><div align="center"></div></td>
                            <td>&nbsp;</td>
                            <td><div align="center">
                              <input type="submit" value="Change Your Password" onclick="myFunction()"> 
                            </div></td>
                          </tr>
                        </table>
                      </div>
                      <p align="center">
<input type="hidden" name="MM_update" value="form1" />
                        <input type="hidden" name="username" value="<?php echo $_SESSION["MM_Username"];?>" />
                      </p>
    </form>
                    </div> 
  <div class="panel" id="contactus"><div id="contact_form"></div>
  </div>
                
    </div>
  </div>
                       						</section>   
    
    
    </div> <!-- end of main -->
    
</div>

</body>
</html>
<?php
mysql_free_result($Recordset1);
?>


