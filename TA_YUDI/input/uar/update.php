<?php

$id = intval($_REQUEST['id']);
$jenis_uar = $_REQUEST['jenis_uar'];
$name_system = $_REQUEST['name_system'];
$name = $_REQUEST['name'];
$department = $_REQUEST['department'];
$phone = $_REQUEST['phone'];
$username = $_REQUEST['username'];
$uar_details = $_REQUEST['uar_details'];
$user_role_remove = $_REQUEST['user_role_remove'];
$user_role_added = $_REQUEST['user_role_added'];
$reason_request = $_REQUEST['reason_request'];
$training_needed = $_REQUEST['training_needed'];

include 'conn.php';

$sql = "update uar set jenis_uar='$jenis_uar',name_system='$name_system',name='$name',department='$department',phone='$phone',username='$username',uar_details='$uar_details',user_role_remove='$user_role_remove',user_role_added='$user_role_added',reason_request='$reason_request',training_needed='$training_needed' where id=$id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>