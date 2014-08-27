<?php require_once('Connections/koneksi.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['nama'])) {
  $loginUsername=$_POST['nama'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "level";
  $MM_redirectLoginSuccess = "index.php";
  $MM_redirectLoginFailed = "login-gagal.php";
  $MM_redirecttoReferrer = true;
  mysql_select_db($database_koneksi, $koneksi);
  	
  $LoginRS__query=sprintf("SELECT username, password, level FROM akses_level WHERE username=%s AND password=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $koneksi) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'level');
	    $loginStrPass  = mysql_result($LoginRS,0,'password');

    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	
	    $_SESSION['MM_Password'] = $loginStrPass;	

	      

    if (isset($_SESSION['PrevUrl']) && true) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Login</title>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
<link href="default.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" media="screen" charset="utf-8" /><style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-size: 16px;
}
-->
</style>
<script type="text/javascript">
function validasi_input(form){
  if (form.password.value == ""){
    alert("Password masih kosong!");
    form.password.focus();
    return (false);
  }
return (true);
}
</script>
</head>
<body>
<?php include('menu.php'); ?>

<div class="content">
  <div class="header_right">
    <div class="top_info">
      <div class="top_info_right">
        <p>&nbsp;</p>

</p>
      </div>
    </div>
    <div class="bar"></div>
  </div>
  <div class="logo">
    <h1 align="center"><a href="index.php">Quality Control PT Sandoz Indonesia</a></h1>
  </div>
   <div class="subheader">
    <h1 align="center">Halaman Login</h1>
  </div>
  <div class="left">
    <div class="left_articles">
      <h2>&nbsp;
       <form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>" onsubmit="return validasi_input(this)">
         <div align="center">
           <table width="189" border="1" align="center" cellpadding="5" cellspacing="5">
             <tr>
               <td width="116">Nama</td>
            <td width="7">:</td>
            <td width="8"><label>
              <input type="text" name="nama" id="nama" />
              </label></td>
          </tr>
             <tr>
               <td>Password</td>
            <td>:</td>
            <td><label>
              <input type="password" name="password" id="password" />
              </label></td>
          </tr>
             <tr>
               <td colspan="3"><label>
               <input type="submit" name="login" id="login" value="Login" />
               </label></td>
          </tr>
              </table>
         </div>
      </form>
      <p>&nbsp;</p>
    </h1>
    <!-- end #mainContent --></div>
</div>
  
</body>
</html>
