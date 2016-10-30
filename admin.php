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
}
.style7 {
	color: #FFFFFF;
	font-weight: bold;
}
.style8 {color: #FFFFFF}
.style13 {color: #D11A00; font-weight: bold; font-size: 18px; }
.style14 {
	color: #D11A00;
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
-->
</style>
<script language="javascript">

function chk()
{

	if(document.frm.t1.value=="")
	{
		alert("Enter your Admin id");
		document.frm.t1.focus();
	}
	else if(document.frm.t2.value=="")
	{
		alert("Enter your Password");
		document.frm.t2.focus();
	}
	else
	{
		
		document.frm.method="post";
		document.frm.action = "adminloginprocess.php";
		document.frm.submit();
	}
}

</script>
</head>

<body>
<?php
session_start();
error_reporting(0);
?>
<form name="frm" method="post" action="adminloginprocess.php">
<div id="Layer1">
  <table width="100%" height="92" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td background="pic/curtains08-02-22.jpg" bgcolor="#E0DFE3"><div align="center" class="style1">
        <div align="center" class="style3 style8"><ins>SL THEATRE COMPLEX </ins></div>
      </div></td>
    </tr>
  </table>
  <table width="100%" height="37" border="0" cellpadding="0" cellspacing="0">
  <!--<tr>
      <td width="6%" height="37" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style2"><a href="admin.php">HOME</a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_nowshowing.php">NOW SHOWING </a></div></td>
      <td width="19%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style15"><a href="guest_map.php"></a>
        <div align="center"><a href="terms and conditions.php"><strong>TERMS &amp; CONDITIONS </strong></a></div>
      </div></td>
      <td width="12%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_comingsoon.php">COMING SOON </a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="Guest_ECoupon.php">E-COUPON</a></div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_gallery.php">GALLERY</a></div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_contactus.php">CONTACT US</a> </div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_aboutus.php">ABOUT US</a> </div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><a href="guest_feedback.php" class="style15">FEEDBACK</a></div></td>
    </tr>-->
	<tr>
      <td width="6%" height="37" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style2"><a href="admin.php"></a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_nowshowing.php"> </a></div></td>
      <td width="19%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style15"><a href="guest_map.php"></a>
        <div align="center"><a href="terms and conditions.php"><strong></strong></a></div>
      </div></td>
      <td width="12%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_comingsoon.php" </a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="Guest_ECoupon.php"></a></div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_gallery.php"></a></div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_contactus.php"></a> </div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_aboutus.php"></a> </div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><a href="guest_feedback.php" class="style15"></a></div></td>
    </tr>
  </table>
  <table width="100%" height="385" border="0" cellpadding="0" cellspacing="0" background="pic/mst3kbackg.jpg">
    <tr>
      <td width="0%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="53%"><p>&nbsp;</p>
        <p>&nbsp;</p></td>
      <td width="8%">&nbsp;</td>
      <td width="11%">&nbsp;</td>
      <td width="20%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="5" rowspan="9"><div align="center"><img src="images/slmainm.JPG" width="570" height="324" /></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>     </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="33">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style13">Admin Id: </span></td>
      <td>
        <div align="left">
          <input type="text" name="t1" />
        </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="33">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style13">Password:</span></td>
      <td><input type="password" name="t2" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
        <div align="center">
          <input type="button" name="Submit" value="Submit" onclick="chk();" />
          </div></td><td>&nbsp;</td>
    </tr>
    <tr>
      <td rowspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td rowspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">
	    <div align="center">
	      <?php if ($_SESSION['in']!='')
	  { 
	  if ($_SESSION['in']==1)
	  {
	  echo "<font color=red><b>Invalid username or password</b></font>";
	  }
	  }
	 unset($_SESSION['in']);
	    ?>	  
        &nbsp;</div></td>
      </tr>
    <tr>
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
      <td><p>&nbsp;</p>
        <p>&nbsp;</p></td>
    </tr>
  </table>
  
  <table width="100%" height="27" border="0" cellpadding="0" cellspacing="0" background="pic/CURTAIN.JPG">
    <tr>
      <td><div align="center"><span class="style7">Developed By:Ashwin,Vinayak,Vyshak,Robin </span></div></td>
    </tr>
  </table>
</div>
</form>
</body>
</html>
