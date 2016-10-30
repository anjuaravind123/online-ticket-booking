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
.style2 {	color: #FFFF66;
	font-style: italic;
	font-weight: bold;
}
.style15 {
	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style16 {color: #000000;
	font-style: italic;
	font-weight: bold;
	font-size: 24px;
}
.style17 {color: #FF0000}
.style19 {color: #FF0000; font-weight: bold; font-size: 18px; }
.style22 {color: #FFFF00; font-weight: bold; font-style: italic; font-family: "Times New Roman", Times, serif; }
#em {border:#800040 solid 2px;	
}
-->
</style>
<script language="javascript">
function val()
{
if(document.form1.Email.value=='')
{
	alert("Enter Email Id");
	document.form1.Email.focus();
}
else if(document.form1.question.value=='0')
{
	alert("Enter Security Question");
	document.form1.question.focus();
}

else if(document.form1.Answer.value=='')
{
	alert("Enter Answer");
	document.form1.Answer.focus();
}
else
{
document.form1.method="post";
document.form1.action="forgetpassword_process.php";
document.form1.submit();
}
}
</script>
</head>
<?php
$pass1=$_GET['pass1'];
$pass=$_GET['pass'];

?>

<body>
<?php session_start(); ?>
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
      <td width="7%" height="37" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style2"><a href="index.php">HOME</a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_nowshowing.php">NOW SHOWING </a></div></td>
      <td width="6%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><a href="guest_map.php">MAP</a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_comingsoon.php">COMING SOON </a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_gallery.php">GALLERY</a><a href="ECoupon.php"></a></div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery.php"></a><a href="guest_contactus.php">CONTACT US</a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="contactus.php"></a> <a href="guest_aboutus.php">ABOUT US</a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="aboutus.php"></a> <a href="guest_feedback.php" class="style15">FEEDBACK</a></div></td>
      <td width="14%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style22"><a href="index.php"></a></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="39%" border="0" align="center" cellspacing="0">
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center" class="style16">Forget password </div></td>
    </tr>
    <tr>
      <td width="49%">&nbsp;</td>
      <td width="51%">&nbsp;</td>
    </tr>
    <tr>
      <td height="33"><div align="right" class="style19">
        <div align="left">Email Id : </div>
      </div></td>
      <td><input type="text" name="Email" /></td>
    </tr>
    <tr>
      <td height="24"><span class="style19">Security Question : </span></td>
      <td><select name="question" id="em">
        <option value="0">Please Select</option>
        <option value="What is your name?">What is your name?</option>
        <option value="What is your pet name?">What is your pets name?</option>
        <option value="What is your phone number?">What is your phone number?</option>
        <option value="What is your favourite colour?">What is your favourite colour?</option>
      </select></td>
    </tr>
    <tr>
      <td height="32"><span class="style19">Answer:</span></td>
      <td><input type="text" name="Answer" id="Answer" /></td>
    </tr>

    <tr>
      <td colspan="2"><span class="style17"></span>
        <label>
        
          <div align="right">
            <input type="button" onclick="val()" value="Forget Password" />
            </div>
        </label></td>
      </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <?php if(isset($_SESSION['pass']))
	{
	echo "<font color=red><b>Your Password is:&nbsp;&nbsp;&nbsp;<b>".$_SESSION['pass'];
	unset($_SESSION['pass']);
	}
	?>
          <?php 
	if(isset($_SESSION['nouser']))
	{
	if($_SESSION['nouser']==1)
	{
	
	echo "<font color=red><b>Enter Valid Details<b></font>";
	}
	unset($_SESSION['nouser']);
	}
	?>
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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
