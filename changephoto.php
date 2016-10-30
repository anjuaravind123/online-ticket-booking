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
.style15 {
	color: #A30708;
	font-weight: bold;
	font-size: 18px;
}
.style2 {	color: #FFFF66;
	font-style: italic;
	font-weight: bold;
}
.style16 {	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style22 {color: #FFFF00; font-weight: bold; font-style: italic; font-family: "Times New Roman", Times, serif; }
-->
</style>
</head>

<body>
<form action="changephoto_update.php" method="post" enctype="multipart/form-data" name="form1">
<?php
//session_start();
$conn=mysql_connect("localhost","root","")or die("check your server connection.");
if(!$conn)
{
die("could not connect".mysql_error());
}
	//$accno=$_SESSION['acc'];
	$radioid=$_GET['editid'];
	$db=mysql_select_db("theatremanagementsystem");  
	$qry="select *from theatre_shows where showid='$radioid'";
	$result=mysql_query($qry);
	  while($row=mysql_fetch_array($result))
	  {
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
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="aboutus.php"></a> <a href="feedback_admin.php" class="style16">FEEDBACK</a></div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style22"><a href="admin.php">LOGOUT</a></div></td>
    </tr>
  </table>
  <table width="100%"  border="0" cellpadding="0" cellspacing="0">
   
   
    
    <tr>
      <td height="33">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style15"> Id </span></td>
      <td><input type="text" name="t1" value="<?php echo $row['showid'];?>"  readonly="readonly" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td height="39">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style15">Upload Photo </span></td>
      <td><input type="file" name="file2" value="<?php echo $row['Photo'];?>" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td height="46">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center">
        <input type="submit" name="Submit" value="UPDATE" />
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  
  <p>&nbsp;</p>
  <p><a href="Theatre_show.php"><strong>&gt;&gt;BACK</strong></a></p>
  <table width="100%" height="27" border="0" cellpadding="0" cellspacing="0" background="pic/CURTAIN.JPG">
    <tr>
      <td><div align="center"><span class="style7">Developed By:Ashwin,Vinayak,Vyshak,Robin </span></div></td>
    </tr>
  </table>
  <?php
  }?>
</div>
</form>
</body>
</html>
