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
.style15 {
	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
#Layer2 {
	position:absolute;
	width:108px;
	height:42px;
	z-index:2;
	left: 34px;
	top: 514px;
}
.style16 {color: #FFFF00}
-->
</style>
<script language="javascript">

function chk()
{

	if(document.frm.t1.value=="")
	{
		alert("Enter your Email id");
		document.frm.t1.focus();
	}
	else if (echeck(document.frm.t1.value)==false)
    {
	document.frm.t1.focus();
	return false
	}
	else if(document.frm.t2.value=="")
	{
		alert("Enter your Password");
		document.frm.t2.focus();
	}
	else
	{
		
		document.frm.method="post";
		document.frm.action = "loginprocess.php";
		document.frm.submit();
	}
	function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}


}

</script>
</head>

<body>
<?php
error_reporting(0);
session_start();
?>
<form name="frm" method="post" action="loginprocess.php">
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
      <td width="6%" height="37" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style2"><a href="index.php">HOME</a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_nowshowing.php">NOW SHOWING </a></div></td>
      <td width="20%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style15"><a href="Guest_terms and conditions.php">TERMS &amp; CONDITIONS </a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_comingsoon.php">COMING SOON </a></div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="Guest_ECoupon.php">E-COUPON</a></div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_gallery.php">GALLERY</a></div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_contactus.php">CONTACT US</a> </div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_aboutus.php">ABOUT US</a> </div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><a href="guest_feedback.php" class="style15">FEEDBACK</a></div></td>
    </tr>
  </table>
  <table width="100%" height="448" border="0" cellpadding="0" cellspacing="0" background="pic/mst3kbackg.jpg">
    <tr>
      <td width="4%">&nbsp;</td>
      <td width="8%">&nbsp;</td>
      <td width="4%">&nbsp;</td>
      <td width="7%">&nbsp;</td>
      <td width="5%">&nbsp;</td>
      <td width="34%">&nbsp;</td>
      <td width="5%">&nbsp;</td>
      <td width="13%">&nbsp;</td>
      <td width="17%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="5" rowspan="8"><div align="center">
        <div class="style16" id="Layer2"><a href="admin.php">Admin</a></div>
        <img src="pic/images1.jpeg" width="424" height="264" /></div></td>
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
      <td colspan="2"><div align="center" class="style14">Already Registered Member Login here  </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style13">Email Id: </span></td>
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
        <div align="right">
          <input type="button" name="Submit" value="Submit" onclick="chk();" />
        </div>  </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td rowspan="2">&nbsp;</td>
      <td rowspan="2">&nbsp;</td>
      <td><div align="center"><span class="style14"><a href="forgetpassword.php">Forget Password</a></span> <a href="forgetpassword.php"></a></div></td>
      <td><div align="center"><span class="style14"><a href="REGISTRATION.php">New User Registration</a> </span></div></td>
      <td rowspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"> <div align="center">
        <?php if ($_SESSION['in']!='')
	  { 
	  if ($_SESSION['in']==1)
	  {
	  echo "<font color=red><b>Invalid Emailid or password</b></font>";
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
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
