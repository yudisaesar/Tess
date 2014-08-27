<?php include('../../session-admin.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>Menu Input Alat QC PT. Sandoz Indonesia</title>
		<link rel="stylesheet" type="text/css" href="themes/bootstrap/easyui.css">
	<link rel="stylesheet" type="text/css" href="themes/icon.css">
    <link href="../../default.css" rel="stylesheet" type="text/css" />

	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			color:#666;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
	.style1 {
	color: #000000
}
    </style>
	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="../javascript/zebra_datepicker.js"></script>
<link rel="stylesheet" href="../css/default.css" type="text/css">
<script type="text/javascript">
$(document).ready(function() {

    // assuming the controls you want to attach the plugin to 
    // have the "datepicker" class set
    $('#datepicker-example1').Zebra_DatePicker();

 });
</script>
     
<script type="text/javascript">
		var url;
		function newUser(){
			$('#dlg').dialog('open').dialog('setTitle','New User');
			$('#fm').form('clear');
			url = 'save.php';
		}
		function editUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Edit User');
				$('#fm').form('load',row);
				url = 'update.php?id='+row.id;
			}
		}
		function saveUser(){
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$('#dlg').dialog('close');		// close the dialog
						$('#dg').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
							
						});
						var t1 = String($('#tanggal_beli').val()).split('-');
var t2 = String($('#tanggal_kalibrasi_terakhir').val()).split('-');
var tanggal_beli = new Date(t1[0],t1[1],t1[2]).getTime();
var tanggal_kalibrasi_terakhir = new Date(t2[0],t2[1],t2[2]).getTime();

if(tanggal_beli>tanggal_kalibrasi_terakhir){
alert('error.. Tgl awal harus kurang dari tgl akhir');
}
					}
				}
			});
			
		}

		function removeUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to remove this user?',function(r){
					if (r){
						$.post('remove.php',{id:row.id},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.msg
								});
							}
						},'json');
					}
				});
			}
		}
		function myFunction(){
 var tanggal_beli=document.getElementById("t1").value ;
 var tanggal_kalibrasi_terakhir=document.getElementById("t2").value ;

 if ( tanggal_kalibrasi_terakhir <= tanggal_beli ){
alert("Error !");
    form.tanggal_kalibrasi_terakhir.focus();
	        target.value= "";}
    return (false);
 } else {  
alert("Sukses !");
	return true;
 }
 }
 function myFunction2(){
 var tanggal_kalibrasi_terakhir=document.getElementById("t2").value ;
 var tanggal_kalibrasi_selanjutnya=document.getElementById("t3").value ;

 if ( tanggal_kalibrasi_selanjutnya <= tanggal_kalibrasi_terakhir ){
alert("Error !");
     form.tanggal_kalibrasi_selanjutnya.focus();
        target.value= "";}
    return (false);
 } else {  
alert("Sukses !");
	return true;
 }
 }

 
	</script>
   					
</head>
<body>
<?php include('../../menu.php'); ?>

	 <div class="scroll">
                <div class="scrollContainer">
                                   <center> 
                                     <p>&nbsp;</p>
                                     <div class="panel" id="home">
                                       <h2 align="center" class="style1">Menu Alat</h2>
	<div></div>
	
	<div align="center">
	  <table id="dg" title="List Alat" class="easyui-datagrid" style="width:1000px;height:250px"
			url="get.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
	    <thead>
	      <tr>
	 
		        <th field="ID_ALAT" width="50">ID ALAT</th>
			      <th field="NAMA_ALAT" width="50">NAMA ALAT</th>
			      <th field="LOCATION" width="50">Location</th>
                  <th field="tanggal_beli" width="50">Tanggal Beli</th>
			      <th field="tanggal_kalibrasi_terakhir" width="50">Tanggal Kalibrasi Terakhir</th>
			      <th field="tanggal_kalibrasi_selanjutnya" width="50">Tanggal Kalibrasi Selanjutnya</th>
		      </tr>
	      </thead>
	    </table>
	  </div>
	<div id="toolbar">
		<div align="center"><a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="newUser()">New Alat</a>
		    <a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="editUser()">Edit Alat</a>
		    <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onClick="removeUser()">Remove Alat</a>
		      </div>
	</div>
	
	<div id="dlg" class="easyui-dialog" style="width:400px;height:450px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">
		  <div align="center">Input Alat</div>
		</div>
		<form id="fm" method="post" novalidate>
      
			
  <div class="fitem">

				<div align="center">ID ALAT:</div>

				<div align="center">
				  <input name="ID_ALAT" placeholder="ID Alat tidak boleh sama" required class="easyui-validatebox">
		      </div>
			</div>
			<div class="fitem">

				<div align="center">NAMA ALAT:</div>

				<div align="center">
				  <input name="NAMA_ALAT" placeholder="Masukkan Nama Alat" class="easyui-validatebox" required>
		      </div>
			</div>
			<div class="fitem">
				<div align="center">Location:</div>
			<div align="center">
		 <select name="LOCATION" class="easyui-combobox" required="true">
                  <option value="Microbiology Lab">Microbiology Lab</option>
                  <option value="Chemical Lab">Chemical Lab</option>
                  <option value="Chamber Room">Chamber Room</option>
                  <option value="GC Room">GC Room</option>
                                </select>
		      </div>
			</div>
            <div class="fitem">

				<div align="center">Tanggal Beli:</div>

				<div align="center">
				  <input name="tanggal_beli" type="date" placeholder="Masukkan Tanggal Beli" id="t1" class="easyui-validatebox" required>
		      </div>
			</div>
            <div class="fitem">

				<div align="center">Tanggal Kalibrasi Terakhir:</div>

				<div align="center">
				  <input name="tanggal_kalibrasi_terakhir" id="t2" type="date" placeholder="Masukkan Tanggal Kalibrasi Terakhir" class="easyui-validatebox" required onchange="javascript:myFunction()" onk>
		      </div>
			</div>
            <div class="fitem">

				<div align="center">Tanggal Kalibrasi Selanjutnya:</div>

				<div align="center">
				  <input name="tanggal_kalibrasi_selanjutnya" type="date" placeholder="Masukkan Tanggal Kalibrasi Selabjutnya" class="easyui-validatebox" id="t3" required onchange="javascript:myFunction2()">
		      </div>
			</div>

		</form>
	</div>
	<div id="dlg-buttons">
		<div align="center"><a href="#" class="easyui-linkbutton" iconCls="icon-ok" onClick="saveUser()"=Save</a>
		    <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">Cancel</a>
		      </div>
	</div>
    </div>
</center>
            
</div>
</div>
</body>
</html>