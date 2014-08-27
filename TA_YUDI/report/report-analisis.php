<?php require_once('../Connections/koneksi.php'); ?>
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

mysql_select_db($database_koneksi, $koneksi);
$query_Recordset1 = "SELECT * FROM analisa";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $koneksi) or die(mysql_error());
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
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=us-ascii">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 12">
<meta name=Originator content="Microsoft Word 12">
<link rel=File-List href="Report%20Analisis_files/filelist.xml">
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>intel</o:Author>
  <o:Template>Normal</o:Template>
  <o:LastAuthor>intel</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>13</o:TotalTime>
  <o:Created>2014-05-28T12:49:00Z</o:Created>
  <o:LastSaved>2014-05-28T12:49:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>65</o:Words>
  <o:Characters>511</o:Characters>
  <o:Lines>4</o:Lines>
  <o:Paragraphs>1</o:Paragraphs>
  <o:CharactersWithSpaces>575</o:CharactersWithSpaces>
  <o:Version>12.00</o:Version>
 </o:DocumentProperties>
</xml><![endif]-->
<link rel=themeData href="Report%20Analisis_files/themedata.thmx">
<link rel=colorSchemeMapping
href="Report%20Analisis_files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:SpellingState>Clean</w:SpellingState>
  <w:GrammarState>Clean</w:GrammarState>
  <w:TrackMoves/>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:DrawingGridHorizontalSpacing>5,5 pt</w:DrawingGridHorizontalSpacing>
  <w:DisplayHorizontalDrawingGridEvery>2</w:DisplayHorizontalDrawingGridEvery>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>EN-US</w:LidThemeOther>
  <w:LidThemeAsian>JA</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:DontVertAlignCellWithSp/>
   <w:DontBreakConstrainedForcedTables/>
   <w:DontVertAlignInTxbx/>
   <w:Word11KerningPairs/>
   <w:CachedColBalance/>
   <w:UseFELayout/>
  </w:Compatibility>
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="--"/>
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
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>
  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" Priority="10" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" Priority="11" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" Priority="22" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>
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
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520092929 1073786111 9 0 415 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:10.0pt;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
@page Section1
	{size:612.0pt 792.0pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
	#printable { display: none; }

    @media print
    {
    	#non-printable { display: none; }
    	#printable { display: block; }
    }
.style1 {
	font-size: 24px;
	font-weight: bold;
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
	mso-style-priority:99;
	mso-style-qformat:yes;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1026"/>
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

<body lang=EN-US style='tab-interval:36.0pt'>

<div class=Section1>
  <div align="center" class="style1">
    <p>HPLC ANALYSIS REPORT OF ASSAY  </p>
  </div>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=608
 style='width:456.0pt;margin-left:5.15pt;border-collapse:collapse;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:51.0pt'>
  <td width=151 valign=bottom style='width:113.0pt;border:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:51.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:20.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>Report <span
  class=SpellE>Analisis</span><o:p></o:p></span></b></p>  </td>
  <td width=167 valign=bottom style='width:125.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:51.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:20.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></b></p>  </td>
  <td width=160 valign=bottom style='width:120.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:51.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:20.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></b></p>  </td>
  <td width=131 valign=bottom style='width:98.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:51.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:20.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></b></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:30.0pt'>
  <td width=151 style='width:113.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>PRODUCT<o:p></o:p></span></b></p>  </td>
  <td width=167 style='width:125.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:16.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'><?php echo $row_Recordset1['nama_produk']; ?>
    <o:p></o:p></span></b></p>  </td>
  <td width=160 style='width:120.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:14.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>BATCH NO.<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>:<o:p></o:p></span></b></p>  </td>
  <td width=131 style='width:98.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:#00EE00;padding:0cm 5.4pt 0cm 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:16.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'><?php echo $row_Recordset1['no_batch']; ?></span></b></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:5.25pt'>
   <td style='width:113.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:30.0pt'><p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>NAMA ALAT
           <o:p></o:p>
   </span></b></p></td>
   <td colspan="2" style='width:125.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:30.0pt'><p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:16.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>
     <o:p></o:p>
   </span></b></p></td>
  <td width=131 valign=bottom style='width:98.0pt;border:none;border-right:
  solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Times New Roman","serif";mso-fareast-font-family:
  "Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:21.0pt'>
   <td colspan="4" style='width:113.0pt; border:solid windowtext 1.0pt; border-right:
1px; mso-border-top-alt:solid windowtext .5pt; mso-border-left-alt:solid windowtext .5pt; mso-border-bottom-alt:solid windowtext .5pt; padding:0cm 5.4pt 0cm 5.4pt;border-right:solid windowtext 1.0pt;
  mso-border-right-alt: height:21.0pt'><table width="814" cellpadding="0" cellspacing="0">
     <col width="32">
     <col width="102">
     <col width="13">
     <col width="56">
     <col width="37">
     <col width="85">
     <col width="24">
     <col width="139">
     <tr height="32">
       <td width="160" height="32">Flow Rate</td>
       <td width="3">:</td>
       <td width="237"><span class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><b><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;color:black"><?php echo $row_Recordset1['flowrate']; ?></span></b></span></td>
       <td colspan="2"><div align="left">mL/min</div></td>
     </tr>

     <tr height="32">
       <td height="32">Vol.    Inject</td>
       <td>:</td>
       <td><b><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;color:black"><?php echo $row_Recordset1['volinject']; ?></span></b></td>
       <td width="261"><div align="left">&micro;L</div></td>
       <td width="14"><div align="left"></div></td>
     </tr>
     <tr height="32">
       <td height="32">Detector/Wavelength</td>
       <td>:</td>
       <td><b><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;color:black"><?php echo $row_Recordset1['wavelength']; ?></span></b></td>
       <td width="261"><div align="left">nm</div></td>
       <td><div align="left"></div></td>
     </tr>
     <tr height="32">
       <td height="32">Run    Time</td>
       <td>:</td>
       <td><b><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;color:black"><?php echo $row_Recordset1['runtime']; ?></span></b></td>
       <td colspan="2"><div align="left">minutes</div></td>
     </tr>
     <tr height="32">
       <td height="32">Column    Temp.</td>
       <td>:</td>
       <td><b><span style="font-size:16.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;color:black"><?php echo $row_Recordset1['columnpump']; ?></span></b></td>
       <td width="261"><div align="left">&deg;C</div></td>
       <td><div align="left"></div></td>
     </tr>
   </table></td>
   </tr>
 <tr style='mso-yfti-irow:3;height:21.0pt'>
  <td width=151 style='width:113.0pt;border:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></b></p>  </td>
  <td width=167 style='width:125.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></b></p>  </td>
  <td width=160 style='width:120.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></b></p>  </td>
  <td width=131 style='width:98.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></b></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:18.95pt'>
  <td width=151 rowspan=2 style='width:113.0pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid black 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid black .5pt;
  background:#99CCFF;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>TEST SOLUTION<o:p></o:p></span></b></p>  </td>
  <td width=167 style='width:125.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;background:#99CCFF;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>PEAK AREA<o:p></o:p></span></b></p>  </td>
  <td width=160 style='width:120.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=131 style='width:98.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:18.95pt'>
  <td width=167 style='width:125.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:#99CCFF;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>(individual<o:p></o:p></span></b></p>  </td>
  <td width=160 style='width:120.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>Lot No.<o:p></o:p></span></p>  </td>
  <td width=131 style='width:98.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;background:#00EE00;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><strong><?php echo $row_Recordset1['lot_no']; ?></strong></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:18.95pt'>
  <td width=151 style='width:113.0pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=160 style='width:120.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>Cont No.<o:p></o:p></span></p>  </td>
  <td width=131 style='width:98.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;background:#00EE00;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>
    <o:p></o:p></span></b><strong><?php echo $row_Recordset1['cont_no']; ?></strong></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:18.95pt'>
  <td width=151 style='width:113.0pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=160 style='width:120.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>Potency (P)<o:p></o:p></span></p>  </td>
  <td width=131 style='width:98.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;background:#00EE00;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'><strong><?php echo $row_Recordset1['potency']; ?></strong></td>
 </tr>
 <tr style='mso-yfti-irow:8;height:18.95pt'>
  <td width=151 style='width:113.0pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>SST Solution (S1-S6)<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#00EE00;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span class=SpellE><b><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif";mso-fareast-font-family:
  "Times New Roman"'><?php echo $row_Recordset1['sst_total']; ?></span></b></span><b><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman"'>
        <o:p></o:p></span></b></p>  </td>
  <td width=160 style='width:120.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>Expired Date<o:p></o:p></span></p>  </td>
  <td width=131 style='width:98.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:#00EE00;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'><?php echo $row_Recordset1['exp_date']; ?></span></b></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:18.95pt'>
  <td width=151 style='width:113.0pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>(Reproducibility)<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=160 style='width:120.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=131 style='width:98.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black'>&nbsp;<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:18.95pt'>
  <td width=151 style='width:113.0pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>Bracket Standard
  (B1-B4)<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#00EE00;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman"'>
    <o:p></o:p></span></b><strong><?php echo $row_Recordset1['bracket_total']; ?></strong></p>  </td>
  <td width=160 style='width:120.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=131 style='width:98.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:18.95pt'>
  <td width=151 style='width:113.0pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=160 style='width:120.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>Performance of Column
  :<o:p></o:p></span></p>  </td>
  <td width=131 style='width:98.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black'>&nbsp;<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:30.0pt'>
  <td width=151 style='width:113.0pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=160 style='width:120.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#99CCFF;padding:0cm 5.4pt 0cm 5.4pt;
  height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>No.<o:p></o:p></span></b></p>  </td>
  <td width=131 style='width:98.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:#99CCFF;padding:0cm 5.4pt 0cm 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>Tailing Factor (T)<o:p></o:p></span></b></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:18.95pt'>
  <td width=151 style='width:113.0pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>&nbsp;<o:p></o:p></span></b></p>  </td>
  <td width=160 style='width:120.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>R1-R6<o:p></o:p></span></p>  </td>
  <td width=131 style='width:98.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span><?php echo $row_Recordset1['tailing_factor_total']; ?></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:37.5pt'>
  <td width=151 style='width:113.0pt;border:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:37.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:37.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=160 style='width:120.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:37.5pt'></td>
  <td width=131 style='width:98.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:37.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:35.25pt'>
  <td width=151 style='width:113.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;background:
  #99CCFF;padding:0cm 5.4pt 0cm 5.4pt;height:35.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>Acceptance Criteria<o:p></o:p></span></b></p>  </td>
  <td width=167 style='width:125.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#99CCFF;padding:0cm 5.4pt 0cm 5.4pt;
  height:35.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>Result<o:p></o:p></span></b></p>  </td>
  <td width=160 style='width:120.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  background:#99CCFF;padding:0cm 5.4pt 0cm 5.4pt;height:35.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>Conclusion</span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:14px; font-family:&quot;Times New Roman&quot;,&quot;serif&quot;; mso-fareast-font-family:&quot;Times New Roman&quot;; color:black'>If sst-bracket/tailing factor &gt;= 2 maka akan not complies</span></b></p></td>
  <td width=131 style='width:98.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#99CCFF;padding:0cm 5.4pt 0cm 5.4pt;
  height:35.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>&nbsp;<o:p></o:p></span></b></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:18.95pt'>
  <td width=151 style='width:113.0pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>Remarks :<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span>
  <?php  echo ($row_Recordset1['sst_total']-$row_Recordset1['bracket_total'])/$row_Recordset1['tailing_factor_total']; 

?></p>  </td>
  <td width=160 style='width:120.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>
 <?php  if (($row_Recordset1['sst_total']-$row_Recordset1['bracket_total'])/$row_Recordset1['tailing_factor_total'] <= 2){
   echo "Complies";
}
else {
    echo "Not Complies";
}
?>


&nbsp;
      <o:p></o:p></span></p>  </td>
  <td width=131 style='width:98.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:18.95pt'>
  <td width=151 style='width:113.0pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'></td>
  <td width=160 style='width:120.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'></td>
  <td width=131 style='width:98.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:18.95pt'>
  <td width=151 style='width:113.0pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'></td>
  <td width=160 style='width:120.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'></td>
  <td width=131 style='width:98.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:19;height:18.95pt'>
  <td width=151 style='width:113.0pt;border-top:solid windowtext 1.0pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>Done by (Name)<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:#00EE00;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;color:black'><strong>&nbsp;
        <o:p></o:p>
  </strong></span><strong><?php echo $row_Recordset1['nama_analyst']; ?></strong></p>  </td>
  <td width=160 style='width:120.0pt;border:none;border-top:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>Checked by (Name)<o:p></o:p></span></p>  </td>
  <td width=131 style='width:98.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:20;height:18.95pt'>
  <td width=151 style='width:113.0pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=160 style='width:120.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=131 style='width:98.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:21;height:18.95pt'>
  <td width=151 style='width:113.0pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>Sign.<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=160 style='width:120.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>Sign.<o:p></o:p></span></p>  </td>
  <td width=131 style='width:98.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:22;height:18.95pt'>
  <td width=151 style='width:113.0pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=160 style='width:120.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=131 style='width:98.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:23;mso-yfti-lastrow:yes;height:18.95pt'>
  <td width=151 style='width:113.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>Date<o:p></o:p></span></p>  </td>
  <td width=167 style='width:125.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
  <td width=160 style='width:120.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
  color:black'>Date<o:p></o:p></span></p>  </td>
  <td width=131 style='width:98.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;<o:p></o:p></span></p>  </td>
 </tr>
</table>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>

<div id="non-printable">
<table border="0">
  <tr>
    <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">First</a>
          <?php } // Show if not first page ?>
    </td>
    <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>">Previous</a>
          <?php } // Show if not first page ?>
    </td>
    <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">Next</a>
          <?php } // Show if not last page ?>
    </td>
    <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>">Last</a>
          <?php } // Show if not last page ?>
    </td>
    <td>
          <a href="../input/analisa/index.php">Back</a>    </td>
  </tr>
</table>
 </div>
 <div align="center">
<input id="printpagebutton" type="button" value="Print this page" onClick="printpage()"/>                        </div> 

</body>

</html>
<?php
mysql_free_result($Recordset1);

?>
