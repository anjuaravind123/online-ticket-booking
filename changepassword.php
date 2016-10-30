<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Change_Password</title>
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
.style10 {color: #FF0000; font-weight: bold; }
.style11 {color: #FF0000}
.style13 {font-size: 18px; font-weight: bold; }
.style16 {color: #D4D0C8}
.style17 {font-size: 18px; font-weight: bold; color: #D4D0C8; }
.style18 {color: #000000}
.style19 {font-size: 24px; font-weight: bold;}
.style20 {color: #000000; font-weight: bold; }
.style21 {color: #FFFF00}
.style15 {	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style22 {color: #FFFF00; font-weight: bold; font-style: italic; font-family: "Times New Roman", Times, serif; }
-->
</style>
<script language="javascript">
function val()
{
if(document.form1.Emailid.value=='')
{
	alert("Enter Email Id");
	document.form1.Emailid.focus();
}
else if (echeck(document.form1.Emailid.value)==false)
    {
	document.form1.Emailid.focus();
	return false;
	}
else if(document.form1.oldpassword.value=='')
{
	alert("Enter Old Password");
	document.form1.oldpassword.focus();
	return false;
}

else if(document.form1.newspassword.value=='')
{
	alert("Enter New password");
	document.form1.newspassword.focus();
	return false;
}
else if(document.form1.confirmpassword.value=='')
{
	alert("Enter Confirm Password");
	document.form1.confirmpassword.focus();
	return false;
}
else if (document.form1.newspassword.value!=document.form1.confirmpassword.value)
{
alert("Please reenter Password Properly");
return false;

}
else
{
document.form1.method="post";
document.form1.action="changepasswordprocess.php";
document.form1.submit();
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
<?php session_start();?>
<form name="form1" method="post" action="">



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
      <td width="8%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style21"><strong><a href="login.php">LOGOUT</a></strong></div></td>
    </tr>
  </table>
  <table width="30%" border="0" align="right" cellpadding="1" cellspacing="1">
    <tr>
      <th scope="row"><span class="style21">
        <?php $Email=$_SESSION['user'];echo "Hai $Email";?>
        &nbsp;</span></th>
    </tr>
  </table>
  <p>&nbsp;</p>
 
  <table width="100%" border="0" cellpadding="0" cellspacing="0" background="pic/nowshowings.JPG">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td width="14%">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#333333">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td colspan="2" bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#333333">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="9%" height="26">&nbsp;</td>
      <td width="17%" bgcolor="#333333">&nbsp;</td>
      <td width="25%" bgcolor="#666666"><div align="right" class="style10"></div></td>
      <td width="23%" colspan="2" bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#333333">&nbsp;</td>
      <td width="9%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
    </tr>
    <tr>
      <td height="49">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td colspan="3" bgcolor="#FFFFFF"><div align="center" class="style18"><span class="style19">Change Password </span></div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td height="34" bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#666666"><label></label>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center" class="style13 style16">
        <div align="left"><a href="mainpage.php">My Profile</a> </div>
      </div></td>
      <td height="31" bgcolor="#FFFFFF"><span class="style10 style18">EMAIL ID :</span></td>
      <td colspan="2" bgcolor="#FFFFFF"><input type="text" name="Emailid" /></td>
      <td bgcolor="#666666"><label></label>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center" class="style17">
        <div align="left"><a href="changepassword.php">Change Password </a></div>
      </div></td>
      <td height="31" bgcolor="#FFFFFF"><span class="style10 style18">OLD PASSWORD: </span></td>
      <td colspan="2" bgcolor="#FFFFFF"><input type="password" name="oldpassword" /></td>
      <td bgcolor="#666666"><label></label>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center" class="style17">
        <div align="left"><a href="Ticket_Booking1.php">Book Tickets </a></div>
      </div></td>
      <td height="31" bgcolor="#FFFFFF"><span class="style10 style18">NEW PASSWORD: </span></td>
      <td colspan="2" bgcolor="#FFFFFF"><input type="password" name="newspassword" /></td>
      <td bgcolor="#666666"><label></label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center" class="style17">
        <div align="left"><a href="Ticket_Booking_History.php">Booking History</a> </div>
      </div></td>
      <td height="33" bgcolor="#FFFFFF"><span class="style10 style18">CONFIRM PASSWORD: </span></td>
      <td bgcolor="#FFFFFF"><input type="password" name="confirmpassword" /></td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#666666"><label></label>       <?php if ($_SESSION['nin']!='')
	  { 
	  if ($_SESSION['nin']==1)
	  {
	  echo "<font color=red><b>Old Password not correct</b></font>";
	  }
	  }
	 unset($_SESSION['nin']);
	    ?>        </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center" class="style17">
        <div align="left"><a href="ECoupon.php">Purchase ECoupon</a> </div>
      </div></td>
      <td height="33" bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF"><div align="right">
        <?php 
		//echo $_SESSION['in'];

		if ($_SESSION['in']!=''){
	  if ($_SESSION['in']==1)
	  {
	  echo "<b><font color=green>Your Password Successfully Changed</font></b>";
	  }
	  }
	  unset($_SESSION['in']);



	  
	  ?><input name="Submit" type="button" value="RESET" onclick="val();" />
      </div></td>
      <td bgcolor="#666666"><label></label>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center" class="style17">
        <div align="left"> <a href="Ecoupon_view.php">View ECoupon </a></div>
      </div></td>
      <td height="28" bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#666666"><label></label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="left"><a href="Ecoupon_view_recharge.php" class="style13">Recharge ECoupon</a></div></td>
      <td height="30" colspan="3" bgcolor="#FFFFFF"><div align="center">
	  </div></td>
      <td bgcolor="#666666"><label></label>
        </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><span class="style11"></span></div></td>
      <td height="27" bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#333333">&nbsp;</td>
      <td height="30" bgcolor="#666666">&nbsp;</td>
      <td colspan="2" bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#333333">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td height="30">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <?php
 
 // }
  ?>
  <table width="100%" height="27" border="0" cellpadding="0" cellspacing="0" background="pic/CURTAIN.JPG">
    <tr>
      <td><div align="center"><span class="style7">Developed By:Ashwin,Vinayak,Vyshak,Robin </span></div></td>
    </tr>
  </table>
</div>
</form>
</body>
</html>
