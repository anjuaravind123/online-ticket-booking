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
	background-image: url(pic/nowshowings.JPG);
}
.style7 {
	color: #FFFFFF;
	font-weight: bold;
}
.style8 {color: #FFFFFF}
.style2 {	color: #FFFF66;
	font-style: italic;
	font-weight: bold;
}
.style31 {color: #993399}
.style32 {color: #FF0000}
.style34 {color: #000000; font-weight: bold; font-size: 18px; }
.style35 {color: #000000}
.style15 {font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style22 {color: #FFFF00; font-weight: bold; font-style: italic; font-family: "Times New Roman", Times, serif; }
.style29 {color: #FFFF00}
-->
</style>
<script language="javascript">
function val()
{
var f;
f=document.frm.radiooption.value;
if (f==1)
{
document.frm.method="post";
document.frm.action="Ecoupon_pay.php";
document.frm.submit();
}
else if (f==2)
{
document.frm.method="get";
document.frm.action="Payment_ticket_creditcard.php";
document.frm.submit();
}
}

function f1(){
document.frm.radiooption.value=1;
}
function f2(){
document.frm.radiooption.value=2;
}
</script>
</head>

<body>
<form name="frm" method="post" action="Ecoupon_pay.php">
<?php
error_reporting(0);
session_start();
$con=mysql_connect("localhost","root","");
   if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
$theatre=$_POST['theatre'];
if ($theatre=='ANJALI')
{
  $seats=$_POST['anj1'];
  }
  else if ($theatre=='ATHIRA')
  {
  $seats=$_POST['athira'];
  }
  else if ($theatre=='ATHULYA')
  {
  $seats=$_POST['athulya'];
  }
  else if ($theatre=='ASWATHY')
  {
  $seats=$_POST['a3'];
  }
$time=$_POST['time'];
//$theatreid=$_POST['theatreid'];
$filmid=$_POST['film_name'];
$show=$_POST['shows'];
$date=$_POST['date'];
$showid=$_POST['showid'];
$bookingdate=$_POST['bookingdate'];
foreach($seats as $val)
{
$seats1=$val.",".$seats1;
}
$seats1=trim($seats1,',');
$amo=count($seats);
$amount=$amo*50;

	?>

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
  <p align="left"><?php $Email=$_SESSION['user'];echo "<font color=yellow><b>$Email</b></font>";?>&nbsp;</p>
  
  <table width="81%" height="277" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <th height="30" colspan="6" background="pic/CURTAIN.JPG" scope="col"><span class="style8">S L Complex Theatre S L Complex Theatre</span> <span class="style8">S L Complex Theatre</span> <span class="style8">S L Complex Theatre</span> <span class="style8"> S L Complex Theatre</span></th>
      </tr>
       
    <tr>
      <td width="5%" rowspan="3" background="pic/CURTAIN.JPG"><div align="center"></div>        
        <div align="center"></div></td>
      <td width="17%" height="39" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="29%" bgcolor="#FFFFFF"><strong>Ticket</strong></td>
      <td width="28%" bgcolor="#FFFFFF"><input name="optionsradio" type="radio" value="1"  onclick="f1();"/></td>
      <td width="16%" bgcolor="#FFFFFF"><input name="radiooption" type="hidden" id="radiooption" /></td>
      <td width="5%" rowspan="3" background="pic/CURTAIN.JPG"><span class="style32"></span><span class="style32"></span><span class="style32"></span><span class="style32"></span>        <div align="center"><span class="style32"></span></div></td>
    </tr>
    <tr>
      <td height="42" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF"><strong></strong></td>
      <td bgcolor="#FFFFFF">
        <input type="hidden" name="film_name" value="<?php echo $filmid;?>" />
        <input type="hidden" name="shows"  value="<?php echo $show;?>"/>
        <input type="hidden" name="date"  value="<?php echo $date;?>"/>
		<input type="hidden" name="time"  value="<?php echo $time;?>"/>
		<input type="hidden" name="showid"  value="<?php echo $showid;?>"/>
		<input type="hidden" name="bookingdate"  value="<?php echo $dt;?>"/>
		<input type="hidden" name="seats"  value="<?php echo $seats1;?>"/>
		<input type="hidden" name="amount"  value="<?php echo $amount;?>"/>
		<input type="hidden" name="theatre"  value="<?php echo $theatre;?>"/>
		</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
    
    <tr>
      <td height="42" bgcolor="#FFFFFF"><div align="center"><span class="style35"></span></div></td>
      <td bgcolor="#FFFFFF"><div align="center"><span class="style35"></span></div>        <div align="center"></div></td>
      <td bgcolor="#FFFFFF"><div align="center"><span class="style35"></span>
        <input type="button" name="Submit" value="Go"  onclick="val();"/>
      </div>        <div align="center"><span class="style35"></span></div></td>
      <td bgcolor="#FFFFFF"><div align="center"><span class="style35"></span></div></td>
      </tr>
    
    <tr>
      <td height="30" colspan="6" background="pic/CURTAIN.JPG"><div align="center"><span class="style31"><span class="style7">S L Complex Theatre <span class="style8">S L Complex Theatre</span> <span class="style8">S L Complex Theatre</span> <span class="style8">S L Complex Theatre</span> <span class="style8">S L Complex Theatre</span></span></span></div></td>
      </tr>
  </table>
  <p>&nbsp;</p>
  <table width="200" border="0" align="right">
    <tr>
      <td><label>
        <input type="submit" name="button" id="button" value="Print" />
      </label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="100%" height="27" border="0" cellpadding="0" cellspacing="0" background="pic/CURTAIN.JPG">
    <tr>
      <td><div align="center"><span class="style7">Developed By:Ashwin,Vinayak,Vyshak,Robin </span></div></td>
    </tr>
  </table>
</div>
</form>
</body>
</html>
