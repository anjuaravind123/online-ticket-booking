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
.style18 {color: #FFFF00; font-weight: bold; }
.style19 {
	color: #FFFF00;
	font-size: 18px;
	font-weight: bold;
}
.style20 {
	font-size: 18px;
	color: #A30708;
}
.style21 {font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style22 {color: #FFFF00; font-weight: bold; font-style: italic; font-family: "Times New Roman", Times, serif; }
.style23 {color: #FFFF00}
-->
</style>
<script language="javascript">
function f1(){
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
document.form1.action="addtheatre_show.php";
document.form1.submit();
}
}
function del1()
{
document.form1.method="post";
document.form1.action="deletetheatre_show.php";
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
<form name="form1" method="post" action="" enctype="multipart/form-data">
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
      <td width="14%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style21"><a href="terms and conditions.php">TERMS &amp; CONDITIONS </a></div></td>
      <td width="12%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="comingsoon.php">COMING SOON </a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="ECoupon.php">E-COUPON</a></div></td>
      <td width="8%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery.php">GALLERY</a></div></td>
      <td width="12%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="contactus.php">CONTACT US</a> </div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><a href="aboutus.php"><strong>ABOUT US</strong></a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6">
          <div align="center"><a href="guest_aboutus.php"></a> <a href="feedback.php" class="style21">FEEDBACK</a></div>
      </div></td>
      <td width="8%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style23"><strong><a href="login.php">LOGOUT</a></strong></div></td>
    </tr>
  </table>
  <p>
    <!--<table width="100%" height="279" border="0" cellpadding="0" cellspacing="0">
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
      <td><span class="style15">Start Date</span></td>
      <td colspan="2"><select name="date" id="date">
	  <?php
         /* $i=01;
		  while($i<=31)
		  {
		  echo "<option value=$i>$i</option>";
		  $i++;
		  }*/
		  ?>
      </select>
        <select name="month" id="month">
		
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
               
        <select name="year" id="year">
		<?php
		/*$j=2011;
		while($j<=2050)
		{
		echo "<br>";
		echo "<option value=$j>$j</option>";
		$j++;
		}*/
		?>
          </select></td>
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
      <td><span class="style15">End Date</span></td>
      <td colspan="2"><select name="date1" id="date">
	  <?php
          /*$i=01;
		  while($i<=31)
		  {
		  echo "<option value=$i>$i</option>";
		  $i++;
		  }*/
		  ?>
      </select>
        <select name="month1" id="month">
		
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
               
        <select name="year1" id="year">
		<?php
		/*$j=2011;
		while($j<=2050)
		{
		echo "<br>";
		echo "<option value=$j>$j</option>";
		$j++;
		}*/
		?>
          </select></td>
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
      <td colspan="2"><select name="tname">
	   <option value="0">Please Select</option>
	  <option>ANJALI</option>
	  <option>ATHIRA</option>
	  <option>ATHULYA</option>
	  <option>ASWATHY</option>
      </select>      </td>
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
      <td><span class="style15">Shows</span></td>
      <td colspan="2"><select name="shows" onchange="f1();">
	   <option value="0">Please Select</option>
	  <option value="Matinee">Matinee</option>
	  <option value="Noon Show">Noon Show</option>
	  <option value="First Show">First Show</option>
	  <option value="Second Show">Second Show</option>
        </select>        </td>
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
      <td><span class="style15">Show Time </span></td>
      <td colspan="2"><input type="text" name="stime" readonly/></td>
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
      <td><span class="style15">Film Name </span></td>
      <td colspan="2"><input type="text" name="filmname" /></td>
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
      <td><span class="style27 style14 style20"><strong>Upload Photo</strong></span></td>
      <td colspan="2"><input type="file" name="file2" /></td>
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
      <td><span class="style15">Film Description </span></td>
      <td colspan="2"><textarea name="Film_description" cols="50" rows="10" id="Film_description"></textarea></td>
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
        <div align="right"></div></td><td width="94">
        <div align="right">
          <input type="button" name="Submit" value="ADD" onclick="add1();" />
        </div></td><td width="120"><div align="center">
          <input type="submit" name="Submit2" value="DELETE" onclick="del1();" />
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
  </table>-->
    <?php
$con=mysql_connect("localhost","root","");
   if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
    $qry="select *from Theatre_shows ";
    $res=mysql_query($qry,$con);
	?>
  </p>
  <p>&nbsp;</p>
  <?php $dt=Date('d-m-Y');
//echo $dt;
//$a="28-12-2010";
//$b="02-02_2010";

?>
  <table width="87%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
    <tr>
     <!-- <td width="5%" height="30"><div align="center" class="style18">Select</div></td>-->
      <td width="9%"><div align="center" class="style18">StartDate</div></td>
      <td width="15%"><span class="style23">End Date </span></td>
      <td width="15%"><div align="center" class="style18">Theatre Name </div></td>
      <td width="11%"><div align="center" class="style18">Shows</div></td>
      <td width="11%"><div align="center" class="style18">Show Time </div></td>
      <td width="15%"><div align="center" class="style18">Film Name </div></td>
      <td width="17%"><div align="center" class="style19">BookTicket</div></td>
    </tr>
	 <?php while($row=mysql_fetch_array($res))
	{ 
	
	$edate=$row['enddate'];
	if ( strtotime($dt) < strtotime($edate))
{
	
	?>

    <tr>
    <!--  <td height="34"><div align="center" class="style8">
   
          <input name="rid" type="radio" value="<?php //echo $row['showid'];?>" />
   
        </div></td>-->
      <td><div align="center" class="style8"><?php echo $row['Date'];?></div></td>
      <td><div align="center" class="style8">&nbsp;<?php echo $row['enddate'];?></div></td>
      <td><div align="center" class="style8"><?php echo $row['Theatre_name'];?></div></td>
      <td><div align="center" class="style8"><?php echo $row['Shows'];?></div></td>
      <td><div align="center" class="style8"><?php echo $row['showtime'];?></div></td>
      <td><div align="center" class="style8"><?php echo $row['Film_name'];?></div></td>
      <td><div align="center"><a href="Ticket_Booking.php?editid=<?php echo $row['showid'];?>">Click Here </a></div></td>
    </tr>
	 <?php
	}}
	?>
  </table>
  <p>&nbsp;</p>
  <p><a href="mainpage.php">&gt;&gt;BACK</a></p>
  <table width="100%" height="27" border="0" cellpadding="0" cellspacing="0" background="pic/CURTAIN.JPG">
    <tr>
      <td><div align="center"><span class="style7">Developed By:Ashwin,Vinayak,Vyshak,Robin </span></div></td>
    </tr>
  </table>
</div>
</form>
</body>
</html>
