<?php include('../../session-admin.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>Menu Add User QC PT. Sandoz Indonesia</title>
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
.style2 {color: #FFFFFF}
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
						$('#dg').datagrid('reload');
						   window.location.href="admin.php";	// reload the user data
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
		</script>
</head>
<body>
<?php include('../../menu.php'); ?>

<div align="center"><strong><h1></h1>
                        <span class="style26">Menu Tambah User Quality	Control	PT.	Sandoz	Indonesia</span></h1>
  </strong>
</strong></div>
<div class="scroll">
                <div class="scrollContainer">
                                   <center> 
                                     <p>&nbsp;</p>
                                     <div class="panel" id="home">
                                       <h2 align="center" class="style2">Tambah User </h2>
	<div></div>
	
	
	<div id="toolbar">
		<div align="center"><a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="newUser()">New User</a>
	      </div>
	</div>
	
	<div id="dlg" class="easyui-dialog" style="width:400px;height:450px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">
		  <div align="center">New User </div>
		</div>
		<form id="fm" method="post" novalidate>
			
  <div class="fitem">

				<div align="center">Nama : </div>

				<div align="center">
				  <input name="nama" placeholder="Masukkan nama" required class="easyui-validatebox">
		      </div>
			</div>
			<div class="fitem">

				<div align="center">Username : </div>

				<div align="center">
				  <input name="username" placeholder="Masukkan Username" class="easyui-validatebox" required>
		      </div>
			</div>
			<div class="fitem">
				<div align="center">Password :				</div>
			<div align="center">
			  <input name="password" type="password" class="easyui-validatebox" required>
</div>
			</div>
            <div class="fitem">

				<div align="center">Level : </div>

			  <div align="center">		          <select name="level">
    <?php
    mysql_connect("localhost", "root", "");
    mysql_select_db("qc");
    $sql = mysql_query("SELECT * FROM akses_level ORDER BY level ASC");
    if(mysql_num_rows($sql) != 0){
        while($row = mysql_fetch_assoc($sql)){
            echo '<option>'.$row['level'].'</option>';
        }
    }
    ?>
</select>		  
			  </div>
			</div>
            
            <div class="fitem"></div>

		</form>
	</div>
	<div id="dlg-buttons">
		<div align="center"><a href="#" class="easyui-linkbutton" iconCls="icon-ok" onClick="saveUser()">Save</a>
	      </div>
	</div>
    </div>
</center>
            
</div>
</div>
</body>
</html>