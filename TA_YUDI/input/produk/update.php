<?php

$kodeproduk = $_REQUEST['kodeproduk'];
$nama_produk = $_REQUEST['nama_produk'];
$no_batch = $_REQUEST['no_batch'];
$lot_no = $_REQUEST['lot_no'];
$cont_no = $_REQUEST['cont_no'];
$potency = $_REQUEST['potency'];
$exp_date = $_REQUEST['exp_date'];


include 'conn.php';

$sql = "update produk set kodeproduk='$kodeproduk',nama_produk='$nama_produk',no_batch='$no_batch',lot_no='$lot_no',cont_no='$cont_no',potency='$potency',exp_date='$exp_date' where prod_id=$prod_id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>