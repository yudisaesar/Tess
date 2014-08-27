<?php include('../../session-member.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>Menu Analisa QC PT. Sandoz Indonesia</title>
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
    .style2 {
	color: #FFFFFF;
	font-size: 18px;
}
    .style3 {color: #000000}
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
					}
				}
			});
		}
		
	</script>
    <script>function hitung() {
    var R1 = $(".R1").val();
    var R2 = $(".R2").val();
	var R3 = $(".R3").val();
    var R4 = $(".R4").val();
	var R5 = $(".R5").val();
    var R6 = $(".R6").val();
    total = ((R1*1)+(R2*1)+(R3*1)+(R4*1)+(R5*1)+(R6*1))/6; //tailingtoal
	total=
    $(".total").val(total);
	}
</script>
<script>function hitung2() {
    var S1 = $(".S1").val();
    var S2 = $(".S2").val();
	var S3 = $(".S3").val();
    var S4 = $(".S4").val();
	var S5 = $(".S5").val();
    var S6 = $(".S6").val();
    totalsst = ((S1*1)+(S2*1)+(S3*1)+(S4*1)+(S5*1)+(S6*1))/6; //tailingtoal
	totalsst=
    $(".totalsst").val(totalsst);
	}
</script>
<script>function hitung3() {
    var B1 = $(".B1").val();
    var B2 = $(".B2").val();
	var B3 = $(".B3").val();
    var B4 = $(".B4").val();
    bracket_total = ((B1*1)+(B2*1)+(B3*1)+(B4*1))/4; //tailingtoal
	bracket_total=
    $(".bracket_total").val(bracket_total);
	}
</script>
 <SCRIPT language=Javascript>
<!--
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode != 46 && charCode > 31
            && (charCode < 48 || charCode > 57))
return false;
return true;
}
//-->
</SCRIPT>


 </head>
<body>
<?php include('../../menu.php'); ?>

	 <div class="scroll">
                <div class="scrollContainer">
                                   <center> 
                                     <p>&nbsp;</p>
                                     <div class="panel" id="home">
	<h2 align="center" class="style3">Menu Analisa</h2>
<div></div>
	
	<div align="center">
	  <table id="dg" title="Analisa" class="easyui-datagrid" style="width:1000px;height:250px"
			url="get.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
	    <thead>
	      <tr>
	        <th field="nama_produk" width="35">Nama Produk</th>
			      <th field="no_batch" width="25">No. Batch</th>
			      <th field="lot_no" width="20">Lot. No.</th>
		          <th field="cont_no" width="20">Cont. No.</th>
		          <th field="potency" width="20">Potency</th>
                  <th field="exp_date" width="30">Expired Date</th>
                  <th field="NAMA_ALAT" width="30">Nama Alat</th>
                       <th field="tailing_factor_total" width="30">Tailing Factor</th>
		          <th field="sst_total" width="30">SST</th>
		          <th field="bracket_total" width="30">Bracket</th>
		          <th field="nama_analyst" width="30">Nama Analyst</th>
		     
		
        </thead>
      </table>
       <div align="center"><a href="../../report/report-analisis.php" target="_blank" class="style2">View Report User Account Request
      </a></div>
</div>
<div id="toolbar">
		<div align="center"><a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="newUser()">New Data</a></div>
</div>
  

	<div id="dlg" class="easyui-dialog" style="width:500px;height:400px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">
		  <div align="center">Input Data</div>
</div>
		<form id="fm" method="post" novalidate>
			 <div class="fitem">
						<div align="center">
                        
				  <?php    
    mysql_connect("localhost","root","");    
    mysql_select_db("qc");    
    $result = mysql_query("select * from produk");    
    $jsArray = "var prdName = new Array();\n";    
    echo 'Kode Produk : <select name="prdId" onchange="changeValue(this.value)">';    
    echo '<option>-------</option>';    
    while ($row = mysql_fetch_array($result)) {    
        echo '<option value="' . $row['kodeproduk'] . '">' . $row['kodeproduk'] . '</option>';    
        $jsArray .= "prdName['" . $row['kodeproduk'] . "'] = {name:'" . addslashes($row['nama_produk']) . "',batch:'".addslashes($row['no_batch']) . "',lotno:'".addslashes($row['lot_no']). "',contno:'".addslashes($row['cont_no']) . "',poten:'".addslashes($row['potency']). "',expd:'".addslashes($row['exp_date'])."'};\n";    
    }    
    echo '</select>';    
    ?>    
		       </div>
            </div>
