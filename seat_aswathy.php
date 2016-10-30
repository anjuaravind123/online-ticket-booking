<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:100%;
	height:464px;
	z-index:1;
	left: 0px;
	top: 6px;
}
.style1 {
	font-size: xx-large;
	font-weight: bold;
	font-style: italic;
	color: #9966FF;
}
.style3 {
	color: #FFFFFF;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style6 {color: #FFFF00; font-weight: bold; font-style: italic; }
a:link {
	color: #FFFF00;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFF00;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
}
body {
	background-image: url();
	background-color: #000000;
}
.style7 {
	color: #FFFFFF;
	font-weight: bold;
}
.style8 {color: #FFFFFF}
.style9 {color: #FF0000}
.style11 {color: #FF0000; font-weight: bold; }
.style12 {
	color: #FF0000;
	font-size: 24px;
	font-weight: bold;
}
.style2 {	color: #FFFF66;
	font-style: italic;
	font-weight: bold;
}
.style15 {	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style22 {color: #FFFF00; font-weight: bold; font-style: italic; font-family: "Times New Roman", Times, serif; }
.style29 {color: #FFFF00}
-->
</style>
</head>

<body>
<?php
session_start();
$arr[]="";
$con=mysql_connect("localhost","root","");
if(!$con )
{
die ("could not connect".mysql_error());
}
$db=mysql_select_db('theatremanagementsystem');
//$qry="select *from tickets";

$tid="select *from theatre where theatrename='Aswathy'";
$resultid=mysql_query($tid);
$rowtid=mysql_fetch_row($resultid);
$tidvalue=$rowtid[0];
$qry="select *from tickets where date='$_GET[dt]' and theatreid='$tidvalue'";
$res=mysql_query($qry) or die(mysql_error());
 while($row=mysql_fetch_array($res))
	{ 
	$seatno=$row['seats'];
	$as=explode(",",$seatno);
	foreach ($as as $val)
	{
	$arr[]=$val;
	}
	}
	
	?>

<form name="frm" method="post" action="options.php">
<div id="Layer1">
  <table width="100%" height="92" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td background="pic/curtains08-02-22.jpg" bgcolor="#E0DFE3"><div align="center" class="style1">
        <div align="center" class="style3 style8"><ins>SL THEATRE COMPLEX </ins></div>
      </div></td>
    </tr>
  </table>
  <table width="100%" height="37" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="6%" height="37" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style2"><a href="mainpage.php">HOME</a></div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="nowshowing.php">NOW SHOWING </a></div></td>
      <td width="14%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style15"><a href="terms and conditions.php">TERMS &amp; CONDITIONS </a></div></td>
      <td width="12%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="comingsoon.php">COMING SOON </a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="ECoupon.php">E-COUPON</a></div></td>
      <td width="8%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery.php">GALLERY</a></div></td>
      <td width="12%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="contactus.php">CONTACT US</a> </div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><a href="aboutus.php"><strong>ABOUT US</strong></a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6">
          <div align="center"><a href="guest_aboutus.php"></a> <a href="feedback.php" class="style15">FEEDBACK</a></div>
      </div></td>
      <td width="8%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style29"><strong><a href="login.php">LOGOUT</a></strong></div></td>
    </tr>
  </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <th colspan="2" scope="col"><?php $Email=$_SESSION['user'];echo "<font color=yellow><b>$Email</b></font>";?>&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th scope="col"><span class="style8">Film:<?php echo $_GET['fn'];?>&nbsp;</span></th>
      <th scope="col"><span class="style8">Date:<?php echo $_GET['dt'];?>&nbsp;</span></th>
      <th scope="col"><span class="style8">Show:<?php echo $_GET['sh'];?>&nbsp;</span></th>
      <th scope="col"><span class="style8">Time:<?php echo $_GET['tm'];?>&nbsp;</span></th>
      <th scope="col"><span class="style8">
      
        &nbsp;</span></th>
    </tr>
  </table>
 
  <table width="100%" height="376" border="0" cellpadding="0" cellspacing="0">

    <tr>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="3%"><?php //print_r($arr);?>&nbsp;</td>
      <td colspan="14"><input type="hidden" name="theatre" value="<?php //echo $_GET['tn'];?>" />
        <input type="hidden" name="film_name" value="<?php echo $_GET['fn'];?>" />
        <input type="hidden" name="shows"  value="<?php echo $_GET['sh'];?>"/>
        <input type="hidden" name="date"  value="<?php echo $_GET['dt'];?>"/>
		<input type="hidden" name="time"  value="<?php echo $_GET['tm'];?>"/>&nbsp;
		<input type="hidden" name="showid"  value="<?php echo $_GET['showid'];?>"/>
		</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td colspan="7" rowspan="2"><div align="center" class="style12">ASWATHY</div> <input name="theatre" type="hidden" id="theatre"  value="ASWATHY"/></td>
      <td width="1%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="14%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="14%">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="53"><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td colspan="2"><div align="right" class="style11 style9">A</div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a39"  <?php if (in_array("a39",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a40"   <?php if (in_array("a40",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a15"   <?php if (in_array("a15",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a16"   <?php if (in_array("a16",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a17"  <?php if (in_array("a17",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a18"  <?php if (in_array("a18",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a19"  <?php if (in_array("a19",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a20"   <?php if (in_array("a20",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a21"  <?php if (in_array("a21",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a22"   <?php if (in_array("a22",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">10</span></strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
    </tr>
    <tr>
      <td height="39"><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style11">B</span></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a23"   <?php if (in_array("a23",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a24"   <?php if (in_array("a24",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a25"   <?php if (in_array("a25",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a26"  <?php if (in_array("a26",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        4 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a27"  <?php if (in_array("a27",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a28"   <?php if (in_array("a28",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a29"  <?php if (in_array("a29",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><span class="style9">
        <input name="a3[]" type="checkbox" id="a3[]" value="a1"  <?php if (in_array("a1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
8</span></div></td>
      <td><div align="center" class="style9">
          <input name="a3[]" type="checkbox" id="a3[]" value="a2" <?php if (in_array("a2",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        9</div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
    </tr>
    <tr>
      <td height="41"><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a3" <?php if (in_array("a3",$arr)){?> checked="checked" disabled="disabled"<?php }?>   /> 
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="a3[]" type="checkbox" id="a3[]" value="a4"   <?php if (in_array("a4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a5"   <?php if (in_array("a5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="left"><span class="style11">C</span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style11">C</span></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a30"   <?php if (in_array("a30",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a31"   <?php if (in_array("a31",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a32"   <?php if (in_array("a32",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a33"   <?php if (in_array("a33",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a34"   <?php if (in_array("a34",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style11">D</div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a35"   <?php if (in_array("a35",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a36"  <?php if (in_array("a36",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a37"  <?php if (in_array("a37",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a38"  <?php if (in_array("a38",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a39"   <?php if (in_array("a39",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">9</span> </strong></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3" value="a6"  <?php if (in_array("a6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3" value="a7" <?php if (in_array("a7",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3" value="a8"  <?php if (in_array("a8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3" value="a9"  <?php if (in_array("a9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center" class="style11">E</div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center" class="style11">E</div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a40"  <?php if (in_array("a40",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a41"   <?php if (in_array("a41",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a42"   <?php if (in_array("a42",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a43"  <?php if (in_array("a43",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a44"  <?php if (in_array("a44",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3" value="a10" <?php if (in_array("a10",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3" value="a11"  <?php if (in_array("a11",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3" value="a12" <?php if (in_array("a12",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3" value="a13" <?php if (in_array("a13",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        4 </strong></div></td>
      <td><div align="center" class="style11">F</div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center" class="style11">F</div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a45"  <?php if (in_array("a45",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a46"  <?php if (in_array("a46",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a47"  <?php if (in_array("a47",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a48"  <?php if (in_array("a48",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a49"  <?php if (in_array("a49",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3" value="a14"  <?php if (in_array("a14",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3" value="a15" <?php if (in_array("a15",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3" value="a16"  <?php if (in_array("a16",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3" value="a17"  <?php if (in_array("a17",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center" class="style11">G</div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center" class="style11">G</div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a50"  <?php if (in_array("a50",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a51"  <?php if (in_array("a51",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a52"  <?php if (in_array("a52",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a53"   <?php if (in_array("a53",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a54"   <?php if (in_array("a54",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3" value="a18"  <?php if (in_array("a18",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3" value="a19" <?php if (in_array("a19",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3" value="a20"  <?php if (in_array("a20",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3" value="a21"  <?php if (in_array("a21",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center" class="style11">H</div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center" class="style11">H</div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a55"   <?php if (in_array("a55",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a56"   <?php if (in_array("a56",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a57"  <?php if (in_array("a57",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a58"   <?php if (in_array("a58",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a59"  <?php if (in_array("a59",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a22" <?php if (in_array("a22",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a23" <?php if (in_array("a23",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a24"  <?php if (in_array("a24",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a25"  <?php if (in_array("a25",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center" class="style11">I</div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center" class="style11">I</div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a60"  <?php if (in_array("a60",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a61"   <?php if (in_array("a61",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a62"   <?php if (in_array("a62",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a63"  <?php if (in_array("a23",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a64"  <?php if (in_array("a64",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a26" <?php if (in_array("a26",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a27" <?php if (in_array("a27",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a28"  <?php if (in_array("a28",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a29"  <?php if (in_array("a29",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center" class="style11">J</div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center" class="style11">J</div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" disabled="disabled" id="a3[]" value="a65" checked="checked" <?php if (in_array("a65",$arr)){?><?php }?> />
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="a3[]" type="checkbox" disabled="disabled" id="a3[]" value="a66" checked="checked" <?php if (in_array("a66",$arr)){?><?php }?> />
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a67"   <?php if (in_array("a67",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a68"  <?php if (in_array("a68",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a69"   <?php if (in_array("a69",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a30"  <?php if (in_array("a30",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a31"  <?php if (in_array("a31",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a32" <?php if (in_array("a32",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a33" <?php if (in_array("a33",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        4 </strong></div></td>
      <td><div align="center" class="style11">K</div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center" class="style11">K</div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" disabled="disabled" id="a3[]" value="a70" checked="checked"  <?php if (in_array("a70",$arr)){?><?php }?>/>
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="a3[]" type="checkbox" disabled="disabled" id="a3[]" value="a71" checked="checked" <?php if (in_array("a71",$arr)){?><?php }?> />
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" disabled="disabled" id="a3[]" value="a72" checked="checked" <?php if (in_array("a72",$arr)){?><?php }?> />
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" disabled="disabled" id="a3[]" value="a73" checked="checked" <?php if (in_array("a73",$arr)){?><?php }?> />
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" disabled="disabled" id="a3[]" value="a74" checked="checked" <?php if (in_array("a74",$arr)){?><?php }?> />
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="checkbox" />
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a35" <?php if (in_array("a35",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a36" <?php if (in_array("a36",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="a3[]" type="checkbox" id="a3[]" value="a37" <?php if (in_array("a37",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        4 </strong></div></td>
      <td><div align="center"><strong>
        <input name="a3[]" type="checkbox" id="a3[]" value="a38" <?php if (in_array("a38",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        <span class="style9">5</span></strong></div></td>
      <td><div align="center" class="style11">
        <div align="left">L</div>
      </div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center" class="style11">L</div></td>
      <td><div align="center"><strong>
          <input name="a3[]" type="checkbox" disabled="disabled" id="a3[]" value="a75" checked="checked" <?php if (in_array("a75",$arr)){?><?php }?> />
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" disabled="disabled" id="a3[]" value="a76" checked="checked" <?php if (in_array("a76",$arr)){?><?php }?> />
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" disabled="disabled" id="a3[]" value="a77" checked="checked"  <?php if (in_array("a77",$arr)){?><?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" disabled="disabled" id="a3[]" value="a78" checked="checked"  <?php if (in_array("a78",$arr)){?><?php }?>/>
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="a3[]" type="checkbox" disabled="disabled" id="a3[]" value="a79" checked="checked"  <?php if (in_array("a79",$arr)){?><?php }?>/>
          <span class="style9">10</span></strong></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
  </table>
  <p align="center">
    <input type="submit" name="Submit" value="Reserve" />
  </p>
  <table width="100%" height="27" border="0" cellpadding="0" cellspacing="0" background="pic/CURTAIN.JPG">
    <tr>
      <td><div align="center"><span class="style7">Developed By:Ashwin,Vinayak,Vyshak,Robin </span></div></td>
    </tr>
  </table>
</div>
</form>
</body>
</html>
