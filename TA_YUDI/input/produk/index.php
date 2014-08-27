<?php include('../../session-member.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>Menu Produk QC PT. Sandoz Indonesia</title>
		<link rel="stylesheet" type="text/css" href="themes/bootstrap/easyui.css">
	<link rel="stylesheet" type="text/css" href="themes/icon.css">
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
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
.style2 {color: #000000}
    </style>
	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
<script type="text/javascript">
		var url;
		function newUser(){
			$('#dlg').dialog('open').dialog('setTitle','New Data');
			$('#fm').form('clear');
			url = 'save.php';
		}
		function editUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Edit Data');
				$('#fm').form('load',row);
				url = 'update.php?prod_id='+row.prod_id;
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
												   	alert("Sukses tambah user !!!");

					} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}
		function removeUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to remove this data?',function(r){
					if (r){
						$.post('remove.php',{prod_id:row.prod_id},function(result){
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
	</script>
</head>
<body>
<?php include('../../menu.php'); ?>

	 <section id="one" class="main style2 left dark fullscreen">
				<div class="content container small">	
	<h2 align="center" class="style2">Menu Produk</h2>
	<div></div>
	
	<div align="center">
	  <table id="dg" title="Produk" class="easyui-datagrid" style="width:700px;height:250px"
			url="get.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
	    <thead>
	      <tr>
	              <th field="kodeproduk" width="80">Kode Produk</th>
			      <th field="nama_produk" width="80">Nama Produk</th>
			      <th field="no_batch" width="50">No. Batch</th>
			      <th field="lot_no" width="50">Lot. No</th>
		          <th field="cont_no" width="50">Cont. No</th>
		          <th field="potency" width="50">Potency</th>
                  <th field="exp_date" width="60">Expired Date</th>
		      </tr>
	      </thead>
	    </table>
	  </div>
	<div id="toolbar">
		<div align="center"><a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="newUser()">New Data</a>
		    <a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="editUser()">Edit Data</a>
		    <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onClick="removeUser()">Remove Datas</a>
		      </div>
	</div>
	
	<div id="dlg" class="easyui-dialog" style="width:450px;height:400px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">
		  <div align="center">Input Produk</div>
		</div>
		<form id="fm" method="post" novalidate>
		<div class="fitem">
				<label>
				<div align="center">Kode Produk:</div>
				</label>
				<div align="center">
				  <input name="kodeproduk" required class="easyui-validatebox">
		      </div>
			</div>	
    <div class="fitem">
				<label>
				<div align="center">Nama Produk:</div>
				</label>
				<div align="center">
				  <input name="nama_produk" required class="easyui-validatebox">
		      </div>
			</div>
			<div class="fitem">
				<label>
				<div align="center">No. Batch:</div>
				</label>
				<div align="center">
				  <input name="no_batch" class="easyui-validatebox" required>
			      </div>
			</div>
			<div class="fitem">
				<label>
				<div align="center">Lot. No:</div>
				</label>
				<div align="center">
				  <input name="lot_no" class="easyui-validatebox" required>
			      </div>
			</div>
            <div class="fitem">
				<label>
				<div align="center">Cont. No:</div>
				</label>
				<div align="center">
				  <input name="cont_no" class="easyui-validatebox" required>
			      </div>
            </div>
            <div class="fitem">
				<label>
				<div align="center">Potency:</div>
				</label>
				<div align="center">
				  <input name="potency" class="easyui-validatebox" required>
		      </div>
              <div class="fitem">
				<label>
				<div align="center">Expired Date:</div>
				</label>
		<div align="center">
				  <input name="exp_date" type="date" class="easyui-validatebox" required>
		      </div>
		      </div>
            </div>
		</form>
	</div>
	<div id="dlg-buttons">
		<div align="center"><a href="#" class="easyui-linkbutton" iconCls="icon-ok" onClick="saveUser()">Save</a>
		    <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">Cancel</a>
		      </div>
	</div>
    </div>
</center>
</div>
</div>
</div>
			</section>
</body>
</html>