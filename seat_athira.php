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
$con=mysql_connect("localhost","root","");
if(!$con )
{
die ("could not connect".mysql_error());
}
$db=mysql_select_db('theatremanagementsystem');
//$qry="select *from tickets";
$tid="select *from theatre where theatrename='Athira'";
$resultid=mysql_query($tid);
$rowtid=mysql_fetch_row($resultid);
$tidvalue=$rowtid[0];
$qry="select *from tickets where date='$_GET[dt]' and theatreid='$tidvalue'";

$res=mysql_query($qry) or die(mysql_error());
$no=mysql_num_rows($res);
$arr[]="";
if ($no>0)
{
 while($row=mysql_fetch_array($res))
	{ 
	$seatno=$row['seats'];
	$as=explode(",",$seatno);
	foreach ($as as $val)
	{
	$arr[]=$val;
	}
	}
	}
	?>
<!--<form name="frm" method="post" action="seat_athira_add.php">-->
<form name="frm" method="post" action="options.php">
<div id="Layer1">
  <table width="100%" height="92" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td background="pic/curtains08-02-22.jpg" bgcolor="#E0DFE3"><div align="center" class="style1">
        <div align="center" class="style3 style8"><ins>SL THEATRE COMPLEX <?php //echo "<font color=white>$qry</font>";?></ins></div>
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
      <th colspan="2" scope="col"><div align="left">
        <?php $Email=$_SESSION['user'];echo "<font color=yellow><b>$Email</b></font>";?>
        &nbsp;</div></th>
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
        <?php //echo $_GET['fn'];?>
        &nbsp;</span></th>
    </tr>
  </table>
 
  <table width="100%" height="376" border="0" cellpadding="0" cellspacing="0">

    <tr>
      <td width="1%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
      <td colspan="12"><input type="hidden" name="theatre" value="<?php //echo $_GET['tn'];?>" />
        <input type="hidden" name="film_name" value="<?php echo $_GET['fn'];?>" />
        <input type="hidden" name="shows"  value="<?php echo $_GET['sh'];?>"/>
        <input type="hidden" name="date"  value="<?php echo $_GET['dt'];?>"/>
		<input type="hidden" name="time"  value="<?php echo $_GET['tm'];?>"/>&nbsp;
		<input type="hidden" name="showid"  value="<?php echo $_GET['showid'];?>"/>
		
		
		
		</td>
      <td width="1%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="6%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="34%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td colspan="7" rowspan="2"><div align="center" class="style12">ATHIRA</div><input name="theatre" type="hidden" id="theatre"  value="ATHIRA"/></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
      <td width="12%">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td><div align="center" class="style9">
        <input name="athira[]" type="checkbox"  id="athira[]" value="a1" <?php if (in_array("a1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
      1</div></td>
      <td><div align="center" class="style9">
        <input name="athira[]" type="checkbox" id="athira[]" value="a2" <?php if (in_array("a2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
      2</div></td>
      <td><div align="center"><span class="style9"></span><span class="style11 style9">A</span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td colspan="2"><div align="right" class="style11 style9">A</div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="a3" <?php if (in_array("a3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="a4" <?php if (in_array("a4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <strong>
        <input name="athira[]" type="checkbox" id="athira[]" value="a5" <?php if (in_array("a5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        </strong>5 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="a6" <?php if (in_array("a6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        6 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="a7" <?php if (in_array("a7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        7 </strong></div></td>
      <td><div align="center"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="a8" <?php if (in_array("a8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="a9" <?php if (in_array("a9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">9</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="a10" <?php if (in_array("a10",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">10</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="a11" <?php if (in_array("a11",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">11</span> </strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="a12" <?php if (in_array("a12",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">12</span></strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
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
          <input name="athira[]" type="checkbox" id="athira[]" value="b1" <?php if (in_array("b1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="b2" <?php if (in_array("b2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="b3" <?php if (in_array("b3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="b4" <?php if (in_array("b4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="b5" <?php if (in_array("b5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="b6" <?php if (in_array("b6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="b7" <?php if (in_array("b7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
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
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="c1" <?php if (in_array("c1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="c2" <?php if (in_array("c2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="c3" <?php if (in_array("c3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center"><span class="style9"></span><span class="style11">C</span></div></td>
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
          <input name="athira[]" type="checkbox" id="athira[]" value="c4" <?php if (in_array("c4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="c5" <?php if (in_array("c5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="c6" <?php if (in_array("c6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="c7" <?php if (in_array("c7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="c8" <?php if (in_array("c8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
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
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="d1" <?php if (in_array("d1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="d2" <?php if (in_array("d2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="d3" <?php if (in_array("d3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="d4" <?php if (in_array("d4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center"><span class="style9"></span><span class="style11">D</span></div></td>
      <td>&nbsp;</td>
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
          <input name="athira[]" type="checkbox" id="athira[]" value="d5" <?php if (in_array("d5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="d6" <?php if (in_array("d6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="d7" <?php if (in_array("d7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="d8" <?php if (in_array("d8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="d9" <?php if (in_array("d9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">9</span> </strong></div></td>
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
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="e1" <?php if (in_array("e1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="e2" <?php if (in_array("e2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="e3" <?php if (in_array("e3",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="e4" <?php if (in_array("e4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center"><span class="style9"></span><span class="style11">E</span></div></td>
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
          <input name="athira[]" type="checkbox" id="athira[]" value="e5" <?php if (in_array("e5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="e6" <?php if (in_array("e6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="e7" <?php if (in_array("e7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="e8" <?php if (in_array("e8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="e9" <?php if (in_array("e9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
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
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="f1" <?php if (in_array("f1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="f2" <?php if (in_array("f2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="f3" <?php if (in_array("f3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="f4" <?php if (in_array("f4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center"><span class="style9"></span><span class="style11">F</span></div></td>
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
          <input name="athira[]" type="checkbox" id="athira[]" value="f5" <?php if (in_array("f5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="f6" <?php if (in_array("f6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="f7" <?php if (in_array("f7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="f8" <?php if (in_array("f8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="f9" <?php if (in_array("f9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
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
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="g1" <?php if (in_array("g1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="g2" <?php if (in_array("g2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="g3" <?php if (in_array("g3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="g4" <?php if (in_array("g4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center"><span class="style9"></span><span class="style11">G</span></div></td>
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
          <input name="athira[]" type="checkbox" id="athira[]" value="g5" <?php if (in_array("g5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="g6" <?php if (in_array("g6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="g7" <?php if (in_array("g7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="g8" <?php if (in_array("g8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="g9" <?php if (in_array("g9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
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
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="h1" <?php if (in_array("h1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="h2" <?php if (in_array("h2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="h3" <?php if (in_array("h3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="h4" <?php if (in_array("h4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center"><span class="style11">H</span></div></td>
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
          <input name="athira[]" type="checkbox" id="athira[]" value="h5" <?php if (in_array("h5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="h6" <?php if (in_array("h6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="h7" <?php if (in_array("h7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="h8" <?php if (in_array("h8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="h9" <?php if (in_array("h9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
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
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="i1" <?php if (in_array("i1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="i2" <?php if (in_array("i2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="i3" <?php if (in_array("i3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="i4" <?php if (in_array("i4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center"><span class="style11">I</span></div></td>
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
          <input name="athira[]" type="checkbox" id="athira[]" value="i5" <?php if (in_array("i5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="i6" <?php if (in_array("i6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="i7" <?php if (in_array("i7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="i8" <?php if (in_array("i8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="i9" <?php if (in_array("i9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
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
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="j1" <?php if (in_array("j1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="j2" <?php if (in_array("j2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="j3" <?php if (in_array("j3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="j4" <?php if (in_array("j4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center">
        <div align="center" class="style11">J</div>
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
      <td><div align="center"></div></td>
      <td><div align="center" class="style11">J</div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="j5" <?php if (in_array("j5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="j6" <?php if (in_array("j6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="j7" <?php if (in_array("j7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="j8" <?php if (in_array("j8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="j9" <?php if (in_array("j9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
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
      <td><div align="center" class="style9"><strong>
<strong>
<input name="athira[]" type="checkbox" id="athira[]" value="k1" <?php if (in_array("k1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
</strong>        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="k2" <?php if (in_array("k2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="k3" <?php if (in_array("k3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="k4" <?php if (in_array("k4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center"><span class="style11">K</span></div></td>
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
          <input name="athira[]" type="checkbox" id="athira[]" value="k5" <?php if (in_array("k5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="k6" <?php if (in_array("k6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="k7" <?php if (in_array("k7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="k8" <?php if (in_array("k8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="k9" <?php if (in_array("k9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
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
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="l1" <?php if (in_array("l1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="l2" <?php if (in_array("l2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="l3" <?php if (in_array("l3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="l4" <?php if (in_array("l4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center"><strong>
        <input name="athira[]" type="checkbox" id="athira[]" value="l5" <?php if (in_array("l5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">5</span></strong></div></td>
      <td><div align="center"><span class="style11">L</span></div></td>
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
          <input name="athira[]" type="checkbox" id="athira[]" value="l6" <?php if (in_array("l6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="l7" <?php if (in_array("l7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="l8" <?php if (in_array("l8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="l9" <?php if (in_array("l9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">9</span> </strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athira[]" type="checkbox" id="athira[]" value="l10" <?php if (in_array("l10",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">10</span></strong></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
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
