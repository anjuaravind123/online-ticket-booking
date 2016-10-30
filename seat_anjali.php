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
.style13 {
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
$fdate=$_GET['dt'];
$tid="select *from theatre where theatrename='Aswathy'";
$resultid=mysql_query($tid);
$rowtid=mysql_fetch_row($resultid);
$tidvalue=$rowtid[0];
$qry="select *from tickets where date='$_GET[dt]' and theatreid='$tidvalue'";
//$qry="select *from tickets where theatreid=1 and date='$fdate'";
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
<!--<form name="frm" method="post" action="seat_anjali_add.php">-->
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
      <th colspan="2" scope="col"> <?php $Email=$_SESSION['user'];echo "<font color=yellow><b>$Email</b></font>";?>&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th scope="col"><span class="style8">Film:<?php echo $_GET['fn'];?>&nbsp;</span></th>
      <th scope="col"><span class="style8">Show Date:<?php echo $_GET['dt'];?>&nbsp;</span></th>
      <th scope="col"><span class="style8">Show:<?php echo $_GET['sh'];?>&nbsp;</span></th>
      <th scope="col"><span class="style8">Time:<?php echo $_GET['tm'];?>&nbsp;</span></th>
      <th scope="col"><span class="style8">Booking Date:
       <?php $dt=Date('Y-m-d');
	   echo $dt;
	   ?>
	  
	 
        &nbsp;</span></th>
    </tr>
  </table>
  
  <table width="100%" height="375" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <th width="0%" scope="col"><div align="center"></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th colspan="29" scope="col"><div align="left"><span class="style9"></span>
        <input type="hidden" name="theatre" value="<?php //echo $_GET['tn'];?>" />
        <input type="hidden" name="film_name" value="<?php echo $_GET['fn'];?>" />
        <input type="hidden" name="shows"  value="<?php echo $_GET['sh'];?>"/>
        <input type="hidden" name="date"  value="<?php echo $_GET['dt'];?>"/>
		<input type="hidden" name="time"  value="<?php echo $_GET['tm'];?>"/>
		<input type="hidden" name="showid"  value="<?php echo $_GET['showid'];?>"/>
		<input type="hidden" name="bookingdate"  value="<?php echo $dt;?>"/>
      </div>        <div align="center"><span class="style9"></span></div>      <div align="center"><span class="style9"></span></div>      <div align="center"><span class="style9"></span></div>      <div align="center"><span class="style9"></span></div>      <div align="center"><span class="style9"></span></div>      <div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="0%" scope="col"><div align="center"></div></th>
      </tr>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th colspan="23" rowspan="2" scope="col"><span class="style13">ANJALI
        <input name="theatre" type="hidden" id="theatre"  value="ANJALI"/>
      </span></th>
      <th width="7%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th colspan="23" scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th colspan="23" scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th colspan="23" scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <td height="39"><div align="center"></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1" value="a1" <?php if (in_array("a1",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="a2" <?php if (in_array("a2",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        2</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="a3" <?php if (in_array("a3",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        3</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="a4" <?php if (in_array("a4",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        4</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="a5" <?php if (in_array("a5",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        5</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="a6" <?php if (in_array("a6",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        6</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="a7" <?php if (in_array("a7",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        7</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="a8" <?php if (in_array("a8",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        8</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="a9" <?php if (in_array("a9",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        9
</strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="a10" <?php if (in_array("a10",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        <span class="style9">10</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="a11" <?php if (in_array("a11",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        <span class="style9">11</span></strong></div></td>
      <td><div align="center"><span class="style11">A</span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td colspan="23"><div align="center" class="style9"></div>        <div align="center" class="style9"></div>        <div align="center" class="style9"></div>        <div align="center" class="style9"></div></td>
      <td colspan="5" rowspan="2">&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"></div></td>
      </tr>
    <tr>
      <td height="39"><div align="center"></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="b1" <?php if (in_array("b1",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
1</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="b2" <?php if (in_array("b2",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
2</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="b3" <?php if (in_array("b3",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
3</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="b4" <?php if (in_array("b4",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
4</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="b5" <?php if (in_array("b5",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
5</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="b6" <?php if (in_array("b6",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
6</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="b7" <?php if (in_array("b7",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
7</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="b8" <?php if (in_array("b8",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
8</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="b9" <?php if (in_array("b9",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        9
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="b10" <?php if (in_array("b10",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        10
</strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="b11" <?php if (in_array("b11",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        <span class="style9">11</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="b12" <?php if (in_array("b12",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        <span class="style9">12</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input type="checkbox" name="checkbox2222419" value="b13" <?php if (in_array("b13",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        <span class="style9">13</span></strong></div></td>
      <td><div align="center" class="style9">B</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="17" rowspan="5">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"></div></td>
      </tr>
    <tr>
      <td height="39"><div align="center"></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="i1" <?php if (in_array("i1",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
1</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="i2" <?php if (in_array("i2",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
2</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="i3" <?php if (in_array("i3",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
3</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="i4" <?php if (in_array("i4",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
4</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="i5" <?php if (in_array("i5",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
5</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="i6" <?php if (in_array("i6",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
6</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="i7" <?php if (in_array("i7",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
7</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="i8" <?php if (in_array("i8",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
8</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="i9" <?php if (in_array("i9",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        9
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="i10" <?php if (in_array("i10",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        10</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="i11" <?php if (in_array("i11",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        11
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="i12" <?php if (in_array("i12",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
12</strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="i13" <?php if (in_array("i13",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        <span class="style9">13</span></strong></div></td>
      <td><div align="center" class="style11">I</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2"><div align="right" class="style11">K</div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="k1" <?php if (in_array("k1",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
1</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="k2" <?php if (in_array("k2",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        2
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="k3" <?php if (in_array("k3",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        3
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="k4" <?php if (in_array("k4",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        4
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="k5" <?php if (in_array("k5",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        5
      </strong></div></td>
      <td><div align="center"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="k6" <?php if (in_array("k6",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        <span class="style9">6 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="k7" <?php if (in_array("k7",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="k8" <?php if (in_array("k8",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="k9" <?php if (in_array("k9",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        <span class="style9">9</span> </strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="k10" <?php if (in_array("k10",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        <span class="style9">10</span></strong></div></td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"></div></td>
      </tr>
    <tr>
      <td height="39"><div align="center"></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="j1" <?php if (in_array("j1",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
1</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="j2" <?php if (in_array("j2",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
2</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="j3" <?php if (in_array("j3",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
3</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="j4" <?php if (in_array("j4",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
4</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="j5" <?php if (in_array("j5",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
5</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="j6" <?php if (in_array("j6",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
6</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="j7" <?php if (in_array("j7",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
7</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="j8" <?php if (in_array("j8",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
8</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="j9" <?php if (in_array("j9",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        9
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="j10" <?php if (in_array("j10",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        10
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="j11" <?php if (in_array("j11",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        11
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="j12" <?php if (in_array("j12",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        12
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="j13" <?php if (in_array("j13",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
13</strong></div></td>
      <td><strong>
        <input type="checkbox" name="checkbox22224194" value="j14" <?php if (in_array("j14",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        <span class="style9">14</span></strong></td>
      <td><div align="center"><strong><span class="style9">J</span></strong></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2"><div align="right" class="style11">L</div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="l1" <?php if (in_array("l1",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
1</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="l2" <?php if (in_array("l2",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        2
      </strong></div></td>
      <td><div align="center" class="style9"></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="l3" <?php if (in_array("l3",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        3
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="l4" <?php if (in_array("l4",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        4
      </strong></div></td>
      <td><div align="center"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="l5" <?php if (in_array("l5",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        <span class="style9">5 </span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="l6" <?php if (in_array("l6",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        <span class="style9">6</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="l7" <?php if (in_array("l7",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="l8" <?php if (in_array("l8",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="l9" <?php if (in_array("l9",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        <span class="style9">9</span></strong></div></td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"></div></td>
      </tr>
    <tr>
      <td><div align="center"></div></td>
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
      <td colspan="2">&nbsp;</td>
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
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td height="41"><div align="center"></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c1" <?php if (in_array("c1",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
1</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c2" <?php if (in_array("c2",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        2
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c3" <?php if (in_array("c3",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        3
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c4" <?php if (in_array("c4",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        4
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c5" <?php if (in_array("c5",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        5
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c6" <?php if (in_array("c6",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        6
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c7" <?php if (in_array("c7",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        7
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c8" <?php if (in_array("c8",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        8
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c9" <?php if (in_array("c9",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        9
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c10" <?php if (in_array("c10",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
10</strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c11" <?php if (in_array("c11",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        <span class="style9">11</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c12" <?php if (in_array("c12",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        <span class="style9">12</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c13" <?php if (in_array("c13",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        <span class="style9">13</span></strong></div></td>
      <td width="2%"><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c14" <?php if (in_array("c14",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        <span class="style9">14</span></strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c15" <?php if (in_array("c15",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
15</strong></div></td>
      <td width="2%"><div align="center" class="style11">C</div></td>
      <td width="2%"><div align="center" class="style9"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="c16" <?php if (in_array("c16",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        16</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="c17" <?php if (in_array("c17",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        17</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="c18" <?php if (in_array("c18",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        18</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="c19" <?php if (in_array("c19",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        19</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="c20" <?php if (in_array("c20",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        20 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="c21" <?php if (in_array("c21",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        21</strong></div></td>
      <td><div align="center" class="style11">C</div></td>
      <td width="2%"><div align="center" class="style9"></div></td>
      <td width="2%"><div align="center" class="style9"></div></td>
      <td width="2%"><div align="center" class="style11"></div></td>
      <td width="2%"><div align="center"><span class="style9"></span></div></td>
      <td width="2%"><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c22" <?php if (in_array("c22",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        <span class="style9">22</span></strong></div></td>
      <td width="2%"><div align="center"><span class="style9"></span><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c23" <?php if (in_array("c23",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        <span class="style9">23</span> </strong></div></td>
      <td width="2%"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c24" <?php if (in_array("c24",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        <span class="style9">24</span></strong></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c25" <?php if (in_array("c25",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
25</strong></div></td>
      <td width="1%"><span class="style9"><strong>
        C</strong></span></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center" class="style9"><strong>C</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c26" <?php if (in_array("c26",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
26 </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c27" <?php if (in_array("c27",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
27</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c28" <?php if (in_array("c28",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
28 </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c29" <?php if (in_array("c29",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
29</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c30" <?php if (in_array("c30",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
30</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c31" <?php if (in_array("c31",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
31</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="c32" <?php if (in_array("c32",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
32</strong></div></td>
      <td><div align="center" class="style9"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td height="41"><div align="center"></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="d1" <?php if (in_array("d1",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
1</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="d2" <?php if (in_array("d2",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        2
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="d3" <?php if (in_array("d3",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        3
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="d4" <?php if (in_array("d4",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        4
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="d5" <?php if (in_array("d5",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        5
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="d6" <?php if (in_array("d6",$arr)){?> checked="checked" disabled="disabled"<?php }?> /> 
        6
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="anj1[]" type="checkbox" id="anj1[]" value="d7" <?php if (in_array("d7",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        7
      </strong></div></td>
      <td><div align="center" class="style11">D</div></td>
      <td><div align="center" class="style9"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d8" <?php if (in_array("d8",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">8</span></strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d9" <?php if (in_array("d9",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        9</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d10" <?php if (in_array("d10",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        10</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d11" <?php if (in_array("d11",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        11</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d12" <?php if (in_array("d12",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        12</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d13" <?php if (in_array("d13",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        13</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d14" <?php if (in_array("d14",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        14</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d15" <?php if (in_array("d15",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        15</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d16" <?php if (in_array("d16",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        16</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d17" <?php if (in_array("d17",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        17</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d18" <?php if (in_array("d18",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        18</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d19" <?php if (in_array("d19",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        19</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d20" <?php if (in_array("d20",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        20</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d21" <?php if (in_array("d21",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        21</strong></div></td>
      <td><div align="center" class="style11"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d22" <?php if (in_array("d22",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">22</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d23" <?php if (in_array("d23",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">23</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d24" <?php if (in_array("d24",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">24</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input type="checkbox" name="checkbox333352" value="d25" <?php if (in_array("d25",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">25</span></strong></div></td>
      <td><div align="left"><span class="style11">D</span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><strong><span class="style9">D</span></strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d26" <?php if (in_array("d26",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        26 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d27" <?php if (in_array("d27",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        27</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d28" <?php if (in_array("d28",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        28 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d29" <?php if (in_array("d29",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        29</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d30" <?php if (in_array("d30",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        30</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d31" <?php if (in_array("d31",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        31</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="d32" <?php if (in_array("d32",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        32</strong></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td><div align="center"></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e1" <?php if (in_array("e1",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e2" <?php if (in_array("e2",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e3" <?php if (in_array("e3",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e4" <?php if (in_array("e4",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        4 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e5" <?php if (in_array("e5",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        5 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e6" <?php if (in_array("e6",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        6 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input type="checkbox" name="checkbox317" value="e7" <?php if (in_array("e7",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        7 </strong></div></td>
      <td><div align="center" class="style11">E</div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e8" <?php if (in_array("e8",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">8</span></strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e9" <?php if (in_array("e9",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        9</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e10" <?php if (in_array("e10",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        10</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e11" <?php if (in_array("e11",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        11</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e12" <?php if (in_array("e12",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        12</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e13" <?php if (in_array("e13",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        13</strong></div></td>
      <td colspan="6" rowspan="4">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e14" <?php if (in_array("e14",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        14</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e15" <?php if (in_array("e15",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        15</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e16" <?php if (in_array("e16",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        16</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e17" <?php if (in_array("e17",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        17</strong></div></td>
      <td><span class="style11">E</span></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><strong><span class="style9">E</span></strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e18" <?php if (in_array("e18",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          18
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e19" <?php if (in_array("e19",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          19
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e20" <?php if (in_array("e20",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          20
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e21" <?php if (in_array("e21",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        21</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e22" <?php if (in_array("e22",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          22
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e23" <?php if (in_array("e23",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          23
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="e24" <?php if (in_array("e24",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          24
      </strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"></div></td>
      </tr>
    <tr>
      <td><div align="center"></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f1" <?php if (in_array("f1",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f2" <?php if (in_array("f2",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f3" <?php if (in_array("f3",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f4" <?php if (in_array("f4",$arr)){?> checked="checked" disabled="disabled"<?php }?>  />
        4 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f5" <?php if (in_array("f5",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        5 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f6" <?php if (in_array("f6",$arr)){?> checked="checked" disabled="disabled"<?php }?>v />
        6 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f7" <?php if (in_array("f7",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        7 </strong></div></td>
      <td><div align="center" class="style11">F</div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f8" <?php if (in_array("f8",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
          <span class="style9">8</span></strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f9" <?php if (in_array("f9",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        9</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f10" <?php if (in_array("f10",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        10</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f11" <?php if (in_array("f11",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        11</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f12" <?php if (in_array("f12",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        12</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f13" <?php if (in_array("f13",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        13</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f14" <?php if (in_array("f14",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        14</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f15" <?php if (in_array("f15",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        15</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f16" <?php if (in_array("f16",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        16</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f17" <?php if (in_array("f17",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        17</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f18" <?php if (in_array("f18",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        18</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f19" <?php if (in_array("f19",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        19</strong></div></td>
      <td><span class="style11">F</span></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><strong><span class="style9">F</span></strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f20" <?php if (in_array("f20",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        20 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f21" <?php if (in_array("f21",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        21</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f22" <?php if (in_array("f22",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        22 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f23" <?php if (in_array("f23",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        23</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f24" <?php if (in_array("f24",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        24</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f25" <?php if (in_array("f25",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        25</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="f26" <?php if (in_array("f26",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          26
      </strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"></div></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g1" <?php if (in_array("g1",$arr)){?> checked="checked" disabled="disabled"<?php }?> />
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g2" <?php if (in_array("g2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g3" <?php if (in_array("g3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g4" <?php if (in_array("g4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g5" <?php if (in_array("g5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g6" <?php if (in_array("g6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        6 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g7" <?php if (in_array("g7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        7 </strong></div></td>
      <td><div align="center" class="style11">G</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g8" <?php if (in_array("g8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g9" <?php if (in_array("g9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        9</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g10" <?php if (in_array("g10",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        10</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g11" <?php if (in_array("g11",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        11</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g12" <?php if (in_array("g12",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        12</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g13" <?php if (in_array("g13",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        13</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g14" <?php if (in_array("g14",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        14</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g15" <?php if (in_array("g15",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        15</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g16" <?php if (in_array("g16",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        16</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g17" <?php if (in_array("g17",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        17</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g18" <?php if (in_array("g18",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        18</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g19" <?php if (in_array("g19",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        19</strong></div></td>
      <td><span class="style11">G</span></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><strong><span class="style9">G</span></strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g20" <?php if (in_array("g20",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        26 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g21" <?php if (in_array("g21",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        27</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g22" <?php if (in_array("g22",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        28 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g23" <?php if (in_array("g23",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        29</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g24" <?php if (in_array("g24",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        30</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="g25" <?php if (in_array("g25",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        31</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input type="checkbox" name="checkbox3403" value="g26" <?php if (in_array("g26",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        32</strong></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h1" <?php if (in_array("h1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h2" <?php if (in_array("h2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h3" <?php if (in_array("h3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h4" <?php if (in_array("h4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h5" <?php if (in_array("h5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h6" <?php if (in_array("h6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        6 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h7" <?php if (in_array("h7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        7 </strong></div></td>
      <td><div align="center" class="style11">H</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h8" <?php if (in_array("h8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">8</span></strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h9" <?php if (in_array("h9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        9</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h10" <?php if (in_array("h10",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        10</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h11" <?php if (in_array("h11",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        11</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h12" <?php if (in_array("h12",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        12</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h13" <?php if (in_array("h13",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        13</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input type="checkbox" name="checkbox3232" value="h14" <?php if (in_array("h14",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        14</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h15" <?php if (in_array("h15",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        15</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h16" <?php if (in_array("h16",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        16</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h17" <?php if (in_array("h17",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        17</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h18" <?php if (in_array("h18",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        18</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h19" <?php if (in_array("h19",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        19</strong></div></td>
      <td><span class="style11">H</span></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><strong><span class="style9">H</span></strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h20" <?php if (in_array("h20",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        26 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h21" <?php if (in_array("h21",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        27</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h22" <?php if (in_array("h22",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        28 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h23" <?php if (in_array("h23",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        29</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h24" <?php if (in_array("h24",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        30</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h25" <?php if (in_array("h25",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        31</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="anj1[]" type="checkbox" id="anj1[]" value="h26" <?php if (in_array("h26",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        32</strong></div></td>
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
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
