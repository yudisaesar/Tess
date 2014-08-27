<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Input Nilai</title>
</head>
<body>
<center><h3>Input Nilai</h3></center>
<p> Masukkan Data ke Textbox Berikut :</p>
<?php echo form_open('penjualan/barang');?>

<table width="200" border="1">
  <tr>
    <td width="93"><div align="center">Kode Barang</div></td>
    <td width="22"><div align="center">:</div></td>
    <td width="63"><div align="center"><?php echo form_input('kode',$kode);?>
	</div></td>
  </tr>
  <tr>
    <td><div align="center">Nama Barang</div></td>
    <td><div align="center">:</div></td>
    <td><div align="center"><?php echo form_input('nama',$nama);?></div></td>
  </tr>
  <tr>
    <td><div align="center">Harga </div></td>
    <td><div align="center">:</div></td>
    <td><div align="center"><?php echo form_input('harga',$harga);?></div></td>
  </tr>
    <tr>
    <td><div align="center">Qty </div></td>
    <td><div align="center">:</div></td>
    <td><div align="center"><?php echo form_input('qty',$qty);?></div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><?php echo form_submit('submit','Proses');?></div></td>
    <?php echo form_close();?>
  </tr>
  <tr>
     <blink><td><div align="center">Jumlah</div></td></blink>
    <td><div align="center">:</div></td>
   <td><div align="center"><?php echo $jumlah;?></div></td>
  </tr>
</table>
<p><br />Halaman di Load dalam {elapsed_time} detik</p>




</body>
</html>