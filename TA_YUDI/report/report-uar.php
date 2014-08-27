<?php require_once('../Connections/koneksi2.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset1 = 1;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_koneksi2, $koneksi2);
$query_Recordset1 = "SELECT jenis_uar, name_system, name, department, phone, username, uar_details, user_role_remove, user_role_added, reason_request, training_needed FROM uar";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $koneksi2) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

$queryString_Recordset1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset1") == false && 
        stristr($param, "totalRows_Recordset1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset1 = sprintf("&totalRows_Recordset1=%d%s", $totalRows_Recordset1, $queryString_Recordset1);
?>
<?php require_once('../Connections/koneksi.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Quality Control PT Sandoz Indonesia</title>
<meta name="keywords" content="mini social, free download, website templates, CSS, HTML" />
<meta name="description" content="Mini Social is a free website template from templatemo.com" />



<script src="../add/js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="../add/js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="../add/js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="../add/js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="../add/js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="../add/js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

<style type="text/css">
<!--
.style13 {font-size: medium}
.style14 {color: #000000}
-->
</style>


<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 14">
<meta name=Originator content="Microsoft Word 14">
<link rel=File-List href="../add/Shofiyuddin_files/filelist.xml">
<title>Judul SOP/ SOP Title</title>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="PlaceName"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="PlaceType"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="place"/>
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>rustami1</o:Author>
  <o:LastAuthor>Administrator</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>139</o:TotalTime>
  <o:LastPrinted>2013-02-03T05:13:00Z</o:LastPrinted>
  <o:Created>2014-05-07T06:55:00Z</o:Created>
  <o:LastSaved>2014-05-07T06:55:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>217</o:Words>
  <o:Characters>1243</o:Characters>
  <o:Company>Novartis</o:Company>
  <o:Lines>10</o:Lines>
  <o:Paragraphs>2</o:Paragraphs>
  <o:CharactersWithSpaces>1458</o:CharactersWithSpaces>
  <o:Version>14.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:TargetScreenSize>800x600</o:TargetScreenSize>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="../add/Shofiyuddin_files/themedata.thmx">
<link rel=colorSchemeMapping href="../add/Shofiyuddin_files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:DisplayHorizontalDrawingGridEvery>0</w:DisplayHorizontalDrawingGridEvery>
  <w:DisplayVerticalDrawingGridEvery>0</w:DisplayVerticalDrawingGridEvery>
  <w:UseMarginsForDrawingGridOrigin/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>EN-US</w:LidThemeOther>
  <w:LidThemeAsian>ZH-TW</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:SuppressTopSpacing/>
   <w:SuppressSpBfAfterPgBrk/>
   <w:WW6BorderRules/>
   <w:FootnoteLayoutLikeWW8/>
   <w:ShapeLayoutLikeWW8/>
   <w:AlignTablesRowByRow/>
   <w:ForgetLastTabAlignment/>
   <w:LayoutRawTableWidth/>
   <w:LayoutTableRowsApart/>
   <w:UseWord97LineBreakingRules/>
   <w:SelectEntireFieldWithStartOrEnd/>
   <w:ApplyBreakingRules/>
   <w:UseWord2002TableStyleRules/>
   <w:DontUseIndentAsNumberingTabStop/>
   <w:FELineBreak11/>
   <w:WW11IndentRules/>
   <w:DontAutofitConstrainedTables/>
   <w:AutofitLikeWW11/>
   <w:HangulWidthLikeWW11/>
   <w:UseNormalStyleForList/>
   <w:DontVertAlignCellWithSp/>
   <w:DontBreakConstrainedForcedTables/>
   <w:DontVertAlignInTxbx/>
   <w:Word11KerningPairs/>
   <w:CachedColBalance/>
  </w:Compatibility>
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"
  DefSemiHidden="true" DefQFormat="false" DefPriority="99"
  LatentStyleCount="267">
  <w:LsdException Locked="false" Priority="0" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>
  <w:LsdException Locked="false" Priority="0" Name="header"/>
  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" Priority="10" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" Priority="0" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" Priority="11" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" Priority="22" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" Priority="0" Name="No List"/>
  <w:LsdException Locked="false" Priority="59" SemiHidden="false"
   UnhideWhenUsed="false" Name="Table Grid"/>
  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>
 </w:LatentStyles>
</xml><![endif]--><!--[if !mso]><object
 classid="clsid:38481807-CA0E-42D2-BF39-B33AF135CC4D" id=ieooui></object>
<style>
st1\:*{behavior:url(#ieooui) }
</style>
<![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;
	mso-font-charset:2;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
@font-face
	{font-family:"Angsana New";
	panose-1:2 2 6 3 5 4 5 2 3 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-2130706429 0 0 0 65537 0;}
@font-face
	{font-family:"Angsana New";
	panose-1:2 2 6 3 5 4 5 2 3 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-2130706429 0 0 0 65537 0;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520081665 -1073717157 41 0 66047 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Angsana New";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;}
h1
	{mso-style-update:auto;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:12.0pt;
	margin-left:1.0cm;
	text-indent:-1.0cm;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:1;
	mso-list:l1 level1 lfo3;
	tab-stops:list 1.0cm;
	font-size:11.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-bidi-font-family:"Angsana New";
	mso-font-kerning:0pt;
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;
	mso-bidi-font-weight:normal;}
h2
	{mso-style-update:auto;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"Heading 1";
	mso-style-next:Normal;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:28.9pt;
	text-indent:-28.9pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:2;
	mso-list:l1 level2 lfo3;
	tab-stops:list 28.8pt;
	font-size:11.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-bidi-font-family:"Angsana New";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;}
h3
	{mso-style-update:auto;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"Heading 2";
	mso-style-next:Normal;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:36.0pt;
	text-indent:-36.0pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:3;
	mso-list:l1 level3 lfo3;
	tab-stops:list 36.0pt;
	font-size:11.0pt;
	font-family:"Arial","sans-serif";
	mso-bidi-font-family:"Angsana New";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;}
h4
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:43.2pt;
	text-indent:-43.2pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:4;
	mso-list:l1 level4 lfo3;
	tab-stops:list 43.2pt;
	font-size:14.0pt;
	font-family:"Arial","sans-serif";
	mso-bidi-font-family:"Times New Roman";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;}
h5
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:51.05pt;
	text-indent:-51.05pt;
	mso-pagination:widow-orphan;
	mso-outline-level:5;
	mso-list:l1 level5 lfo3;
	tab-stops:list 51.05pt;
	font-size:13.0pt;
	font-family:"Arial","sans-serif";
	mso-bidi-font-family:"Angsana New";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;
	font-style:italic;}
h6
	{mso-style-unhide:no;


	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:60.95pt;
	text-indent:-60.95pt;
	mso-pagination:widow-orphan;
	mso-outline-level:6;
	mso-list:l1 level6 lfo3;
	tab-stops:list 60.95pt;
	font-size:11.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;}
p.MsoHeading7, li.MsoHeading7, div.MsoHeading7
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:70.9pt;
	text-indent:-70.9pt;
	mso-pagination:widow-orphan;
	mso-outline-level:7;
	mso-list:l1 level7 lfo3;
	tab-stops:list 70.9pt;
	font-size:11.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;}
p.MsoHeading8, li.MsoHeading8, div.MsoHeading8
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:79.4pt;
	text-indent:-79.4pt;
	mso-pagination:widow-orphan;
	mso-outline-level:8;
	mso-list:l1 level8 lfo3;
	tab-stops:list 79.4pt;
	font-size:11.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;
	font-style:italic;}
p.MsoHeading9, li.MsoHeading9, div.MsoHeading9
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:87.9pt;
	text-indent:-87.9pt;
	mso-pagination:widow-orphan;
	mso-outline-level:9;
	mso-list:l1 level9 lfo3;
	tab-stops:list 87.9pt;
	font-size:11.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;}
p.MsoToc1, li.MsoToc1, div.MsoToc1
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-unhide:no;
	mso-style-next:Normal;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	tab-stops:right dotted 434.15pt;
	font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:EN-AU;
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;
	font-weight:bold;
	mso-bidi-font-weight:normal;
	text-decoration:underline;
	text-underline:single;}
p.MsoToc3, li.MsoToc3, div.MsoToc3
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-unhide:no;
	mso-style-next:Normal;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:20.0pt;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Angsana New";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-unhide:no;
	mso-style-link:"Header Char";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 216.0pt right 432.0pt;
	font-size:11.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Angsana New";
	mso-ansi-language:X-NONE;
	mso-fareast-language:X-NONE;
	mso-bidi-language:TH;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-unhide:no;
	mso-style-link:"Footer Char";
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	tab-stops:center 216.0pt right 432.0pt;
	font-size:11.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Angsana New";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;}
p.MsoTitle, li.MsoTitle, div.MsoTitle
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	text-align:center;
	mso-pagination:widow-orphan;
	font-size:14.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Angsana New";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;
	font-weight:bold;
	mso-bidi-font-weight:normal;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{mso-style-unhide:no;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	text-align:justify;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Angsana New";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;}
p.MsoBodyTextIndent, li.MsoBodyTextIndent, div.MsoBodyTextIndent
	{mso-style-unhide:no;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:35.45pt;
	text-align:justify;
	text-indent:.55pt;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Angsana New";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;}
p.MsoSubtitle, li.MsoSubtitle, div.MsoSubtitle
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	text-align:center;
	mso-pagination:widow-orphan;
	font-size:16.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Angsana New";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;
	font-weight:bold;}
a:link, span.MsoHyperlink
	{mso-style-unhide:no;
	mso-style-parent:"";
	color:blue;
	text-decoration:underline;
	text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
	{mso-style-noshow:yes;
	mso-style-priority:99;
	color:purple;
	mso-themecolor:followedhyperlink;
	text-decoration:underline;
	text-underline:single;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-noshow:yes;
	mso-style-unhide:no;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;}
p.Comment, li.Comment, div.Comment
	{mso-style-name:Comment;
	mso-style-update:auto;
	mso-style-unhide:no;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:36.0pt;
	mso-pagination:widow-orphan;
	font-size:20.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";
	mso-ansi-language:EN-AU;
	mso-fareast-language:DE;}
p.Text, li.Text, div.Text
	{mso-style-name:Text;
	mso-style-update:auto;
	mso-style-unhide:no;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:39.7pt;
	text-align:center;
	mso-pagination:widow-orphan;
	font-size:14.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-language:EN-US;
	font-weight:bold;
	mso-bidi-font-weight:normal;
	font-style:italic;
	mso-bidi-font-style:normal;}
p.Headersmall, li.Headersmall, div.Headersmall
	{mso-style-name:"Header small";
	mso-style-unhide:no;
	mso-style-parent:Header;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:right;
	mso-pagination:widow-orphan;
	tab-stops:center 8.0cm right 16.0cm;
	font-size:11.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";
	mso-ansi-language:X-NONE;
	mso-fareast-language:X-NONE;
	font-style:italic;
	mso-bidi-font-style:normal;}
p.Point, li.Point, div.Point
	{mso-style-name:Point;
	mso-style-update:auto;
	mso-style-unhide:no;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:36.85pt;
	text-indent:-36.85pt;
	mso-pagination:widow-orphan;
	mso-list:l3 level1 lfo4;
	tab-stops:list 36.0pt;
	font-size:11.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Angsana New";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;}
p.Style1, li.Style1, div.Style1
	{mso-style-name:Style1;
	mso-style-unhide:no;
	mso-style-parent:Point;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:35.7pt;
	text-indent:-17.85pt;
	mso-pagination:widow-orphan;
	mso-list:l2 level1 lfo2;
	tab-stops:list 36.0pt;
	font-size:11.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Angsana New";
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;}
span.FooterChar
	{mso-style-name:"Footer Char";
	mso-style-noshow:yes;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-parent:"";
	mso-style-link:Footer;
	mso-ansi-font-size:11.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-ascii-font-family:Arial;
	mso-hansi-font-family:Arial;
	mso-bidi-font-family:"Angsana New";
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:TH;}
span.HeaderChar
	{mso-style-name:"Header Char";
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-parent:"";
	mso-style-link:Header;
	mso-ansi-font-size:11.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-ascii-font-family:Arial;
	mso-hansi-font-family:Arial;
	mso-bidi-font-family:"Angsana New";
	mso-bidi-language:TH;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("Shofiyuddin_files/header.htm") fs;
	mso-footnote-continuation-separator:url("Shofiyuddin_files/header.htm") fcs;
	mso-endnote-separator:url("Shofiyuddin_files/header.htm") es;
	mso-endnote-continuation-separator:url("Shofiyuddin_files/header.htm") ecs;}
@page WordSection1
	{size:21.0cm 842.0pt;
	margin:62.75pt 70.85pt 42.55pt 89.85pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-even-header:url("../add/Shofiyuddin_files/header.htm") eh1;
	mso-header:url("../add/Shofiyuddin_files/header.htm") h1;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 @list l0
	{mso-list-id:259916159;
	mso-list-template-ids:159042916;
	mso-list-style-name:"Style Bulleted";}
@list l0:level1
	{mso-level-number-format:bullet;
	mso-level-style-link:Style1;
	mso-level-text:-;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	mso-ascii-font-family:Arial;
	mso-hansi-font-family:Arial;}
@list l0:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l0:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l0:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l0:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l0:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l0:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l0:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l0:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l1
	{mso-list-id:865026736;
	mso-list-template-ids:1540787286;}
@list l1:level1
	{mso-level-style-link:"Heading 1";
	mso-level-tab-stop:1.0cm;
	mso-level-number-position:left;
	margin-left:1.0cm;
	text-indent:-1.0cm;}
@list l1:level2
	{mso-level-style-link:"Heading 2";
	mso-level-text:"%1\.%2";
	mso-level-tab-stop:28.8pt;
	mso-level-number-position:left;
	margin-left:28.8pt;
	text-indent:-28.8pt;}
@list l1:level3
	{mso-level-style-link:"Heading 3";
	mso-level-text:"%1\.%2\.%3";
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	margin-left:36.0pt;
	text-indent:-36.0pt;}
@list l1:level4
	{mso-level-style-link:"Heading 4";
	mso-level-text:"%1\.%2\.%3\.%4";
	mso-level-tab-stop:43.2pt;
	mso-level-number-position:left;
	margin-left:43.2pt;
	text-indent:-43.2pt;}
@list l1:level5
	{mso-level-style-link:"Heading 5";
	mso-level-text:"%1\.%2\.%3\.%4\.%5";
	mso-level-tab-stop:51.05pt;
	mso-level-number-position:left;
	margin-left:51.05pt;
	text-indent:-51.05pt;}
@list l1:level6
	{mso-level-style-link:"Heading 6";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6";
	mso-level-tab-stop:60.95pt;
	mso-level-number-position:left;
	margin-left:60.95pt;
	text-indent:-60.95pt;}
@list l1:level7
	{mso-level-style-link:"Heading 7";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7";
	mso-level-tab-stop:70.9pt;
	mso-level-number-position:left;
	margin-left:70.9pt;
	text-indent:-70.9pt;}
@list l1:level8
	{mso-level-style-link:"Heading 8";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8";
	mso-level-tab-stop:79.4pt;
	mso-level-number-position:left;
	margin-left:79.4pt;
	text-indent:-79.4pt;}
@list l1:level9
	{mso-level-style-link:"Heading 9";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9";
	mso-level-tab-stop:87.9pt;
	mso-level-number-position:left;
	margin-left:87.9pt;
	text-indent:-87.9pt;}
@list l2
	{mso-list-id:913590538;
	mso-list-template-ids:159042916;
	mso-list-style-id:259916159;}
@list l2:level1
	{mso-level-number-format:bullet;
	mso-level-style-link:Style1;
	mso-level-text:-;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	mso-ascii-font-family:Arial;
	mso-hansi-font-family:Arial;}
@list l2:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l2:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l2:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l2:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l2:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l2:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l2:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l2:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l3
	{mso-list-id:1767844556;
	mso-list-type:hybrid;
	mso-list-template-ids:937736528 -522781424 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l3:level1
	{mso-level-number-format:bullet;
	mso-level-style-link:Point;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;
	color:windowtext;}
@list l3:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l3:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l3:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l3:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l3:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l3:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l3:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l3:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
	#printable { display: none; }

    @media print
    {
    	#non-printable { display: none; }
    	#printable { display: block; }
    }
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-unhide:no;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman","serif";}
table.MsoTableGrid
	{mso-style-name:"Table Grid";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-unhide:no;
	border:solid windowtext 1.0pt;
	mso-border-alt:solid windowtext .5pt;
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-border-insideh:.5pt solid windowtext;
	mso-border-insidev:.5pt solid windowtext;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman","serif";}
table.signaturetable
	{mso-style-name:"signature table";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-unhide:no;
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-tstyle-vert-align:middle;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan lines-together;
	font-size:9.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Arial","sans-serif";
	mso-bidi-font-family:"Times New Roman";}
table.signaturetableFirstRow
	{mso-style-name:"signature table";
	mso-table-condition:first-row;
	mso-style-unhide:no;
	mso-tstyle-border-bottom:.5pt solid windowtext;
	font-size:12.0pt;
	mso-ansi-font-size:12.0pt;
	font-family:"Arial","sans-serif";
	mso-ascii-font-family:Arial;
	mso-hansi-font-family:Arial;}
table.signaturetableLastRow
	{mso-style-name:"signature table";
	mso-table-condition:last-row;
	mso-style-unhide:no;
	mso-tstyle-border-top:cell-none;
	mso-tstyle-border-left:cell-none;
	mso-tstyle-border-bottom:cell-none;
	mso-tstyle-border-right:cell-none;
	mso-tstyle-diagonal-down:cell-none;
	mso-tstyle-diagonal-up:cell-none;
	mso-tstyle-border-insideh:cell-none;
	mso-tstyle-border-insidev:cell-none;
	font-size:8.0pt;
	mso-ansi-font-size:8.0pt;
	font-family:"Arial","sans-serif";
	mso-ascii-font-family:Arial;
	mso-hansi-font-family:Arial;}
table.signaturetableFirstCol
	{mso-style-name:"signature table";
	mso-table-condition:first-column;
	mso-style-unhide:no;
	mso-tstyle-border-top:cell-none;
	mso-tstyle-border-left:cell-none;
	mso-tstyle-border-bottom:cell-none;
	mso-tstyle-border-right:cell-none;
	mso-tstyle-diagonal-down:cell-none;
	mso-tstyle-diagonal-up:cell-none;
	mso-tstyle-border-insideh:cell-none;
	mso-tstyle-border-insidev:cell-none;}
table.signaturetableNWCell
	{mso-style-name:"signature table";
	mso-table-condition:nw-cell;
	mso-style-unhide:no;
	mso-tstyle-border-top:cell-none;
	mso-tstyle-border-left:cell-none;
	mso-tstyle-border-bottom:cell-none;
	mso-tstyle-border-right:cell-none;
	mso-tstyle-diagonal-down:cell-none;
	mso-tstyle-diagonal-up:cell-none;
	mso-tstyle-border-insideh:cell-none;
	mso-tstyle-border-insidev:cell-none;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="2049"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
<script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
    }
</script>

</head>

<body lang=EN-US link=blue vlink=purple style='tab-interval:36.0pt'>

<div class=WordSection1>

<div align=center>


<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:white;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>Filled in by Line Manager<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoHeader><b style='mso-bidi-font-weight:normal'><span
  style='mso-ansi-language:EN-US;mso-fareast-language:EN-US'>User Account
  Request Classification<o:p></o:p></span></b></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:16.05pt'>
   <td colspan="3" valign=top style='width:34.8%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:16.05pt'>&nbsp;o <?php echo $row_Recordset1['jenis_uar']; ?></td>
   </tr>
 <tr style='mso-yfti-irow:3'>
  <td width="100%" valign=top style='width:34.8%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>System<o:p></o:p></span></p>  </td>
  <td width="65%" colspan=2 valign=top style='width:65.2%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'><p class=MsoHeader><?php echo $row_Recordset1['name_system']; ?></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoHeader><b style='mso-bidi-font-weight:normal'><span
  style='mso-ansi-language:EN-US;mso-fareast-language:EN-US'>User Details<o:p></o:p></span></b></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width="100%" valign=top style='width:34.8%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>First Name / Last Name<o:p></o:p></span></p>  </td>
  <td width="65%" colspan=2 valign=top style='width:65.2%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'><?php echo $row_Recordset1['name']; ?><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:5.35pt'>
  <td width="100%" valign=top style='width:34.8%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.35pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>Department / <st1:place w:st="on"><st1:PlaceName w:st="on">Cost</st1:PlaceName>
   <st1:PlaceType w:st="on">Center</st1:PlaceType></st1:place><o:p></o:p></span></p>  </td>
  <td width="65%" colspan=2 valign=top style='width:65.2%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:5.35pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'><?php echo $row_Recordset1['department']; ?><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width="100%" valign=top style='width:34.8%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>Phone Number<o:p></o:p></span></p>  </td>
  <td width="65%" colspan=2 valign=top style='width:65.2%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'><?php echo $row_Recordset1['phone']; ?><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td width="100%" valign=top style='width:34.8%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>User Name<o:p></o:p></span></p>  </td>
  <td width="65%" colspan=2 valign=top style='width:65.2%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'><?php echo $row_Recordset1['username']; ?><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:9'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoHeader><b style='mso-bidi-font-weight:normal'><span
  style='mso-ansi-language:EN-US;mso-fareast-language:EN-US'>Account Request
  Details<o:p></o:p></span></b></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:10'>
   <td colspan="3" valign=top style='width:34.8%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>o <?php echo $row_Recordset1['uar_details']; ?></td>
   </tr>
 <tr style='mso-yfti-irow:11;height:21.1pt'>
  <td width="100%" valign=top style='width:34.8%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.1pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>User Roles to be removed<o:p></o:p></span></p>  </td>
  <td width="65%" colspan=2 valign=top style='width:65.2%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.1pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'><?php echo $row_Recordset1['user_role_remove']; ?><span style='mso-tab-count:1'>                                                                   </span><o:p></o:p></span></p>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:22.9pt'>
  <td width="100%" valign=top style='width:34.8%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.9pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>User Roles to be added<o:p></o:p></span></p>  </td>
  <td width="65%" colspan=2 valign=top style='width:65.2%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.9pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'><?php echo $row_Recordset1['user_role_added']; ?><span style='mso-tab-count:1'>                                                          </span><o:p></o:p></span></p>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'><span style='mso-tab-count:1'>                                                                        </span><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:18.85pt'>
  <td width="100%" valign=top style='width:34.8%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.85pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>Reason for Request<o:p></o:p></span></p>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>  </td>
  <td width="65%" colspan=2 valign=top style='width:65.2%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.85pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'><?php echo $row_Recordset1['reason_request']; ?><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:31.0pt'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:31.0pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>Training needed<o:p></o:p></span></p>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'><span style='mso-spacerun:yes'> </span></span>o <?php echo $row_Recordset1['training_needed']; ?><span style='mso-ansi-language:
  EN-US;mso-fareast-language:EN-US'><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:15'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoHeader><b style='mso-bidi-font-weight:normal'><span
  style='mso-ansi-language:EN-US;mso-fareast-language:EN-US'>Approvals<o:p></o:p></span></b></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:20.65pt'>
  <td width="100%" valign=top style='width:34.82%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:20.65pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>User’s Line Manager<o:p></o:p></span></p>  </td>
  <td width="65%" colspan=2 valign=top style='width:65.18%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.65pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>(Name, Sign &amp; Date)<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:20.65pt'>
  <td width="100%" valign=top style='width:34.82%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:20.65pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>System Owner<o:p></o:p></span></p>  </td>
  <td width="65%" colspan=2 valign=top style='width:65.18%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.65pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>(Name, Sign &amp; Date)<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:34.0pt'>
  <td width="100%" valign=top style='width:34.82%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:34.0pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>Data Owner<o:p></o:p></span></p>  </td>
  <td width="65%" colspan=2 valign=top style='width:65.18%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.0pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>(Name, Sign &amp; Date)<o:p></o:p></span></p>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:19'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoHeader><b style='mso-bidi-font-weight:normal'><span
  style='mso-ansi-language:EN-US;mso-fareast-language:EN-US'>Training
  Confirmation<o:p></o:p></span></b></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:20;height:22.9pt'>
  <td width="100%" valign=top style='width:34.82%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.9pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>Trainer<o:p></o:p></span></p>  </td>
  <td width="65%" colspan=2 valign=top style='width:65.18%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.9pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>(Name, Sign &amp; Date)<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:21'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoHeader><b style='mso-bidi-font-weight:normal'><span
  style='mso-ansi-language:EN-US;mso-fareast-language:EN-US'>User Account
  Creation<o:p></o:p></span></b></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:22;height:40.0pt'>
  <td width="100%" valign=top style='width:34.82%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:white;padding:0cm 5.4pt 0cm 5.4pt;height:40.0pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>Application Administrator<o:p></o:p></span></p>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>(admin sign and date after user account is created) <o:p></o:p></span></p>  </td>
  <td width="65%" colspan=2 valign=top style='width:65.18%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
  height:40.0pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>(Name, Sign &amp; Date)<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:23;height:40.0pt'>
  <td width="100%" valign=top style='width:34.82%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:white;padding:0cm 5.4pt 0cm 5.4pt;height:40.0pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>Operating System Administrator <o:p></o:p></span></p>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>(admin sign and date after user account is created) <o:p></o:p></span></p>  </td>
  <td width="65%" colspan=2 valign=top style='width:65.18%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
  height:40.0pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>(Name, Sign &amp; Date)<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:24;height:9.4pt'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt;height:9.4pt'>
  <p class=MsoHeader><b style='mso-bidi-font-weight:normal'><span
  style='mso-ansi-language:EN-US;mso-fareast-language:EN-US'>Confirmation of
  Request Implementation<o:p></o:p></span></b></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:25;height:40.1pt'>
  <td width="100%" rowspan=2 valign=top style='width:34.82%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:40.1pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>Implementer<o:p></o:p></span></p>  </td>
  <td width="65%" valign=top style='width:32.98%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:40.1pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>In case new users or changes to user rights: The user account request
  was implemented. The user is informed about the implementation.<o:p></o:p></span></p>  </td>
  <td width="32%" valign=top style='width:32.2%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:40.1pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>In case of deactivation requests: The user account request was
  implemented. The manager is informed about the implementation.<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:26;height:38.45pt'>
  <td width="65%" valign=top style='width:32.98%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:38.45pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>Verification from User:<o:p></o:p></span></p>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>(Name, Sign &amp; Date)<o:p></o:p></span></p>  </td>
  <td width="32%" valign=top style='width:32.2%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:38.45pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>Verification from Line manager:<o:p></o:p></span></p>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'>(Name, Sign &amp; Date)<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:27;mso-yfti-lastrow:yes;height:5.35pt'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt;height:5.35pt'>
  <p class=MsoHeader><span style='mso-ansi-language:EN-US;mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>  </td>
 </tr>
</table>

</div>

<p class=MsoHeader><span lang=X-NONE>Distribution to :
___________________________</span></p>

<p class=MsoNormal>Original document kept by System Owner</p>

</div>


                      <div id="non-printable">
                        <table border="0" align="center">
                        <tr>
                          <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
                              <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">First</a>
                              <?php } // Show if not first page ?>                          </td>
                          <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
                              <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>">Previous</a>
                              <?php } // Show if not first page ?>                          </td>
                          <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
                              <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">Next</a>
                              <?php } // Show if not last page ?>                          </td>
                          <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
                              <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>">Last</a>
                              <?php } // Show if not last page ?>                          </td>
                        </tr>
                      </table>
                      </div>
                      <div align="center">
<input id="printpagebutton" type="button" value="Print this page" onclick="printpage()"/>                        </div> 
                        
                        
                        </div>
                        
                      </div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
