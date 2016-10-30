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
.style2 {	color: #FFFF66;
	font-style: italic;
	font-weight: bold;
}
.style18 {color: #FFFF00; font-weight: bold; }
.style21 {font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style22 {color: #FFFF00; font-weight: bold; font-style: italic; font-family: "Times New Roman", Times, serif; }
.style24 {color: #000000; font-weight: bold; font-size: 18px; }
.style25 {color: #000000}
.style12 {font-size: 18px}
-->
</style>
<script language="javascript">
/*function f1(){
var a;
a=document.form1.shows.value;
if (a=="Matinee"){
document.form1.stime.value="2:30";
}
if (a=="Noon Show"){
document.form1.stime.value="11:15";
}
if (a=="First Show"){
document.form1.stime.value="6:15";
}
if (a=="Second Show"){
document.form1.stime.value="9:30";
}
}
function add1()

{
if (document.form1.date.value=="")
{
alert("Please enter Day");
document.form1.date.focus();
return false;
}else if(document.form1.month.value==""){
alert("Please enter Month");
document.form1.month.focus();
return false;

}
else if(document.form1.year.value==""){
alert("Please enter Year");
document.form1.year.focus();
return false;

}
else if (document.form1.tname.value=="0")
	{
		alert("Enter Theatre Name");
		document.form1.tname.focus();
 	    return false;
	}
	else if (document.form1.shows.value=="0")
	{
		alert("Enter Shows");
		document.form1.shows.focus();
 	    return false;
	}
	else if (document.form1.stime.value=="")
	{
		alert("Enter Show Time");
		document.form1.stime.focus();
 	    return false;
	}
	else if (document.form1.filmname.value=="")
	{
		alert("Enter Film Name");
		document.form1.filmname.focus();
 	    return false;
	}
{
document.form1.method="post";
document.form1.action="View Collection_details.php";
document.form1.submit();
}
}*/

</script>
</head>

<body>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("could not connect".mysql_error());
}
$db=mysql_select_db("theatremanagementsystem");           
$qry="select * from theatre";
$result=mysql_query($qry);
?>
<form name="form1" method="post" action="View Collection_details.php" enctype="multipart/form-data">
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
      <td width="7%" height="37" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style2"><a href="admin_mainpage.php">HOME</a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="nowshowing.php">NOW SHOWING </a></div></td>
      <td width="6%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><em><a href="map.php"><strong>MAP</strong></a></em></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="comingsoon.php">COMING SOON </a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery.php">GALLERY</a><a href="ECoupon.php"></a></div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery.php"></a><a href="contactus.php">CONTACT US</a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="contactus.php"></a> <a href="aboutus.php">ABOUT US</a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="aboutus.php"></a> <a href="feedback.php" class="style21">FEEDBACK</a></div></td>
      <td width="14%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style22"><a href="admin.php">LOGOUT</a></div></td>
    </tr>
  </table>
  <table width="100%" height="357" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="15" height="32">&nbsp;</td>
      <td width="8">&nbsp;</td>
      <td width="22">&nbsp;</td>
      <td width="194">&nbsp;</td>
      <td width="24">&nbsp;</td>
      <td width="115">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td width="19">&nbsp;</td>
      <td width="46">&nbsp;</td>
      </tr>
    <tr>
      <td height="26">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><strong><a href="Add_gallery.php">ADD GALLERY</a></strong></div></td>
      <td bgcolor="#333333">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td colspan="3" bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#333333">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td height="39">&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><strong><a href="Theatre.php">ADD THEATRE DETAILS</a><a href="Add_gallery.php" class="style12"></a></strong></div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td height="39">&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><a href="Theatre_show.php"><strong>ADD SHOW DETAILS </strong></a></div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#FFFFFF"><span class="style24">Theatre Name: </span></td>
      <td colspan="3" bgcolor="#FFFFFF"><span class="style25">
        <select name="tname">
          <option value="0">Please Select</option>
		  <?php 
		  while($row=mysql_fetch_array($result))
		  {
		  ?>
           <option value="<?php echo $row[theatreid]; ?>"><?php echo $row[theatrename]; ?></option>
           
		   <?php }?>
        </select>
      </span> </td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td height="33">&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><span class="style18"><a href="View_users.php">VIEW USER </a></span></div>        <a href="Theatre_show.php">
        <div align="center"></div>
        </a></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#FFFFFF"><span class="style24">From Date:</span></td>
      <td bgcolor="#FFFFFF"><span class="style25">
        <select name="date1" id="date1">
          <?php
          $i=01;
		  while($i<=31)
		  {
		  echo "<option value=$i>$i</option>";
		  $i++;
		  }
		  ?>
        </select>
        <select name="month1" id="month1">
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
        <select name="year1" id="year1">
          <?php
		$j=2011;
		while($j<=2050)
		{
		echo "<br>";
		echo "<option value=$j>$j</option>";
		$j++;
		}
		?>
        </select>
      </span></td>
      <td width="70" bgcolor="#FFFFFF"><span class="style24">To Date:</span></td>
      <td width="149" bgcolor="#FFFFFF"><span class="style25">
        <select name="date2" id="date2">
          <?php
          $i=01;
		  while($i<=31)
		  {
		  echo "<option value=$i>$i</option>";
		  $i++;
		  }
		  ?>
        </select>
        <select name="month2" id="select2">
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
        <select name="year2" id="select3">
          <?php
		$j=2011;
		while($j<=2050)
		{
		echo "<br>";
		echo "<option value=$j>$j</option>";
		$j++;
		}
		?>
        </select>
      </span></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td height="38">&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><strong><a href="viewcontactus.php">VIEW CONTACT US</a><a href="View_users.php"></a></strong></div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#FFFFFF"><span class="style24">Film Name: </span></td>
      <td colspan="3" bgcolor="#FFFFFF"><input name="filmname" type="text" /></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td height="38">&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><strong><a href="viewcomments.php">VIEW COMMENTS </a><a href="viewcontactus.php"></a></strong></div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#FFFFFF">
        <div align="right"><span class="style25"><span class="style25"></span></span></div></td><td width="149" bgcolor="#FFFFFF">
        <div align="right" class="style25"></div></td>
        <td colspan="2" bgcolor="#FFFFFF"><div align="center" class="style25">
          <div align="right"></div>
        </div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td height="28">&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><strong><a href="viewfeedback.php">VIEW FEEDBACK </a></strong></div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="3" bgcolor="#FFFFFF">
        <div align="center">
          <input type="submit" name="Submit" value="=&gt;&gt;Go" />
        </div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td height="28">&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><strong><a href="View Collection.php"><strong>VIEW COLLECTION </strong></a><a href="viewfeedback.php" class="style12"></a></strong></div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="28">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center" class="style18"><a href="Report.php">REPORT</a></div></td>
      <td bgcolor="#333333">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td colspan="3" bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#333333">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td height="28">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><a href="View Collection.php"></a></td>
      <td bgcolor="#000000">&nbsp;</td>
      <td bgcolor="#000000">&nbsp;</td>
      <td colspan="3" bgcolor="#000000">&nbsp;</td>
      <td bgcolor="#000000">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
  </table>
  <p>
    
  </p>
  <p>&nbsp;</p>
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
