<?php include('../../session-admin.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>Menu User Account Request QC PT. Sandoz Indonesia</title>
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
			$('#dlg').dialog('open').dialog('setTitle','New Data');
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
<h2 align="center" class="style2">Menu User Account Request</h2>
<div></div>
	
	<div align="center">
	  <table id="dg" title="User Account Request" class="easyui-datagrid" style="width:1000px;height:250px"
			url="get.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
	    <thead>
	      <tr>
	        <th field="jenis_uar" width="40">Jenis UAR</th>
			      <th field="name_system" width="50">Nama Sistem</th>
			      <th field="name" width="30">Nama</th>
		          <th field="department" width="30">Departemen</th>
		          <th field="phone" width="30">Phone Number</th>
                  <th field="username" width="30">User Name</th>
                  <th field="uar_details" width="30">UAR Details</th>
		   
               <th field="user_role_remove" width="30">User Removed</th>
		   
              <th field="user_role_added" width="30">User Added</th>
		
            <th field="reason_request" width="30">Reason Request</th>
		
              <th field="training_needed" width="30">Training Needed</th>
		
        </thead>
      </table>
       <div align="center"><a href="../../report/report-uar.php">View Report User Account Request
      </a></div>
</div>
<div id="toolbar">
		<div align="center"><a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="newUser()">New Data</a>
		    <a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="editUser()">Edit Data</a>
		    <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onClick="removeUser()">Remove Data</a>
      </div>
</div>
  

	<div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">
		  <div align="center">Input Data</div>
</div>
		<form id="fm" method="post" novalidate>
			
    <div class="fitem">
				<label>
				<div align="center">Jenis UAR:</div>
				</label>
			  <div align="center">
			    <select name="jenis_uar">
                  <option value="New Account">New Account</option>
                  <option value="Change of User Rights">Change of User Rights</option>
                  <option value="Deactivation of Account">Deactivation of Account</option>
                                </select>
			  </div>
</div>
			<div class="fitem">
				<label>
				<div align="center">Nama Sistem:</div>
				</label>
				<div align="center">
                
<select name="name_system">
    <?php
    mysql_connect("localhost", "root", "");
    mysql_select_db("qc");
    $sql = mysql_query("SELECT * FROM computer ORDER BY ID_ALAT ASC");
    if(mysql_num_rows($sql) != 0){
        while($row = mysql_fetch_assoc($sql)){
            echo '<option>'.$row['ID_ALAT'].'</option>';
        }
    }
    ?>
</select>		      </div>
			</div>
			<div class="fitem">
				<label>
				<div align="center">Nama:</div>
				</label>
				<div align="center">
<select name="name">
    <?php
    mysql_connect("localhost", "root", "");
    mysql_select_db("qc");
    $sql = mysql_query("SELECT * FROM list_user ORDER BY NAME ASC");
    if(mysql_num_rows($sql) != 0){
        while($row = mysql_fetch_assoc($sql)){
            echo '<option>'.$row['NAME'].'</option>';
        }
    }
    ?>
</select>		 		      </div>
			</div>
            <div class="fitem">
				<label>
				<div align="center">Departemen:</div>
				</label>
				<div align="center">
<select name="department">
    <?php
    mysql_connect("localhost", "root", "");
    mysql_select_db("qc");
    $sql = mysql_query("SELECT * FROM computer ORDER BY LOCATION ASC");
    if(mysql_num_rows($sql) != 0){
        while($row = mysql_fetch_assoc($sql)){
            echo '<option>'.$row['LOCATION'].'</option>';
        }
    }
    ?>
</select>			      </div>
            </div>
            <div class="fitem">
				<label>
				<div align="center">Phone Number:</div>
				</label>
				<div align="center">
				  <input name="phone" class="easyui-validatebox" required>
		      </div>
               <div class="fitem">
				<label>
				<div align="center">User Name:</div>
				</label>
				<div align="center">
<select name="username">
    <?php
    mysql_connect("localhost", "root", "");
    mysql_select_db("qc");
    $sql = mysql_query("SELECT * FROM list_user ORDER BY USERNAME ASC");
    if(mysql_num_rows($sql) != 0){
        while($row = mysql_fetch_assoc($sql)){
            echo '<option>'.$row['USERNAME'].'</option>';
        }
    }
    ?>
</select>			         </div>
            </div>
             <div class="fitem">
				<label>
				<div align="center">UAR Details:</div>
				</label>
				<div align="center">
				 <select name="uar_details">
				   <option value="Permanent">Permanent</option>
				   <option value="Temporary">Temporary</option>
                 </select>
		       </div>
            </div>
             <div class="fitem">
				<label>
				<div align="center">User to be removed:</div>
				</label>
				<div align="center">
				  <input name="user_role_remove" class="easyui-validatebox" required>
		       </div>
            </div>
             <div class="fitem">
				<label>
				<div align="center">User to be added:</div>
				</label>
				<div align="center">
				  <input name="user_role_added" class="easyui-validatebox" required>
		       </div>
            </div>
             <div class="fitem">
				<label>
				<div align="center">Reason Request:</div>
				</label>
				<div align="center">
				  <input name="reason_request" class="easyui-validatebox" required>
		       </div>
            </div>
             <div class="fitem">
				<label>
				<div align="center">Training Needed:</div>
				</label>
				<div align="center">
				  <select name="training_needed">
				    <option value="Yes">Yes</option>
				    <option value="No">No</option>

                  </select>
		       </div>
            </div>
       
	</div>
	<div id="dlg-buttons">
		<div align="center"><a href="#" class="easyui-linkbutton" iconCls="icon-ok" onClick="saveUser()">Save</a>
		    <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">Cancel</a>
      </div>
	</div>
    </body>
</html>