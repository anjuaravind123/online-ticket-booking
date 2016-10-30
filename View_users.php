<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript">
function accept1()
{
document.form1.method="post";
document.form1.action="accept.php";
document.form1.submit();
}
function del()
{
document.form1.method="post";
document.form1.action="delete.php";
document.form1.submit();
}
function rej()
{
document.form1.method="post";
document.form1.action="reject.php";
document.form1.submit();
}
</script>
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
.style18 {color: #FFFF00; font-weight: bold; }
.style15 {font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style22 {color: #FFFF00; font-weight: bold; font-style: italic; font-family: "Times New Roman", Times, serif; }
.style23 {color: #000000; }
-->
</style>
</head>

<body>
<form name="form1" method="post" action="">
<?php
$con=mysql_connect("localhost","root","");
   if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
    $qry="select *from registration where status='0'";
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
      <td width="6%" height="37" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style2"><a href="admin_mainpage.php">HOME</a></div></td>
      <td width="12%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="nowshowing_admin.php">NOW SHOWING </a></div></td>
      <td width="19%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><a href="terms and conditions_admin.php"><strong>TERMS &amp; CONDITIONS </strong></a></div></td>
      <td width="14%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="comingsoon_admin.php">COMING SOON </a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery_admin.php">GALLERY</a><a href="ECoupon.php"></a></div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery.php"></a><a href="contactus_admin.php">CONTACT US</a></div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="contactus.php"></a> <a href="aboutus_admin.php">ABOUT US</a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="aboutus.php"></a> <a href="feedback_admin.php" class="style15">FEEDBACK</a></div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style22"><a href="admin.php">LOGOUT</a></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td height="31" colspan="12" bgcolor="#333333"><span class="style18">ACTIVE USERS </span></td>
      </tr>
    <tr>
      <td width="4%" height="31" bgcolor="#999999"><div align="center"><span class="style18">Select</span></div></td>
      <td width="8%" bgcolor="#999999"><div align="center" class="style18">FirstName</div></td>
      <td width="9%" bgcolor="#999999"><div align="center" class="style18">LastName</div></td>
      <td width="11%" bgcolor="#999999"><div align="center" class="style18">Email</div></td>
      <td width="8%" bgcolor="#999999"><div align="center" class="style18">City</div></td>
      <td width="8%" bgcolor="#999999"><div align="center" class="style18">State</div></td>
      <td width="8%" bgcolor="#999999"><div align="center" class="style18">District</div></td>
      <td width="8%" bgcolor="#999999"><div align="center" class="style18">Pincode</div></td>
      <td width="10%" bgcolor="#999999"><div align="center"><span class="style18">Profession/ Occupation</span></div></td>
      <td width="8%" bgcolor="#999999"><div align="center" class="style18">DoB</div></td>
      <td width="8%" bgcolor="#999999"><div align="center" class="style18">Gender</div></td>
      <td width="10%" bgcolor="#999999"><div align="center"><span class="style18">Mobile</span></div></td>
      </tr>
	   <?php while($row=mysql_fetch_array($res))
	{ ?>
    <tr>
      <td height="22" bgcolor="#FFFFFF"><div align="center" class="style23">
        <input name="rid" type="radio" value="<?php echo $row['regid'];?>" />
      </div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['FirstName'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['LastName'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['Email'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['city'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['state'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['District'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['pincode'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['profession_occupation'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['DateofBirth'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['Gender'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['Mobilenumber'];?></div></td>
      </tr>
	  <?php
	}
	?>
  </table>
  <p>&nbsp;</p>
  <table width="40%" border="0" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <th scope="row"> <label>
          <div align="center">
            <input type="button" name="Submit" value="Active" onclick="accept1();" />
          </div>
        </label>
      </th>
      <td><div align="center">
          <input type="button" name="Submit2" value="Inactive" onclick="rej();" />
      </div></td>
      <td><div align="center">
          <input type="button" name="Submit3" value="Delete" onclick="del();" />
      </div></td>
    </tr>
  </table>
  <?php
$con=mysql_connect("localhost","root","");
   if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
    $qry="select *from registration where status='1'";
    $res=mysql_query($qry,$con);
	?>
  <p align="center">&nbsp;</p>
  <table width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td height="31" colspan="12" bgcolor="#333333"><span class="style18">INACTIVE USERS </span></td>
    </tr>
    <tr>
      <td width="4%" height="31" bgcolor="#999999"><div align="center"><span class="style18">Select</span></div></td>
      <td width="8%" bgcolor="#999999"><div align="center" class="style18">FirstName</div></td>
      <td width="9%" bgcolor="#999999"><div align="center" class="style18">LastName</div></td>
      <td width="11%" bgcolor="#999999"><div align="center" class="style18">Email</div></td>
      <td width="8%" bgcolor="#999999"><div align="center" class="style18">City</div></td>
      <td width="8%" bgcolor="#999999"><div align="center" class="style18">State</div></td>
      <td width="8%" bgcolor="#999999"><div align="center" class="style18">District</div></td>
      <td width="8%" bgcolor="#999999"><div align="center" class="style18">Pincode</div></td>
      <td width="10%" bgcolor="#999999"><div align="center"><span class="style18">Profession/ Occupation</span></div></td>
      <td width="8%" bgcolor="#999999"><div align="center" class="style18">DoB</div></td>
      <td width="8%" bgcolor="#999999"><div align="center" class="style18">Gender</div></td>
      <td width="10%" bgcolor="#999999"><div align="center"><span class="style18">Mobile</span></div></td>
    </tr>
    <?php while($row=mysql_fetch_array($res))
	{ ?>
    <tr>
      <td height="22" bgcolor="#FFFFFF"><div align="center" class="style23">
          <input name="rid" type="radio" value="<?php echo $row['regid'];?>" />
      </div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['FirstName'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['LastName'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['Email'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['city'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['state'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['District'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['pincode'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['profession_occupation'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['DateofBirth'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['Gender'];?></div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="style23"><?php echo $row['Mobilenumber'];?></div></td>
    </tr>
    <?php
	}
	?>
  </table>
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
