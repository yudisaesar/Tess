<?php
$id = intval($_REQUEST['id']);
$NAME = $_REQUEST['NAME'];
$USERNAME = $_REQUEST['USERNAME'];
$INITIAL = $_REQUEST['INITIAL'];
$USER_LEVEL = $_REQUEST['USER_LEVEL'];



include 'conn.php';

$sql = "insert into list_user(NAME,USERNAME,INITIAL,USER_LEVEL) values('$NAME','$USERNAME','$INITIAL','$USER_LEVEL')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>