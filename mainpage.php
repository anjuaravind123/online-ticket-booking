<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My_Profile</title>
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
-->
</style>
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
<!--      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="ECoupon.php">E-COUPON</a></div></td>-->
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
  <?php


	//$Accountid=$_GET['Accountid'];
	//echo $Applicationid;
$con=mysql_connect('localhost','root','');
if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
 
	$qry="select *from registration where Email='$Email'";
	$result=mysql_query($qry);
	  while($row=mysql_fetch_array($result))
	  {
	  $userid=$row['regid'];
	   }
	   echo $userid;
	   
	   $qry1="select *from registration where regid='$userid'";
	$result1=mysql_query($qry1);
	  while($row1=mysql_fetch_array($result1))
	  {
	  $userid=$row1['regid'];
	  $FirstName=$row1['FirstName']; 
	  $LastName =$row1['LastName'];
	  $Email=$row1['Email'];
	  //$password=$row1['password'];
	   $city=$row1['city'];
	    $state=$row1['state'];
		$District=$row1['District'];
		$pincode=$row1['pincode'];
		$profession_occupation=$row1['profession_occupation'];
		$DateofBirth=$row1['DateofBirth'];
		$Gender=$row1['Gender'];
		$Landnumber=$row1['Landnumber'];
		$Mobilenumber=$row1['Mobilenumber'];
		$Alternatemobilenumber=$row1['Alternatemobilenumber'];
	   }
	 ?>
  <table width="100%" border="0" cellpadding="0" cellspacing="0" background="pic/nowshowings.JPG">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="14%">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#333333">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#333333">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="9%" height="26">&nbsp;</td>
      <td width="17%" bgcolor="#333333">&nbsp;</td>
      <td width="25%" bgcolor="#666666"><div align="right" class="style10"></div></td>
      <td width="23%" bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#333333">&nbsp;</td>
      <td width="9%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
    </tr>
    <tr>
      <td height="49">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF"><div align="center" class="style18"><span class="style19">My Profile </span></div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td height="32" bgcolor="#FFFFFF"><span class="style20">First Name</span></td>
      <td bgcolor="#FFFFFF"><span class="style18"><?php echo $FirstName;?></span></td>
      <td bgcolor="#666666"><label></label>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td height="34" bgcolor="#FFFFFF"><span class="style20">Last Name</span></td>
      <td bgcolor="#FFFFFF"><span class="style18"><?php echo $LastName;?></span></td>
      <td bgcolor="#666666"><label></label>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center" class="style13 style16">
        <div align="left"><a href="mainpage.php">My Profile</a> </div>
      </div></td>
      <td height="31" bgcolor="#FFFFFF"><span class="style20">E-Mail</span></td>
      <td bgcolor="#FFFFFF"><span class="style18"><?php echo $Email;?></span></td>
      <td bgcolor="#666666"><label></label>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center" class="style17">
        <div align="left"><a href="changepassword.php">Change Password </a></div>
      </div></td>
      <td height="31" bgcolor="#FFFFFF"><span class="style20">City</span></td>
      <td bgcolor="#FFFFFF"><span class="style18"><?php echo $city;?></span></td>
      <td bgcolor="#666666"><label></label>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center" class="style17">
        <div align="left"><a href="Ticket_Booking1.php">Book Tickets </a></div>
      </div></td>
      <td height="31" bgcolor="#FFFFFF"><span class="style20">State</span></td>
      <td bgcolor="#FFFFFF"><span class="style18"><?php echo $state;?></span></td>
      <td bgcolor="#666666"><label></label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center" class="style17">
        <div align="left"><a href="Ticket_Booking_History.php">Booking History</a> </div>
      </div></td>
      <td height="33" bgcolor="#FFFFFF"><span class="style20">District</span></td>
      <td bgcolor="#FFFFFF"><span class="style18"><?php echo $District;?></span></td>
      <td bgcolor="#666666"><label></label>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center" class="style17">
        <div align="left"><a href="ECoupon.php">Purchase ECoupon</a> </div>
      </div></td>
      <td height="33" bgcolor="#FFFFFF"><span class="style20">Pincode</span></td>
      <td bgcolor="#FFFFFF"><span class="style18"><?php echo $pincode;?></span></td>
      <td bgcolor="#666666"><label></label>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center" class="style17">
        <div align="left"> <a href="Ecoupon_view.php">View ECoupon </a></div>
      </div></td>
      <td height="28" bgcolor="#FFFFFF"><span class="style20">Profession/Occupation</span></td>
      <td bgcolor="#FFFFFF"><span class="style18"><?php echo $profession_occupation;?></span></td>
      <td bgcolor="#666666"><label></label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="left"><a href="Ecoupon_view_recharge.php" class="style13">Recharge ECoupon</a></div></td>
      <td height="30" bgcolor="#FFFFFF"><span class="style20">Date Of Birth</span></td>
      <td bgcolor="#FFFFFF"><span class="style18"><?php echo $DateofBirth;?></span></td>
      <td bgcolor="#666666"><label></label>
        </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><span class="style11"></span></div></td>
      <td height="27" bgcolor="#FFFFFF"><span class="style20">Gender</span></td>
      <td bgcolor="#FFFFFF"><span class="style18"><?php echo $Gender;?></span></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><span class="style11"></span></div></td>
      <td height="30" bgcolor="#FFFFFF"><span class="style20">Land number</span></td>
      <td bgcolor="#FFFFFF"><span class="style18"><?php echo $Landnumber;?></span></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td height="31" bgcolor="#FFFFFF"><span class="style20">Mobile number</span></td>
      <td bgcolor="#FFFFFF"><span class="style18"><?php echo $Mobilenumber;?></span></td>
      <td bgcolor="#666666"><div align="center"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td height="28" bgcolor="#FFFFFF"><span class="style20">Alternative mobile number</span></td>
      <td bgcolor="#FFFFFF"><span class="style18"><?php echo $Alternatemobilenumber;?></span></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td height="30" bgcolor="#FFFFFF"><span class="style18"></span></td>
      <td bgcolor="#FFFFFF"><div align="center"></div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#333333">&nbsp;</td>
      <td height="30" bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><span class="style20"><a href="Edit_My_Profile.php">Click Here To Edit My Profile</a> </span></div></td>
      <td bgcolor="#333333">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td height="30">&nbsp;</td>
      <td>&nbsp;</td>
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
