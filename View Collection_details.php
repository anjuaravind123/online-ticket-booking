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
.style12 {font-size: 18px}
.style32 {font-size: 12px}
.style33 {color: #000000}
.style34 {color: #FFFFFF; font-weight: bold; font-size: 14px; }
#Layer2 {
	position:absolute;
	width:628px;
	height:241px;
	z-index:2;
	left: 265px;
	top: 189px;
}
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
<?php
$theatreid=$_POST['tname'];
$fday=$_POST['date1'];
$fmon=$_POST['month1'];
$fyear=$_POST['year1'];
$fdate="$fyear-$fmon-$fday";

$eday=$_POST['date2'];
$emon=$_POST['month2'];
$eyear=$_POST['year2'];
$edate="$eyear-$emon-$eday";
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("could not connect".mysql_error());
}
$db=mysql_select_db("theatremanagementsystem");           
//$qry="select *from tickets where date between '$fdate' and '$edate' and theatreid='$theatreid' order by showid ";
//$qry="SELECT showid, sum(amount) FROM tickets GROUP BY showid where date between '$fdate' and '$edate' and theatreid='$theatreid'";
$qry="SELECT sum(amount) as sum,showid,theatreid,date FROM tickets WHERE theatreid='$theatreid' and date >='$fdate' and date <='$edate' GROUP BY showid";
echo $qry;
$result=mysql_query($qry); 
?>
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
      <td>&nbsp;</td>
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
      <td bgcolor="#666666"><?php //echo $qry;?>&nbsp;</td>
      <td bgcolor="#333333">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td height="39">&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><strong><a href="Theatre.php">ADD THEATRE DETAILS</a><a href="Add_gallery.php" class="style12"></a></strong></div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td colspan="2" rowspan="7" bgcolor="#FFFFFF"><p><p><p><div id="Layer2">
        <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
         
          <tr>
            <td width="43%"><div align="center"><span class="style32"><span class="style33"><span class="style33"></span></span></span>From date:<?php echo $fdate;?></div></td>
            <td><div align="center"><span class="style32"><span class="style33"><span class="style33"></span></span></span>To date:<?php echo $edate;?></div>
              <div align="center"><span class="style32"><span class="style33"><span class="style33"></span></span></span><?php echo $row['showid'];?></div>
              <div align="center"><span class="style32"><span class="style33"><span class="style33"></span></span></span></div>
              <div align="center"><span class="style32"><span class="style33"><span class="style33"></span></span></span></div>              <div align="center"><span class="style32"><span class="style33"><span class="style33"></span></span></span></div></td>
            </tr>
		  </table>
		  <p><p><p>
		  <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
          <tr>
            
            <th width="14%" bgcolor="#333333" scope="col"><span class="style34"> Date</span></th>
            
            <th width="23%" bgcolor="#333333" scope="col"><span class="style34">Film Name</span></th>
			<th width="16%" bgcolor="#333333" scope="col"><span class="style34">Theatre Name</span></th>
            <th width="10%" bgcolor="#333333" scope="col"><span class="style34">Show Time </span></th>
            <th width="13%" bgcolor="#333333" scope="col"><span class="style34">Collection</span></th>
          </tr>
<?php	
$sum1=0;
	  while ($row=mysql_fetch_array($result)){?>
		  <tr>
          
            <td><div align="center"><span class="style32"><span class="style33"><span class="style33"></span></span></span><?php echo $row['date'];?></div></td>
          
            <td><div align="center"><span class="style32"><span class="style33"><span class="style33"></span></span></span><?php //echo $row['showid'];
			$sidr=$row['showid'];
			$qrydr="select *from theatre_shows where showid='$sidr'";
			//echo $qrydr;
			$resultdr=mysql_query($qrydr);
			while($rowdr=mysql_fetch_array($resultdr))
			{
			$fn=$rowdr[Film_name];
			$st=$rowdr[showtime];
			$tname=$rowdr[Theatre_name];
			}
			echo $fn;
			?></div></td>
			  <td><div align="center"><span class="style32"><span class="style33"><span class="style33"></span></span></span><?php echo $tname;?></div></td>
            <td><div align="center"><span class="style32"><span class="style33"><span class="style33"></span></span></span><?php echo $st; ?></div></td>
            <td><div align="center"><span class="style32"><span class="style33"><span class="style33"></span></span></span><?php echo $row['sum'];
			$sum1=$row['sum'];
			$sum2=$sum1+$sum2;
			
			?></div></td>
          </tr>
		  
		  <?php }?>
		  <tr>
		    <td colspan="6"><div align="right"><?php echo $sum2;?>&nbsp;</div></td>
		    </tr>
        </table>
		
		
		
		
		
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td height="39">&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><a href="Theatre_show.php"><strong>ADD SHOW DETAILS </strong></a></div></td>
      <td bgcolor="#666666">&nbsp;</td>
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
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td height="38">&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><strong><a href="viewcontactus.php">VIEW CONTACT US</a><a href="View_users.php"></a></strong></div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td height="38">&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><strong><a href="viewcomments.php">VIEW COMMENTS </a><a href="viewcontactus.php"></a></strong></div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td height="28">&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><strong><a href="viewfeedback.php">VIEW FEEDBACK </a></strong></div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td height="28">&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666"><div align="center"><strong><a href="View Collection.php"><strong>VIEW COLLECTION </strong></a><a href="viewfeedback.php" class="style12"></a></strong></div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <!--<tr>
      <td height="28">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><div align="center" class="style18"><a href="Report.php">REPORT</a></div></td>
      <td bgcolor="#333333">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#333333">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>-->
    <tr>
      <td height="28">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><a href="View Collection.php"></a></td>
      <td bgcolor="#000000">&nbsp;</td>
      <td bgcolor="#000000">&nbsp;</td>
      <td bgcolor="#000000">&nbsp;</td>
      <td bgcolor="#000000">&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
  </table>
  <p>
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
