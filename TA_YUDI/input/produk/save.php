<?php

$kodeproduk = $_REQUEST['kodeproduk'];
$nama_produk = $_REQUEST['nama_produk'];
$no_batch = $_REQUEST['no_batch'];
$lot_no = $_REQUEST['lot_no'];
$cont_no = $_REQUEST['cont_no'];
$potency = $_REQUEST['potency'];
$exp_date = $_REQUEST['exp_date'];


include 'conn.php';

$sql = "insert into produk(kodeproduk,prod_id,nama_produk,no_batch,lot_no,cont_no,potency,exp_date) values('$kodeproduk','$prod_id','$nama_produk','$no_batch','$cont_no','$cont_no','$potency','$exp_date')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>