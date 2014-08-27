<?php

$id = intval($_REQUEST['id']);
$NAME = $_REQUEST['NAME'];
$USERNAME = $_REQUEST['USERNAME'];
$INITIAL = $_REQUEST['INITIAL'];
$USER_LEVEL = $_REQUEST['USER_LEVEL'];



include 'conn.php';

$sql = "update list_user set NAME='$NAME',USERNAME='$USERNAME',INITIAL='$INITIAL',USER_LEVEL='$USER_LEVEL' where id=$id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>