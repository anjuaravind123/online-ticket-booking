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
</head>

<body>
<form name="f1" method="post" action="">
<?php
$con=mysql_connect("localhost","root","");
   if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
    $qry="select *from comments";
    $res=mysql_query($qry,$con);
	 
	//}
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
      <td width="7%" height="37" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style2"><a href="mainpage.php">HOME</a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="nowshowing.php">NOW SHOWING </a></div></td>
      <td width="6%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><a href="map.php">MAP</a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="comingsoon.php">COMING SOON </a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery.php">GALLERY</a><a href="ECoupon.php"></a></div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery.php"></a><a href="contactus.php">CONTACT US</a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="contactus.php"></a> <a href="aboutus.php">ABOUT US</a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="aboutus.php"></a> <a href="feedback.php" class="style16">FEEDBACK</a></div></td>
      <td width="14%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style22"><a href="index.php">LOGOUT</a></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <table width="93%" height="84" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
    <tr>
      <th height="51" background="pic/CURTAIN.JPG" scope="col"><div align="left">Name</div></th>
      <th background="pic/CURTAIN.JPG" scope="col">Comments</th>
      <th background="pic/CURTAIN.JPG" scope="col">Date &amp; Time</th>
      <th background="pic/CURTAIN.JPG" scope="col">Theatre_Name </th>
      <th background="pic/CURTAIN.JPG" scope="col">Film_Name</th>
    </tr>
	 <?php
  while($row=mysql_fetch_array($res))
	{ 
	$Name=$row['Name'];
	$Email=$row['Emailid'];
	$comments=$row['comments'];
	$date=$row['Date'];
	$showid=$row['showid'];
	?>
    <tr>
      <th width="10%" height="33" scope="col"><div align="left"><?php echo $Name; ?></div></th>
      <th width="29%" scope="col"><div align="left"><?php echo $comments;?></div></th>
      <th width="19%" scope="col"><?php echo $date;?>&nbsp;</th>
      <th width="19%" scope="col"><?php 
	  $qry1="select *from theatre_shows where showid=$showid";
    $res1=mysql_query($qry1,$con);
	while($row1=mysql_fetch_array($res1))
	{ 
	//$Film_name=$row1['Film_name'];
	//$Theatre_name=$row1['Theatre_name'];
	
	//$showid=$row['showid'];
	echo $row1['Theatre_name']; 
	 ?>&nbsp;</th>
      <th width="23%" scope="col"><div align="center"><?php echo $row1['Film_name']; ?>&nbsp;
            <?php } ?>	  
      </div></th>
    </tr>
	   <?php } ?>
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
