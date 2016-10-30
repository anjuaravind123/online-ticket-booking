<?php
session_start();
?>
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
	height:639px;
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
.style2 {
	color: #FFFF66;
	font-style: italic;
	font-weight: bold;
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
	color: #FFFFFF;
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
.style10 {color: #FF0000; font-weight: bold; }
.style11 {color: #FF0000}
.style12 {font-weight: bold}
.style15 {	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
#em {border:#800040 solid 2px;	
}
-->
</style>
<script language="javascript">

function chk()
{

var digits = "0123456789";
// non-digit characters which are allowed in phone numbers
var phoneNumberDelimiters = "()- ";
// characters which are allowed in international phone numbers
// (a leading + is OK)
var validWorldPhoneChars = phoneNumberDelimiters + "+";
// Minimum no of digits in an international phone no.
var minDigitsInIPhoneNumber = 10;

function isInteger(s)
{   var i;
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character is number.
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}
function trim(s)
{   var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not a whitespace, append to returnString.
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character isn't whitespace.
        var c = s.charAt(i);
        if (c != " ") returnString += c;
    }
    return returnString;
}
function stripCharsInBag(s, bag)
{   var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not in bag, append to returnString.
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character isn't whitespace.
        var c = s.charAt(i);
        if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
}

function checkInternationalPhone(strPhone){
var bracket=3
strPhone=trim(strPhone)
if(strPhone.indexOf("+")>1) return false
if(strPhone.indexOf("-")!=-1)bracket=bracket+1
if(strPhone.indexOf("(")!=-1 && strPhone.indexOf("(")>bracket)return false
var brchr=strPhone.indexOf("(")
if(strPhone.indexOf("(")!=-1 && strPhone.charAt(brchr+2)!=")")return false
if(strPhone.indexOf("(")==-1 && strPhone.indexOf(")")!=-1)return false
s=stripCharsInBag(strPhone,validWorldPhoneChars);
return (isInteger(s) && s.length >= minDigitsInIPhoneNumber);
}
	//var a=document.frm1.password.value;
	/*var y = document.frm1.password.value;
	if(y.length<8)
		{
		alert("minimum 8 length");
		document.frm.pwd.select();
		}*/
	//if(a.length<9)
	//{
	//alert("Enter minimum 8 digits");
	//}
	
			
	 if (document.frm1.fname.value=="")
	{
		alert("Enter your First Name");
		document.frm1.fname.focus();
 	    return false;
	}
	else if (document.frm1.lname.value=="")
	{
		alert("Retype your Last Name");
		document.frm1.lname.focus();
 	    return false;
	}
	else if(document.frm1.email.value=="")
	{
		
		alert("Enter your Email id");
		document.frm1.email.focus();
		return false;
	}
	else if (echeck(document.frm1.email.value)==false)
    {
	document.frm1.email.focus();
	return false
	}
	else if(document.frm1.password.value=="")
	{
		
		alert("Enter your Password");
		document.frm1.password.focus();
		return false;
	}
	else if(document.frm1.re_password.value=="")
	{
		
		alert("Enter your Retype Password");
		document.frm1.re_password.focus();
		return false;
	}
	
	else if(document.frm1.re_password.value!=document.frm1.password.value)
	{
		alert("Password Does not Matching");
		document.frm1.re_password.focus();
 	    return false;
	}
	
	else if(document.frm1.city.value=="")
	{
		alert("Enter your City");
		document.frm1.city.focus();
		return false;
	}
	
	else if(document.frm1.state.value=="0")
	{
		alert("Enter your State");
		document.frm1.state.focus();
		return false;
	}
	else if(document.frm1.dist.value=="0")
	{
		alert("Enter your District");
		document.frm1.dist.focus();
		return false;
	}
	else if(document.frm1.pin.value=="")
	{
		alert("Enter your Pincode");
		document.frm1.pin.focus();
		return false;
	}
	else if(document.frm1.prof_occu.value=="0")
	{
		alert("Enter your prof_occu");
		document.frm1.prof_occu.focus();
		return false;
	}
	
	else if(document.frm1.date.value=="0")
	{
		alert("Select your date");
		document.frm1.date.focus();
		return false;
	}
	else if(document.frm1.month.value=="0")
	{
		alert("Select your month");
		document.frm1.month.focus();
		return false;
	}
	else if(document.frm1.year.value=="0")
	{
		alert("Select your year");
		document.frm1.year.focus();
		return false;
	}
	else if(document.frm1.Gender[0].checked==false && document.frm1.Gender[1].checked==false)
	{
		alert("Enter your Gender");
		document.frm1.Gender.focus();
		return false;
	}

	else if(document.frm1.mob_no.value=="")
	{
		alert("Enter your Mobile Number");
		document.frm1.mob_no.focus();
		return false;
	}
	else if (checkInternationalPhone(document.frm1.mob_no.value)==false)
{
		alert("Please Enter a Valid Phone Number");
		document.frm1.mob_no.focus()
		return false;
	}
	
	
		else
	{
		document.frm1.method = "post";
		document.frm1.action="regprocess.php";
		document.frm1.submit();
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

<script language="javascript">
function isNumberKey(evt){
	var charcode=(evt.which)? evt.which:event.keyCode
	if (charcode >31&&(charcode<46||(charcode >45 && charcode <48)|| charcode >57)){
	return false;
	}
	return true;
	}

</script>
</head>

<body>
<form name="frm1" method="post" action="">
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
  <table width="100%" border="0" cellpadding="0" cellspacing="0" background="pic/nowshowings.JPG">
    
   
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="28%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php">Login</a></td>
      <td width="22%"><div align="right" class="style10"><u>REGISTRATION</u></div></td>
      <td width="4%">&nbsp;</td>
      <td colspan="3"><?php 
		
if (isset($_SESSION['in']))
{
		if ($_SESSION['in']!=''){
	  if ($_SESSION['in']==1)
	  {
	  echo "<b><font color=green>Your Are Registered Successfully</font></b>";
	  }
	  }
	  unset($_SESSION['in']);
}

if (isset($_SESSION['nin']))
{
	  if ($_SESSION['nin']!=''){
	   if ($_SESSION['nin']==1)
	  {
	  echo "<b><font color=red>Registration Failed</font></b>";
	  }
	  }
	  unset($_SESSION['nin']);
}
	  
	  ?>&nbsp;</td>
      <td width="7%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="32"><span class="style10">First Name* </span></td>
      <td>&nbsp;</td>
      <td colspan="3">
        <label>
        <input type="text" name="fname" />
        </label>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="34"><span class="style10">Last Name* </span></td>
      <td>&nbsp;</td>
      <td colspan="3">
        <label>
        <input type="text" name="lname" />
        </label>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="31"><span class="style10">E-Mail*</span></td>
      <td>&nbsp;</td>
      <td colspan="3">
        <label>
        <input type="text" name="email" />
        </label>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="31">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3">
        <label></label>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="31"><span class="style10">Password*</span></td>
      <td>&nbsp;</td>
      <td colspan="3">
        <label></label>      <input type="password" name="password" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="33"><span class="style10">Re-type Password* </span></td>
      <td>&nbsp;</td>
      <td colspan="3">
        <label>
        <input type="password" name="re_password" />
        </label>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="33"><span class="style10">City*</span></td>
      <td>&nbsp;</td>
      <td colspan="3">
        <label>
        <input type="text" name="city" />
        </label>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="28"><span class="style10">State*</span></td>
      <td>&nbsp;</td>
      <td colspan="3">
        <label></label>
        <select name="state">
		 <option value="0">Please Select</option>
          <option value="Kerala">Kerala</option>
		  <option value="Other">Other</option>
          </select>            </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="30"><span class="style10">District*</span></td>
      <td>&nbsp;</td>
      <td colspan="3">
        <label></label>
        <select name="dist">
          <option value="0">Please Select</option>
		  <option value="Trivandrum">Trivandrum</option>
        <option value="Kollam">Kollam</option>
        <option value="Pathanamthitta">Pathanamthitta</option>
        <option value="Alapuzha">Alapuzha</option>
        <option value="Kottayam">Kottayam</option>
        <option value="Idukki">Idukki</option>
        <option value="Ernakulam">Ernakulam</option>
        <option value="Thrissur">Thrissur</option>
        <option value="Palakkad">Palakkad</option>
        <option value="Malapuram">Malapuram</option>
        <option value="Kozhikkodu">Kozhikkodu</option>
        <option value="Wayanadu">Wayanadu</option>
		<option value="Kannur">Kannur</option>
		<option value="Kasargodu">Kasargodu</option>
      </select>
        </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="27"><span class="style10">Pincode*</span></td>
      <td>&nbsp;</td>
      <td colspan="3"><input type="text" name="pin" onKeyPress="return isNumberKey(event);" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="30"><span class="style10">Profession/Occupation*</span></td>
      <td>&nbsp;</td>
      <td colspan="3"><select name="prof_occu">
	  <option value="0">Please Select</option>
	  <option>IT prof.</option>
	  <option>Govt. Employee</option>
	   <option>Teacher</option>
	  <option>Doctor</option>
	   <option>Engineer</option>
	  <option>Other</option>
      </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="31"><span class="style10">Date Of Birth * </span></td>
      <td>&nbsp;</td>
      <td width="6%"><select name="date" id="date">
	  <option value="0">DD</option>
	           <?php
          $i=01;
		  while($i<=31)
		  {
		  echo "<option value=$i>$i</option>";
		  $i++;
		  }
		  ?>
      </select></td>
      <td width="6%"><div align="center">
        <select name="month" id="month">
		 <option value="0">MM</option>
          <option value="1">Jan</option>
          <option value="2">Feb</option>
          <option value="3">Mar</option>
          <option value="4">Apr</option>
          <option value="5">May</option>
          <option value="6">Jun</option>
          <option value="7">Jul</option>
          <option value="8">Aug</option>
          <option value="9">Sep</option>
          <option value="10">Oct</option>
          <option value="11">Nov</option>
          <option value="12">Dec</option>
        </select>
      </div></td>
      <td width="27%"><select name="year" id="year">
	  <option value="0">YYYY</option>
        <?php
		$j=1960;
		while($j<=2020)
		{
		echo "<br>";
		echo "<option value=$j>$j</option>";
		$j++;
		}
		?>
      </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="28"><span class="style10">Gender*</span></td>
      <td>&nbsp;</td>
      <td colspan="3">
        <span class="style12">
        <input name="Gender" type="radio" value="Male" />
        <span class="style11">Male
        <label>
        <input name="Gender" type="radio" value="Female" />
        </label>
      Female</span></span> </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <!--<td>&nbsp;</td>
      <td height="30"><span class="style10">Land number * </span></td>
      <td>&nbsp;</td>
      <td colspan="3"><input type="text" name="l_no"  onKeyPress="return isNumberKey(event);"/></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>-->
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="29"><span class="style10">Mobile number* </span></td>
      <td><div align="right"><span class="style11">+91</span></div></td>
      <td colspan="3"><input type="text" name="mob_no" onKeyPress="return isNumberKey(event);" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <!--<tr>
      <td>&nbsp;</td>
      <td height="29" class="style10">Bank Name </td>
      <td>&nbsp;</td>">STATE BANK OF INDIA</option>
        <option value="ICICI">ICICI</option>
        <option value="IB">INDIAN BANK</option>
      </select>
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="29" class="style10">AccountNo</td>
      <td>&nbsp;</td>
      <td colspan="3"><input name="accountno" type="text" id="accountno" onKeyPress="return isNumberKey(event);" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="29" class="style10">CreditCardNo</td>
      <td>&nbsp;</td>
      <td colspan="3"><input name="creditcardno" type="text" id="creditcardno"  onKeyPress="return isNumberKey(event);"/></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="29">&nbsp;</td>
      <td><span class="style10">Alternative mobile number* </span></td>
      <td><div align="right"><span class="style11">+91</span></div></td>
      <td colspan="3"><input type="text" name="alt_mob"  onKeyPress="return isNumberKey(event);"/></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="26">&nbsp;</td>
      <td><span class="style10">Security Question * </span></td>
      <td><div align="right"></div></td>
      <td colspan="3"><select name="question" id="em">
        <option value="0">Please Select</option>
        <option value="What is your name?">What is your name?</option>
         <option value="What is your pet name?">What is your pet's name?</option>
          <option value="What is your phone number?">What is your phone number?</option>
           <option value="What is your favourite colour?">What is your favourite colour?</option>
      </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span class="style11"><strong>Answer*</strong></span></td>
      <td>&nbsp;</td>
      <td colspan="3"><input type="text" name="Answer" id="Answer" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>-->
    <tr>
      <td>&nbsp;</td>
      <td height="48" colspan="5">
        <div align="left">
          <input type="checkbox" name="checkbox" value="checkbox" />
          <span class="style10">  I ACCEPT THE TERMS AND CONDITION </span></div> <div align="center" class="style10">
          <div align="left"></div>
        </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="24">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3">
        <label></label>
        <label></label>
        <div align="left">
          <input type="button" name="Submit" value="Submit" onclick="chk();" />
        </div>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  
  <table width="100%" height="27" border="0" cellpadding="0" cellspacing="0" background="CURTAIN.JPG">
    <tr>
      <td background="pic/CURTAIN.JPG"><div align="center"><span class="style7">Developed By:Ashwin,Vinayak,Vyshak,Robin </span></div></td>
    </tr>
  </table>
</div>
</form>
</body>
</html>
