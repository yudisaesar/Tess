<?php

$id = intval($_REQUEST['id']);
$nama_produk = $_REQUEST['nama_produk'];
$no_batch = $_REQUEST['no_batch'];
$lot_no = $_REQUEST['lot_no'];
$cont_no = $_REQUEST['cont_no'];
$potency = $_REQUEST['potency'];
$exp_date = $_REQUEST['exp_date'];
$NAMA_ALAT = $_REQUEST['NAMA_ALAT'];
$flowrate = $_REQUEST['flowrate'];
$volinject = $_REQUEST['volinject'];
$wavelength = $_REQUEST['wavelength'];
$runtime = $_REQUEST['runtime'];
$columnpump = $_REQUEST['columnpump'];
$tailing_factor_total = $_REQUEST['tailing_factor_total'];
$sst_total = $_REQUEST['sst_total'];
$bracket_total = $_REQUEST['bracket_total'];
$nama_analyst = $_REQUEST['nama_analyst'];

include 'conn.php';

$sql = "update analisa set  nama_produk='$nama_produk',no_batch='$no_batch',lot_no='$lot_no',cont_no='$cont_no',potency='$potency',exp_date='$exp_date',NAMA_ALAT='$NAMA_ALAT',flowrate='$flowrate',volinject='$volinject',wavelength='$wavelength',runtime='$runtime',columnpump='$columnpump',tailing_factor_total='$tailing_factor_total',sst_total='$sst_total',bracket_total='$bracket_total',nama_analyst='$nama_analyst' where id=$id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>