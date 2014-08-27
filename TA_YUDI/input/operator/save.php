<?php

$nama = $_REQUEST['nama'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$level = $_REQUEST['level'];


include 'conn.php';

$sql = "insert into akses_level(nama,username,password,level) values('$nama','$username','$password','$level')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>