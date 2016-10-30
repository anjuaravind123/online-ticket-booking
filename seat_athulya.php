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
	top: 0;
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
.style14 {color: #FFFF00}
.style15 {font-weight: bold}
.style16 {color: #FFFF00; font-weight: bold; }
.style17 {	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style22 {color: #FFFF00; font-weight: bold; font-style: italic; font-family: "Times New Roman", Times, serif; }
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
$tid="select *from theatre where theatrename='Athulya'";
$resultid=mysql_query($tid);
$rowtid=mysql_fetch_row($resultid);
$tidvalue=$rowtid[0];
$qry="select *from tickets where date='$_GET[dt]' and theatreid='$tidvalue'";

//$qry="select *from tickets";
$res=mysql_query($qry) or die(mysql_error());
$no=mysql_num_rows($res);
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
<!--<form name="frm" method="post" action="seat_athulya_add.php">-->
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
      <td width="14%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style17"><a href="terms and conditions.php">TERMS &amp; CONDITIONS </a></div></td>
      <td width="12%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="comingsoon.php">COMING SOON </a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="ECoupon.php">E-COUPON</a></div></td>
      <td width="8%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery.php">GALLERY</a></div></td>
      <td width="12%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="contactus.php">CONTACT US</a> </div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><a href="aboutus.php"><strong>ABOUT US</strong></a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6">
          <div align="center"><a href="guest_aboutus.php"></a> <a href="feedback.php" class="style17">FEEDBACK</a></div>
      </div></td>
      <td width="8%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style14"><strong><a href="login.php">LOGOUT</a></strong></div></td>
    </tr>
  </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <th scope="col">
        <?php $Email=$_SESSION['user'];echo "<font color=yellow><b>$Email</b></font>";?>&nbsp;</th>
      <th scope="col">&nbsp;</th>
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

  <table width="100%" height="375" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <th width="0%" scope="col"><div align="center"></div></th>
      <th scope="col"><div align="left" class="style14 style15">
      
      </div>
        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div>        <div align="center" class="style14"></div></th>
      <th colspan="4" scope="col"></th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th colspan="21" scope="col"><div align="left"> <input type="hidden" name="theatre" value="<?php //echo $_GET['tn'];?>" />
        <input type="hidden" name="film_name" value="<?php echo $_GET['fn'];?>" />
        <input type="hidden" name="shows"  value="<?php echo $_GET['sh'];?>"/>
        <input type="hidden" name="date"  value="<?php echo $_GET['dt'];?>"/>
		<input type="hidden" name="showid"  value="<?php echo $_GET['showid'];?>"/>
		<input type="hidden" name="time"  value="<?php echo $_GET['tm'];?>"/></div></th>
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
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="2%" scope="col"><div align="center"><span class="style9"></span></div></th>
      <th width="0%" scope="col"><div align="center"></div></th>
      </tr>
    <tr>
      <th scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="6%" scope="col">&nbsp;</th>
      <th width="6%" scope="col">&nbsp;</th>
      <th colspan="21" rowspan="2" scope="col"><span class="style13">ATHULYA</span>
	  <input name="theatre" type="hidden" id="theatre"  value="ATHULYA"/>
	  
	  </th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="2%" scope="col">&nbsp;</th>
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
      <th colspan="21" scope="col">&nbsp;</th>
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
      <th scope="col">&nbsp;</th>
      <th colspan="21" scope="col">&nbsp;</th>
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
      <th scope="col">&nbsp;</th>
      <th colspan="21" scope="col">&nbsp;</th>
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
      <td height="39"><div align="center"></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox"  id="athulya[]" value="a1" <?php if (in_array("a1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="a2" <?php if (in_array("a2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="a3" <?php if (in_array("a3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="a4" <?php if (in_array("a4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="a5" <?php if (in_array("a5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="a6" <?php if (in_array("a6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        6</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="a7" <?php if (in_array("a7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        7</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="a8" <?php if (in_array("a8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        8</strong></div></td>
      <td><div align="center" class="style9"><strong>A</strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td colspan="21" rowspan="4" bgcolor="#FF0000"><div align="center" class="style9"></div>        <div align="center" class="style9"></div>        <div align="center" class="style9"></div>        <div align="center" class="style9"></div></td>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="a9" <?php if (in_array("a9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        9
</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="a10" <?php if (in_array("a10",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        10
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="a11" <?php if (in_array("a11",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        11
      </strong></div></td>
      <td><div align="center" class="style9"><strong>A</strong></div></td>
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
      <td height="39"><div align="center"></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="b1" <?php if (in_array("b1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
1</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="b2" <?php if (in_array("b2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
2</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="b3" <?php if (in_array("b3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
3</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="b4" <?php if (in_array("b4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
4</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="b5" <?php if (in_array("b5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
5</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="b6" <?php if (in_array("b6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
6</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="b7" <?php if (in_array("b7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
7</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="b8" <?php if (in_array("b8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
8</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="b9" <?php if (in_array("b9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        9
      </strong></div></td>
      <td><div align="center" class="style9"><strong>B</strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="a10" <?php if (in_array("b10",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
10</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="a11" <?php if (in_array("b11",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        11
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="b12" <?php if (in_array("b12",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        12
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="b13" <?php if (in_array("b13",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        13
      </strong></div></td>
      <td><div align="center"><span class="style11">B</span></div></td>
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
      <td height="39"><div align="center"></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="c1" <?php if (in_array("c1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
1</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="c2" <?php if (in_array("c2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
2</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="c3" <?php if (in_array("c3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
3</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="c4" <?php if (in_array("c4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
4</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="c5" <?php if (in_array("c5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
5</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="c6" <?php if (in_array("c6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
6</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="c7" <?php if (in_array("c7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
7</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="c8" <?php if (in_array("c8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
8</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="c9" <?php if (in_array("c9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        9
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="c10" <?php if (in_array("c10",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        10</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="c11" <?php if (in_array("c11",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        11
      </strong></div></td>
      <td><div align="center" class="style9"><strong>C</strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="c12" <?php if (in_array("c12",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
1</strong>2</div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="c13" <?php if (in_array("c13",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        13
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="c14" <?php if (in_array("c14",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        14
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="c15" <?php if (in_array("c15",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        15
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="c16" <?php if (in_array("c16",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        16
      </strong></div></td>
      <td><div align="center"><span class="style11">C</span></div></td>
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
      <td height="39"><div align="center"></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d1" <?php if (in_array("d1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
1</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d2" <?php if (in_array("d2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
2</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d3" <?php if (in_array("d3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
3</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d4" <?php if (in_array("d4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
4</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d5" <?php if (in_array("d5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
5</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d6" <?php if (in_array("d6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
6</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d7" <?php if (in_array("d7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
7</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d8" <?php if (in_array("d8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
8</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d9" <?php if (in_array("d9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        9
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d10" <?php if (in_array("d10",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        10
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d11" <?php if (in_array("d11",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        11
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d12" <?php if (in_array("d12",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        12
      </strong></div></td>
      <td><div align="center" class="style9"><strong>D</strong></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d13" <?php if (in_array("d13",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        13
</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d14" <?php if (in_array("d14",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        14
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d15" <?php if (in_array("d15",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        15
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d16" <?php if (in_array("d16",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        16
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="d17" <?php if (in_array("d17",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        17
      </strong></div></td>
      <td><div align="center"><span class="style11">D</span></div></td>
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
      <td>&nbsp;</td>
      <td colspan="21"><div align="center"><span class="style9"></span></div></td>
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
      <td colspan="21">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td colspan="21">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td colspan="21">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e1" <?php if (in_array("e1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
1</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e2" <?php if (in_array("e2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        2
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e3" <?php if (in_array("e3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        3
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e4" <?php if (in_array("e4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        4
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e5" <?php if (in_array("e5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        5
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e6" <?php if (in_array("e6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        6
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e7" <?php if (in_array("e7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        7
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e8" <?php if (in_array("e8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        8
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e9" <?php if (in_array("e9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        9
      </strong></div></td>
      <td><div align="center" class="style9"><strong>E</strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td width="2%"><div align="center"><span class="style9"></span></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e10" <?php if (in_array("e10",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
10</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e11" <?php if (in_array("e11",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
11</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e12" <?php if (in_array("e12",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
12</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e13" <?php if (in_array("e13",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
13</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e14" <?php if (in_array("e14",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
14</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e15" <?php if (in_array("e15",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
15</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e16" <?php if (in_array("e16",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
16</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e17" <?php if (in_array("e17",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
17</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e18" <?php if (in_array("e18",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
18</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e19" <?php if (in_array("e19",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
19</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e20" <?php if (in_array("e20",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        20
      </strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e21" <?php if (in_array("e21",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
21</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e22" <?php if (in_array("e22",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        22
      </strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e23" <?php if (in_array("e23",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        23
      </strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e24" <?php if (in_array("e24",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        24
      </strong></div></td>
      <td width="2%"><div align="center" class="style11">E</div></td>
      <td width="2%"><div align="center"><span class="style9"></span></div></td>
      <td width="2%"><div align="center"><span class="style9"></span></div></td>
      <td width="2%"><div align="center"><span class="style9"></span></div></td>
      <td width="2%"><div align="center" class="style9"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center" class="style9"><strong>E</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e25" <?php if (in_array("e25",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        25
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e26" <?php if (in_array("e26",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        26
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e27" <?php if (in_array("e27",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        27
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e28" <?php if (in_array("e28",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        28
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e29" <?php if (in_array("e29",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        29
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e30" <?php if (in_array("e30",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
30</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e31" <?php if (in_array("e31",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        31
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e32" <?php if (in_array("e32",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        32
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e33" <?php if (in_array("e33",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        33
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="e34" <?php if (in_array("e34",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        34</strong></div></td>
      <td><div align="center"></div></td>
      </tr>
    <tr>
      <td height="41"><div align="center"></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f1" <?php if (in_array("f1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
1</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f2" <?php if (in_array("f2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        2
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f3" <?php if (in_array("f3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        3
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f4" <?php if (in_array("f4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        4
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f5" <?php if (in_array("f5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        5
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f6" <?php if (in_array("f6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        6
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f7" <?php if (in_array("f7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        7
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f8" <?php if (in_array("f8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        8
      </strong></div></td>
      <td><div align="center" class="style9"><strong>F</strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f9" <?php if (in_array("f9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
9</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f10" <?php if (in_array("f10",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
10</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f11" <?php if (in_array("f11",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
11</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f12" <?php if (in_array("f12",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
12</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f13" <?php if (in_array("f13",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
13</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f14" <?php if (in_array("f14",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
14</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f15" <?php if (in_array("f15",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
15</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f16" <?php if (in_array("f16",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
16</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f17" <?php if (in_array("f17",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
17</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f18" <?php if (in_array("f18",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
18</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f19" <?php if (in_array("f19",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
19</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f20" <?php if (in_array("f20",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
20</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f21" <?php if (in_array("f21",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
21</strong></div></td>
      <td><div align="center" class="style11">F</div></td>
      <td><span class="style9"></span></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center" class="style9"><strong>F</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f22" <?php if (in_array("f22",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        22</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f23" <?php if (in_array("f23",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        23
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f24" <?php if (in_array("f24",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        24
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f25" <?php if (in_array("f25",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        25
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f26" <?php if (in_array("f26",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        26
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f27" <?php if (in_array("f27",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        27
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f28" <?php if (in_array("f28",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        28
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f29" <?php if (in_array("f29",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        29
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="f30" <?php if (in_array("f30",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        30</strong></div></td>
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
      <td>&nbsp;</td>
      <td colspan="21"><div align="center"><span class="style9"></span></div></td>
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
      <td>&nbsp;</td>
      <td colspan="21"><div align="center"><span class="style9"></span></div></td>
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
      <td colspan="21">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td colspan="21">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td colspan="21">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td colspan="21">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g1" <?php if (in_array("g1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g2" <?php if (in_array("g2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g3" <?php if (in_array("g3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g4" <?php if (in_array("g4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g5" <?php if (in_array("g5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g6" <?php if (in_array("g6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        6 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g7" <?php if (in_array("g7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        7 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g8" <?php if (in_array("g8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        8 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g9" <?php if (in_array("g9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        9 </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="g10" <?php if (in_array("g10",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        10
</strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="g11" <?php if (in_array("g11",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">11</span>
      </strong></div></td>
      <td><div align="center"><span class="style11">G</span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td width="2%"><div align="center"><span class="style9"></span></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g12" <?php if (in_array("g12",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        12</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g13" <?php if (in_array("g13",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        13</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g14" <?php if (in_array("g14",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        14</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g15" <?php if (in_array("g15",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        15</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g16" <?php if (in_array("g16",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        16</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g17" <?php if (in_array("g17",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        17</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g18" <?php if (in_array("g18",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        18</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g19" <?php if (in_array("g19",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        19</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g20" <?php if (in_array("g20",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          20
      </strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g21" <?php if (in_array("g21",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        21</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g22" <?php if (in_array("g22",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        22 </strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g23" <?php if (in_array("g23",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        23</strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g24" <?php if (in_array("g24",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        24 </strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g25" <?php if (in_array("g25",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        25 </strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g26" <?php if (in_array("g26",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        26 </strong></div></td>
      <td width="2%"><div align="center"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="g27" <?php if (in_array("g27",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9"> 27</span></strong></div></td>
      <td width="2%"><div align="center"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="g28" <?php if (in_array("g28",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">28</span></strong></div></td>
      <td width="2%"><div align="center" class="style9"><strong>G</strong></div></td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span></div></td>
      <td><div align="center" class="style9"><strong>G</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="g29" <?php if (in_array("g29",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        29
</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g30" <?php if (in_array("g30",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        30 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g31" <?php if (in_array("g31",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        31 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g32" <?php if (in_array("g32",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        32 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g33" <?php if (in_array("g33",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        33 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g34" <?php if (in_array("g34",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        34 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g35" <?php if (in_array("g35",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        35</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g36" <?php if (in_array("g36",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        36 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g37" <?php if (in_array("g37",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        37 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g38" <?php if (in_array("g38",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        38 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="g39" <?php if (in_array("g39",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        39</strong></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h1" <?php if (in_array("h1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        1</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h2" <?php if (in_array("h2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        2 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h3" <?php if (in_array("h3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        3 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h4" <?php if (in_array("h4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        4 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h5" <?php if (in_array("h5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        5 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h6" <?php if (in_array("h6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        6 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h7" <?php if (in_array("h7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        7 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h8" <?php if (in_array("h8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        8 </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="h9" <?php if (in_array("h9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
9 </strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="h10" <?php if (in_array("h10",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">10</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="h11" <?php if (in_array("h11",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">11</span></strong></div></td>
      <td><div align="center" class="style9"><strong>H</strong></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="h12" <?php if (in_array("h12",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        12
</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="h13" <?php if (in_array("h13",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        13
</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h14" <?php if (in_array("h14",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        14</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h15" <?php if (in_array("h15",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        15</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h16" <?php if (in_array("h16",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        16</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h17" <?php if (in_array("h17",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        17</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h18" <?php if (in_array("h18",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        18</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h19" <?php if (in_array("h19",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        19</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h20" <?php if (in_array("h20",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        20</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h21" <?php if (in_array("h21",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        21</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h22" <?php if (in_array("h22",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        22</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h23" <?php if (in_array("h23",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        23</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h24" <?php if (in_array("h24",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        24</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h25" <?php if (in_array("h25",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        25</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h26" <?php if (in_array("h26",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        26</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="h27" <?php if (in_array("h27",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
27</strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="h28" <?php if (in_array("h28",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">28</span></strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="h29" <?php if (in_array("h29",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
29</strong></div></td>
      <td><div align="center" class="style9"><strong>H</strong></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span></div></td>
      <td><div align="center"><span class="style9">H</span></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="h30" <?php if (in_array("h30",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">30</span>
      </strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="h31" <?php if (in_array("h31",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
31</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h32" <?php if (in_array("h32",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        32</strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h33" <?php if (in_array("h33",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        33 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h34" <?php if (in_array("h34",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        34 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h35" <?php if (in_array("h35",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        35 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h36" <?php if (in_array("h36",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        36 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h37" <?php if (in_array("h37",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        37 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h38" <?php if (in_array("h38",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        38 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h39" <?php if (in_array("h39",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        39 </strong></div></td>
      <td><div align="center" class="style9"><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="h40" <?php if (in_array("h40",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        40</strong></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i1" <?php if (in_array("i1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">1</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i2" <?php if (in_array("i2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">2</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]8" type="checkbox" id="athulya[]8" value="i3" <?php if (in_array("i3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">3</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i4" <?php if (in_array("i4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">4</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i5" <?php if (in_array("i5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">5</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i6" <?php if (in_array("i6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">6</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i7" <?php if (in_array("i7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">7</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i8" <?php if (in_array("i8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">8</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i9" <?php if (in_array("i9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">9</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i10" <?php if (in_array("i10",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">10</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i11" <?php if (in_array("i11",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">11</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i12" <?php if (in_array("i12",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">12</span></strong></div></td>
      <td><div align="center"><span class="style11">I</span></div></td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i13" <?php if (in_array("i13",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">13</span></strong></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i14" <?php if (in_array("i14",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">14</span></strong></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i15" <?php if (in_array("i15",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">15</span></strong></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i16" <?php if (in_array("i16",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">16</span></strong></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i17" <?php if (in_array("i17",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">17</span></strong></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i18" <?php if (in_array("i18",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">18</span></strong></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i19" <?php if (in_array("i19",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">19</span></strong></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i20" <?php if (in_array("i20",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">20</span></strong></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i21" <?php if (in_array("i21",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">21</span></strong></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i22" <?php if (in_array("i22",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">22</span></strong></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i23" <?php if (in_array("i23",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">23</span></strong></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i24" <?php if (in_array("i24",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">24</span></strong></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i25" <?php if (in_array("i25",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">25</span></strong></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i26" <?php if (in_array("i26",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">26</span></strong></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i27" <?php if (in_array("i27",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">27</span></strong></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i28" <?php if (in_array("i28",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">28</span></strong></td>
      <td><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i29" <?php if (in_array("i29",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">29</span></strong></td>
      <td><div align="center" class="style9"><strong>I</strong></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><strong><span class="style9">I</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i30" <?php if (in_array("i30",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">30</span> </strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i31" <?php if (in_array("i31",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">31</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i32" <?php if (in_array("i32",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">32</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i33" <?php if (in_array("i33",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">33</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i34" <?php if (in_array("i34",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">34</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i35" <?php if (in_array("i35",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">35</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i36" <?php if (in_array("i36",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">36</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i37" <?php if (in_array("i37",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">37</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i38" <?php if (in_array("i38",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">38</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i39" <?php if (in_array("i39",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">39</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="i40" <?php if (in_array("i40",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">40</span></strong></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j1" <?php if (in_array("j1",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        1
</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j2" <?php if (in_array("j2",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        2
</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j3" <?php if (in_array("j3",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        3
</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j4" <?php if (in_array("j4",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
4</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j5" <?php if (in_array("j5",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        5
</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j6" <?php if (in_array("j6",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        6
</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j7" <?php if (in_array("j7",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        7
</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j8" <?php if (in_array("j8",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        8
</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j9" <?php if (in_array("j9",$arr)){?> checked="checked" disabled="disabled"<?php }?>/> 
        9
</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j10" <?php if (in_array("j10",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
10</strong></div></td>
      <td><div align="center" class="style9"><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j11" <?php if (in_array("j11",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
11</strong></div></td>
      <td><div align="center" class="style9"><strong>J</strong></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j12" <?php if (in_array("j12",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">12</span></strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j13" <?php if (in_array("j13",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">13</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j14" <?php if (in_array("j14",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">14</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j15" <?php if (in_array("j15",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">15</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j16" <?php if (in_array("j16",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">16</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j17" <?php if (in_array("j17",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">17</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j18" <?php if (in_array("j18",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">18</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j19" <?php if (in_array("j19",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">19</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="cathulya[]" type="checkbox" id="cathulya[]" value="j20" <?php if (in_array("j20",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">20</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j21" <?php if (in_array("j21",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">21</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j22" <?php if (in_array("j22",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">22</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j23" <?php if (in_array("j23",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">23</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j24" <?php if (in_array("j24",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">24</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j25" <?php if (in_array("j25",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">25</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j26" <?php if (in_array("j26",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">26</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j27" <?php if (in_array("j27",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">27</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j28" <?php if (in_array("j28",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">28</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
        <input name="athulya[]" type="checkbox" id="athulya[]" value="j29" <?php if (in_array("j29",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
        <span class="style9">29</span></strong></div></td>
      <td><div align="center"><span class="style9">J</span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td>&nbsp;</td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9"></span></div></td>
      <td><div align="center"><span class="style9">J</span></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="j30" <?php if (in_array("j30",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">30</span> </strong></div></td>
      <td><div align="center"><span class="style9"></span><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="j31" <?php if (in_array("j31",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">31</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="j32" <?php if (in_array("j32",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">32</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="j33" <?php if (in_array("j33",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">33</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="j34" <?php if (in_array("j34",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">34</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="j35" <?php if (in_array("j35",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">35</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="j36" <?php if (in_array("j36",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">36</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="j37" <?php if (in_array("j37",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">37</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="j38" <?php if (in_array("j38",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">38</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="j39" <?php if (in_array("j39",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">39</span></strong></div></td>
      <td><div align="center"><span class="style9"><span class="style9"></span></span><strong>
          <input name="athulya[]" type="checkbox" id="athulya[]" value="j40" <?php if (in_array("j40",$arr)){?> checked="checked" disabled="disabled"<?php }?>/>
          <span class="style9">40</span></strong></div></td>
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
