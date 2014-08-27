<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_koneksi2 = "localhost";
$database_koneksi2 = "qc";
$username_koneksi2 = "root";
$password_koneksi2 = "";
$koneksi2 = mysql_pconnect($hostname_koneksi2, $username_koneksi2, $password_koneksi2) or trigger_error(mysql_error(),E_USER_ERROR); 
?>