<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript">
function del()
{
document.frm.method="post";
document.frm.action="Add_gallerydel.php";
document.frm.submit();
}
function f1()
{

if(document.frm.file2.value=="")
{
alert("Please upload photo");
document.frm.file2.focus();
return false;

}
else
{
document.frm.action="Add_galleryprocess.php";
document.frm.method="post";
document.frm.submit();
}



}
</script>
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
.style14 {color: #003399;
	font-weight: bold;
}
-->
</style>

    <style type="text/css">
<!--
.style27 {color: #AF150D}
.style28 {
	color: #FFFF00;
	font-weight: bold;
}
.style29 {color: #FF0000}
.style15 {	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style22 {color: #FFFF00; font-weight: bold; font-style: italic; font-family: "Times New Roman", Times, serif; }
-->
    </style>
</head>

<body>
<form name="frm" method="post" enctype="multipart/form-data" action="Add_galleryprocess.php">

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
  <table width="100%" border="0">

    <tr>
      <td width="50%"><div align="right" class="style14 style27">Upload Photo:</div></td>
      <td width="50%"><input type="file" name="file2" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="button" name="Submit3" value="Add" onclick="f1();" />
          <input type="button" name="Submit2" value="Delete" onclick="del()" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <?php
   // include("db.php");
   $con=mysql_connect("localhost","root","");
   if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
    $qry="select * from gallery";
    $res=mysql_query($qry,$con);
	?>
  <table width="769" height="71" border="1" align="center">
    <tr bgcolor="#0033FF">
      <td width="107" height="23" background="pic/CURTAIN.JPG" bgcolor="#0033FF"><div align="center" class="style28">Select</div></td>
      <td width="339" background="pic/CURTAIN.JPG" bgcolor="#FFFFFF"><div align="center" class="style28">Photo</div></td>
      <td width="339" background="pic/CURTAIN.JPG" bgcolor="#0033FF"><div align="center" class="style28">View</div></td>
    </tr>
    <?php
	  while($row=mysql_fetch_array($res))
	  {
	  ?>
    <tr>
      <td height="40" bgcolor="#000000"><div align="center" class="style29">
          <input name="nid" type="radio" value="<?php echo $row['GID'];?>" />
      </div></td>
      <td bgcolor="#000000"><span class="style29"><?php echo $row['PHOTO'];?></span></td>
      <td bgcolor="#000000"><div align="center" class="style29"><a class="lightbox" href="<?php echo $row['PHOTO'];?>">Click Here</a></div></td>
    </tr>
    <?php }
	
	?>
  </table>
  <p>&nbsp;</p>
  <p><a href="admin_mainpage.php">&gt;&gt;BACK</a></p>
  <table width="100%" height="27" border="0" cellpadding="0" cellspacing="0" background="pic/CURTAIN.JPG">
    <tr>
      <td><div align="center"><span class="style7">Developed By:Ashwin,Vinayak,Vyshak,Robin </span></div></td>
    </tr>
  </table>
</div>
</form>
</body>
</html>
