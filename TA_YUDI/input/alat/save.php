<?php

$ID_ALAT = $_REQUEST['ID_ALAT'];
$NAMA_ALAT = $_REQUEST['NAMA_ALAT'];
$LOCATION = $_REQUEST['LOCATION'];

$tanggal_beli = $_REQUEST['tanggal_beli'];
$tanggal_kalibrasi_terakhir = $_REQUEST['tanggal_kalibrasi_terakhir'];
$tanggal_kalibrasi_selanjutnya = $_REQUEST['tanggal_kalibrasi_selanjutnya'];



include 'conn.php';

$sql = "insert into computer(ID_ALAT,NAMA_ALAT,LOCATION,tanggal_beli,tanggal_kalibrasi_terakhir,tanggal_kalibrasi_selanjutnya) values('$ID_ALAT','$NAMA_ALAT','$LOCATION','$tanggal_beli','$tanggal_kalibrasi_terakhir','$tanggal_kalibrasi_selanjutnya')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>
