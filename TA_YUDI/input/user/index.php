<?php include('../../session-admin.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>Menu Input User QC PT. Sandoz Indonesia</title>
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
.style2 {color: #000000}
    </style>
	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
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
	</script>
</head>
<body>
<?php include('../../menu.php'); ?>

	 <div class="scroll">
                <div class="scrollContainer">
                                   <center> 
                                     <p>&nbsp;</p>
                                     <div class="panel" id="home">
                                       <h2 align="center" class="style2">Menu User</h2>
	<div></div>
	
	<div align="center">
	  <table id="dg" title="List User" class="easyui-datagrid" style="width:700px;height:250px"
			url="get.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
	    <thead>
	      <tr>
	 
			      <th field="NAME" width="50">NAME</th>
			      <th field="USERNAME" width="50">USERNAME</th>
			      <th field="INITIAL" width="50">INITIAL</th>
		          <th field="USER_LEVEL" width="50">USER_LEVEL</th>
		      </tr>
	      </thead>
	    </table>
	  </div>
	<div id="toolbar">
		<div align="center"><a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="newUser()">New User</a>
		    <a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="editUser()">Edit User</a>
		    <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onClick="removeUser()">Remove User</a>
		      </div>
	</div>
	
	<div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">
		  <div align="center">Input User</div>
		</div>
		<form id="fm" method="post" novalidate>
			
    <div class="fitem">

				<div align="center">Nama:</div>
	
				<div align="center">
				  <input name="NAME" placeholder="Nama tidak boleh sama" required class="easyui-validatebox">
		      </div>
			</div>
			<div class="fitem">
		
				<div align="center">Username:</div>

				<div align="center">
				  <input name="USERNAME" placeholder="Masukkan Username" class="easyui-validatebox" required>
			      </div>
			</div>
			<div class="fitem">

				<div align="center"></div>

			</div>
            <div class="fitem">

				<div align="center">Initial:</div>

				<div align="center">
				  <input name="INITIAL" placeholder="Masukkan Initial User" class="easyui-validatebox" required>
			      </div>
            </div>
            <div class="fitem">

				<div align="center">User Level:</div>

				<div align="center">
<select name="USER_LEVEL">
                  <option value="Operator">Operator</option>
                  <option value="Method Developer">Method Developer</option>
                  <option value="Administrator">Administrator</option>
                                </select>		      </div>
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
</body>
</html>