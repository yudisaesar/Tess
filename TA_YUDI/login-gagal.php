<?php require_once('Connections/koneksi.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

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
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
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

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
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
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Gagal</title>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
<link href="default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function validasi_input(form){
  if (form.password.value == ""){
    alert("Password masih kosong!");
    form.password.focus();
    return (false);
  }
return (true);
}
</script></head>

<body>
<?php include('menu.php'); ?>

<body class="oneColElsCtrHdr">


<div class="container">
  <div class="header"></div>
  <div class="content" id="templatemo_footer">
    <h2 align="center">Oops...!! Anda baru saja dialihkan ke halaman ini karena beberapa sebab berikut ini:</h2>
    <div align="center">
      <ul>
        <li>Username atau password yang Anda masukkan salah</li>
        <li>Hak akses yang Anda miliki tidak memungkinkan Anda untuk mengakses halaman ini.<em><strong><a href="member.php"></a></strong></em></li>
        <li>Anda tidak mempunyai akun</li>
      </ul>
      <fieldset>
        <legend>Form login</legend>
      </fieldset>
    </div>
  <fieldset><form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>" onsubmit="return validasi_input(this)">
    <p align="center">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" />
    </p>
    <p align="center">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" />
    </p>
    <p align="center">
      <input name="submit" type="submit" class="admin" id="submit" value="Login" />
      <input name="submit2" type="reset" class="admin" id="submit2" value="Reset" />
    </p>
      </form>
</fieldset>

</body>
</html>
