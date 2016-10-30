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
	top: 0;
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
	background-color: #000000;
}
.style7 {
	color: #FFFFFF;
	font-weight: bold;
}
.style8 {color: #FFFFFF}
body,td,th {
	color: #FFFFFF;
	font-weight: bold;
}
.style15 {font-size: 18px}
.style16 {	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style23 {color: #8F0B16; font-weight: bold; }
.style25 {color: #FF0000}
.style26 {color: #FF0000; font-weight: bold; }
.style22 {color: #FFFF00; font-weight: bold; font-style: italic; font-family: "Times New Roman", Times, serif; }
-->
</style>
<script language="javascript">


function f2()
{
if(document.f1.name.value=="")
{
alert("Please enter Name");
document.f1.name.focus();
return false;
}

else if(document.f1.eid.value=="")
{
alert("Please enter Email-Id");
document.f1.eid.focus();
return false;

}
else if (echeck(document.f1.eid.value)==false)
{
				document.f1.eid.focus();
		return false
	}
else if(document.f1.query.value=="")
{
alert("Please enter Comments");
document.f1.query.focus();
return false;
}
else
{
document.f1.action="commentprocess.php";
document.f1.method="post";
document.f1.submit();

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
<form name="f1" method="post" action="">
<?php
$id=$_GET['showid'];

$con=mysql_connect("localhost","root","");
   if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
    $qry="select *from Theatre_shows where showid='$id'";
    $res=mysql_query($qry,$con);
	 while($row=mysql_fetch_array($res))
	{ 
	$showid=$row['showid'];
	$Theatre_name=$row['Theatre_name'];
	$Film_name=$row['Film_name'];
	}
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
      <td width="6%" height="37" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style2"><a href="mainpage.php">HOME</a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="nowshowing.php">NOW SHOWING </a></div></td>
      <td width="20%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><a href="terms and conditions.php"><strong>TERMS &amp; CONDITIONS </strong></a></div></td>
      <td width="12%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="comingsoon.php">COMING SOON </a></div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery.php">GALLERY</a><a href="ECoupon.php"></a></div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery.php"></a><a href="contactus.php">CONTACT US</a></div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="contactus.php"></a> <a href="aboutus.php">ABOUT US</a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="aboutus.php"></a> <a href="feedback.php" class="style16">FEEDBACK</a></div></td>
      <td width="8%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style22"><a href="index.php">LOGOUT</a></div></td>
    </tr>
  </table>
  <table width="100%" height="403" border="0" align="center" cellspacing="1">
    <tr>
      <td height="44" colspan="4"><div align="center"></div></td>
    </tr>
    <tr>
      <td height="23" colspan="4">&nbsp;</td>
    </tr>
	
    <tr>
      <td height="23">&nbsp;</td>
      <td><input name="showid" type="hidden" id="showid" value="<?php echo $_GET['showid'];?>" /></td>
      <td colspan="2"><?php echo $_GET['theatrename'];?>
        <?php echo $_GET['filmname'];?></td>
    </tr>
	
    <tr>
      <td height="32">&nbsp;</td>
      <td><div align="left"><span class="style26">Name </span></div></td>
      <td colspan="2"><input type="text" name="name" /></td>
    </tr>
    <tr>
      <td width="284" height="34">&nbsp;</td>
      <td width="208"><span class="style26">E-mail ID </span></td>
      <td colspan="2"><input type="text" name="eid" /></td>
    </tr>
    <tr>
      <td height="33">&nbsp;</td>
      <td><div align="left"><span class="style25">Add Comments </span></div></td>
      <td colspan="2"><textarea name="query"></textarea></td>
    </tr>
    <tr>
      <td height="40">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2"><input type="button" name="Submit" value="Submit" onclick="f2();" /></td>
    </tr>
    <tr>
      <td height="40">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td height="40">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td height="40">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td height="40">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
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
