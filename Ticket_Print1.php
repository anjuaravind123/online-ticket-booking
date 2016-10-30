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
.style36 {font-size: 18px; font-weight: bold;}
.style15 {font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style22 {color: #FFFF00; font-weight: bold; font-style: italic; font-family: "Times New Roman", Times, serif; }
.style29 {color: #FFFF00}
-->
</style>
</head>

<body>
<form name="form1" method="post" action="">
<?php
session_start();
$con=mysql_connect("localhost","root","");
   if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
    $qry="select *from comments";
    $res=mysql_query($qry,$con);
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
  <p align="left"><?php $Email=$_SESSION['user'];echo "<font color=yellow>Hai $Email</font>";?>&nbsp;</p>
   <?php
   //$day=$_POST['date'];
$con=mysql_connect("localhost","root","");
   if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
    $qry="select *from Theatre_shows ";
    $res=mysql_query($qry,$con);
	?>
  <table width="81%" height="277" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <th height="30" colspan="6" background="pic/CURTAIN.JPG" scope="col"><span class="style8">S L Complex Theatre S L Complex Theatre</span> <span class="style8">S L Complex Theatre</span> <span class="style8">S L Complex Theatre</span> <span class="style8"> S L Complex Theatre</span></th>
      </tr>
       <?php //while($row=mysql_fetch_array($res))
	//{ ?>
    <tr>
      <td width="5%" rowspan="5" background="pic/CURTAIN.JPG"><div align="center"></div>        
        <div align="center"></div></td>
      <td width="17%" height="47" bgcolor="#FFFFFF"><span class="style34">Booking Date:</span></td>
      <td bgcolor="#FFFFFF"><span class="style35"><?php echo Date('d-m-Y');?></span></td>
      <td width="22%" bgcolor="#FFFFFF"><div align="right"><span class="style35"></span><span class="style34">Show Date:</span></div></td>
      <td width="22%" bgcolor="#FFFFFF"><span class="style35"></span><?php echo $_GET['showdate'];?></td>
      <td width="5%" rowspan="5" background="pic/CURTAIN.JPG"><span class="style32"></span><span class="style32"></span><span class="style32"></span><span class="style32"></span>        <div align="center"><span class="style32"></span></div></td>
    </tr>
    <tr>
      <td height="39" bgcolor="#FFFFFF"><span class="style34">Theatre Name: </span></td>
      <td bgcolor="#FFFFFF"><?php echo $_GET['theatre'];?>&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
    <tr>
      <td height="42" bgcolor="#FFFFFF"><span class="style34">Film Name: </span></td>
      <td bgcolor="#FFFFFF"><span class="style35"><?php echo $_GET['fn'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style34">Show:</span><span class="style35"><?php echo $_GET['sn'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style34">Show Time:</span><?php echo $_GET['time'];?></td>
      </tr>
    <tr>
      <td height="42" bgcolor="#FFFFFF"><div align="center" class="style35"><span class="style36"><u>No: of Seats </u> </span></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style35"><span class="style36"><u>Seating</u></span></div>        <div align="center" class="style35"></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style35">
        <div align="center"><strong><u>Ticket Amount</u></strong></div>
      </div>        <div align="center"><span class="style35"></span></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style35"><span class="style36"><u>Total Amount</u></span></div></td>
      </tr>
    <tr>
      <td height="42" bgcolor="#FFFFFF"><div align="center"><span class="style35"></span><?php $no=explode(',',$_GET['seats']);
	  echo count($no);
	  
	  ?></div></td>
      <td bgcolor="#FFFFFF"><div align="center"><span class="style35"></span><?php echo $_GET['seats'];?></div>        <div align="center"></div></td>
      <td bgcolor="#FFFFFF"><div align="center"><span class="style35"></span><strong>50</strong></div>        <div align="center"><span class="style35"></span></div></td>
      <td bgcolor="#FFFFFF"><div align="center"><span class="style35"></span><?php echo $_GET['amount'];?></div></td>
      </tr>
      <?php //} ?>
    <tr>
      <td height="30" colspan="6" background="pic/CURTAIN.JPG"><div align="center"><span class="style31"><span class="style7">S L Complex Theatre <span class="style8">S L Complex Theatre</span> <span class="style8">S L Complex Theatre</span> <span class="style8">S L Complex Theatre</span> <span class="style8">S L Complex Theatre</span></span></span></div></td>
      </tr>
  </table>
  <p>&nbsp;</p>
  <table width="200" border="0" align="right">
    <tr>
      <td><label>
        <SCRIPT LANGUAGE="JavaScript">
if (window.print) 
{
document.write('<form> '
+ '<input type=button name=print value="Print" '
+ 'onClick="javascript:window.print()">   Click here to print this page </form>');
}
// End -->
</script>
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
