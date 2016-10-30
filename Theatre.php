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
.style17 {color: #A30708}
.style18 {color: #FF0000}
.style19 {font-size: 18px}
.style20 {color: #FFFF00}
.style2 {	color: #FFFF66;
	font-style: italic;
	font-weight: bold;
}
.style21 {font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style22 {color: #FFFF00; font-weight: bold; font-style: italic; font-family: "Times New Roman", Times, serif; }
-->
</style>

<script language="javascript">
function add1(){

 if (document.form1.t1.value=="")
	{
		alert("Enter Theatre Name");
		document.form1.t1.focus();
 	    return false;
	}
	else if (document.form1.t2.value=="")
	{
		alert("Enter Theatre Details");
		document.form1.t2.focus();
 	    return false;
	}
	else
{
document.form1.method="post";
document.form1.action="addtheatre.php";
document.form1.submit();
}
}
function del1()
{
document.form1.method="post";
document.form1.action="deletetheatre.php";
document.form1.submit();
}
function edit1()
{
document.form1.method="post";
document.form1.action="updatetheatre.php";
document.form1.submit();
}
</script>
</head>

<body>
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
      <td width="6%" height="37" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style2"><a href="admin_mainpage.php">HOME</a></div></td>
      <td width="12%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="nowshowing_admin.php">NOW SHOWING </a></div></td>
      <td width="19%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><a href="terms and conditions_admin.php"><strong>TERMS &amp; CONDITIONS </strong></a></div></td>
      <td width="14%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="comingsoon_admin.php">COMING SOON </a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery_admin.php">GALLERY</a><a href="ECoupon.php"></a></div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery.php"></a><a href="contactus_admin.php">CONTACT US</a></div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="contactus.php"></a> <a href="aboutus_admin.php">ABOUT US</a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="aboutus.php"></a> <a href="feedback_admin.php" class="style21">FEEDBACK</a></div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style22"><a href="admin.php">LOGOUT</a></div></td>
    </tr>
  </table>
  <table width="100%" height="279" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="47">&nbsp;</td>
      <td width="47">&nbsp;</td>
      <td width="239">&nbsp;</td>
      <td width="143">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td width="81">&nbsp;</td>
      <td width="47">&nbsp;</td>
      <td width="47">&nbsp;</td>
      <td width="47">&nbsp;</td>
      <td width="47">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
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
      <td><span class="style15">Theatre Name </span></td>
      <td colspan="2">
        <input type="text" name="t1" />      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="33">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style15">Theatre Details </span></td>
      <td colspan="2">
        <textarea name="t2"></textarea>
    
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="38">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="38">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="38">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
        
          <div align="center"></div>      </td>
      <td width="94"><div align="center">
          <input type="button" name="Submit" value="ADD" onclick="add1();" />
      </div></td>
      <td width="120"><div align="center">
          <input type="button" name="Submit2" value="DELETE" onclick="del1();" />
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="21">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <?php
 //session_start();
 $con=mysql_connect("localhost","root","");
if(!$con)
{
die("could not connect".mysql_error());
}
$db=mysql_select_db("theatremanagementsystem");           
$qry="select * from theatre";
$result=mysql_query($qry);        
//$no=mysql_num_rows($result);
?>
  <table width="72%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
    <tr>
      <td width="7%" height="30"><div align="center" class="style15">Select</div></td>
      <td width="13%"><div align="center"><span class="style15">Theatre Id </span></div></td>
      <td width="23%"><div align="center" class="style19"><span class="style17">Theatre Name </span></div></td>
      <td width="33%"><div align="center" class="style15">Theatre Details </div></td>
      <td width="24%"><div align="center" class="style15">Edit</div></td>
    </tr>
	 <?php
	  while($row=mysql_fetch_array($result))
	  {
	  ?>
    <tr>
      <td height="34"><div align="center">
      
          <input name="radioid" type="radio" value="<?php echo $row['theatreid'];?>" />
      
        </div></td>
      <td><div align="center" class="style17"><?php echo $row['theatreid'];?></div></td>
      <td><div align="center" class="style18"><?php echo $row['theatrename']; ?></div></td>
      <td><div align="justify" class="style18"><?php echo $row['theatredetails'];?></div>
        <div align="left"></div></td>
      <td><div align="center" class="style20"><a href="Edittheatre.php?editid=<?php echo $row['theatreid'];?>">Click Here </a></div></td>
    </tr>
	<?php
	  }
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