<div class="fitem">
				<div align="center">Nama Produk:</div>
						   <div align="center">
				  <input type="text" name="nama_produk" id="name1" class="easyui-validatebox" readonly>
		       </div>
            </div>
			<div class="fitem">
						<div align="center">No. Batch:</div>
				   <div align="center">
				  <input type="text" name="no_batch" id="batch1" class="easyui-validatebox" placeholder="ID XXXX" readonly>
		       </div>
            </div>
			<div class="fitem">
				<div align="center">Lot no:</div>
				   <div align="center">
				  <input type="text" name="lot_no" id="lotno1" class="easyui-validatebox" onKeyPress="return isNumberKey(event)" readonly>
		       </div>
            </div>
            <div class="fitem">
				<div align="center">Cont. no:</div>
					   <div align="center">
				  <input type="text" name="cont_no" id="contno1" class="easyui-validatebox" onKeyPress="return isNumberKey(event)" readonly>
		       </div>
            </div>
            <div class="fitem">
					<div align="center">Potency:</div>
			  <div align="center">
				  <input type="text" name="potency" id="poten1" class="easyui-validatebox" readonly>
		      </div>
               <div class="fitem">
					<div align="center">Expired Date:</div>
				<div align="center">
				  <input type="text" name="exp_date" id="expd1" class="easyui-validatebox" readonly>
                  <script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(id){  
    document.getElementById('name1').value = prdName[id].name;  
    document.getElementById('batch1').value = prdName[id].batch;  
    document.getElementById('lotno1').value = prdName[id].lotno;
	document.getElementById('contno1').value = prdName[id].contno;
	document.getElementById('poten1').value = prdName[id].poten;
	document.getElementById('expd1').value = prdName[id].expd;  	
    };  
    </script>  
   		         </div>
            </div>
             <div class="fitem">
				<div align="center">Alat:</div>
				<div align="center">
	<select name="NAMA_ALAT">
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
</select>		  
            	<div class="fitem">
						<div align="center">Flow Rate:</div>
				   <div align="center">
				  <input type="text" name="flowrate" class="easyui-validatebox" placeholder="Enter Flow Rate" onKeyPress="return isNumberKey(event)">
		       </div>
            </div>
			<div class="fitem">
				<div align="center">Volume Inject:</div>
				   <div align="center">
				  <input type="text" name="volinject" class="easyui-validatebox" placeholder="Enter Vol. Injection"  onKeyPress="return isNumberKey(event)">
		       </div>
            </div>
            <div class="fitem">
				<div align="center">Wavelength:</div>
					   <div align="center">
				  <input type="text" name="wavelength" class="easyui-validatebox" placeholder="Enter Wavelength"  onKeyPress="return isNumberKey(event)">
		       </div>
            </div>
            <div class="fitem">
					<div align="center">Run Time:</div>
			  <div align="center">
			<select name="runtime" class="easyui-combobox" required="true">
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="15">15</option>
                  <option value="20">20</option>
                  <option value="25">25</option>
                  <option value="30">30</option>
                  <option value="35">35</option>
                  <option value="40">40</option>
                  <option value="45">45</option>
                  <option value="50">50</option>
                  <option value="55">55</option>
                  <option value="60">60</option>

                                </select>
                                
		      </div>
               <div class="fitem">
					<div align="center">Column Pump:</div>
				<div align="center">
				  <input type="text" name="columnpump" class="easyui-validatebox" placeholder="Enter Column Pump"  onKeyPress="return isNumberKey(event)">  
   		         </div>
            </div>
              <div class="fitem">
				<div align="center">
      				<div align="center">Rata-rata Tailing Factor:</div>
				 <p>R1 
				   <input class="R1" required onChange="hitung()" onkeypress="return isNumberKey(event)" placeholder="Enter R1"  />
		         R2 
		         <input class="R2" required onChange="hitung()" onkeypress="return isNumberKey(event)" placeholder="Enter R2" />
				 </p>
				 <p>R3 
				   <input class="R3" required onChange="hitung()"onkeypress="return isNumberKey(event)"  placeholder="Enter R3"  />
				 R4 
				 <input class="R4" required onChange="hitung()" onkeypress="return isNumberKey(event)" placeholder="Enter R4"  />
				 </p>
				 <p>R5 
				   <input class="R5" required onChange="hitung()"onkeypress="return isNumberKey(event)"  placeholder="Enter R5"  />
				 R6 
				 <input class="R6" required onChange="hitung()" onkeypress="return isNumberKey(event)" placeholder="Enter R6" />
				   </p>
				</div>
		  </div>
                  <div class="fitem">
				<div align="center">Tailing Factor:</div>
				<div align="center">
				  <input class="total" name="tailing_factor_total" placeholder="Tailing Factor" readonly>
		       </div>
            </div>	
             <div class="fitem">
			   <div align="center">
                <label>
				<div align="center">Rata-rata Tailing SST:</div>
				</label>
				 <p>S1 
				   <input class="S1" required onChange="hitung2()"onkeypress="return isNumberKey(event)" placeholder="Enter B1"  />
		         S2 
		         <input class="S2" required onChange="hitung2()"onkeypress="return isNumberKey(event) "placeholder="Enter B2"  />
				 </p>
				 <p>
				 S3 
				   <input class="S3" required onChange="hitung2()"onkeypress="return isNumberKey(event)"placeholder="Enter B3"  />
				 S4 
				 <input class="S4" required onChange="hitung2()"onkeypress="return isNumberKey(event)"placeholder="Enter B4"  />
				 </p>
				 <p>S5 
				   <input class="S5" required onChange="hitung2()"onkeypress="return isNumberKey(event)"placeholder="Enter B5"  />
				 S6 
				 <input class="S6" required onChange="hitung2()"onkeypress="return isNumberKey(event)"placeholder="Enter B6"  />
				   </p>
			   </div>
		  </div>
             <div class="fitem">
				<div align="center">SST:</div>
				<div align="center">
				  <input class="totalsst" name="sst_total" placeholder="SST" readonly>
		       </div>
            </div>
            <div class="fitem">
			   <div align="center">
                <label>
				<div align="center">Rata-rata Bracket:</div>
				</label>
				 <p>B1 
				   <input class="B1" required onChange="hitung3()"onkeypress="return isNumberKey(event)"placeholder="Enter B1"  />
		         B2 
		         <input class="B2" required onChange="hitung3()"onkeypress="return isNumberKey(event)"placeholder="Enter B2"  />
				 </p>
				 <p>
				 B3 
				   <input class="B3" required onChange="hitung3()"onkeypress="return isNumberKey(event)"placeholder="Enter B3"  />
				 B4 
				 <input class="B4" required onChange="hitung3()"onkeypress="return isNumberKey(event)"placeholder="Enter B4"  />
				 </p>
			
			   </div>
		  </div>
             <div class="fitem">
				<div align="center">Bracket:</div>
				<div align="center">
				  <input class="bracket_total" name="bracket_total" placeholder="Bracket" readonly>
		       </div>
            </div>
             <div class="fitem">
				<div align="center">Nama Analis:</div>
				<div align="center">
	<select name="nama_analyst">
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
</select>		  
                  	       </div>
            </div>
           	</div>
	<div id="dlg-buttons">
		<div align="center"><a href="#" class="easyui-linkbutton" iconCls="icon-ok" onClick="saveUser()">Save</a>
		    <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">Cancel</a>
      </div>
	</div>
    </form>
</body>
</html>
