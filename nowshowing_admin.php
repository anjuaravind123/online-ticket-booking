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
}
.style7 {
	color: #FFFFFF;
	font-weight: bold;
}
.style8 {color: #FFFFFF}
.style14 {color: #FF0000; font-weight: bold; }
.style15 {	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style22 {color: #FFFF00; font-weight: bold; font-style: italic; font-family: "Times New Roman", Times, serif; }
-->
</style>
</head>

<body>
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
  <?php
   // include("db.php");
   $con=mysql_connect("localhost","root","");
   if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
$dt=Date('d-m-Y');
//echo $dt;
//$a="28-12-2010";
//$b="02-02_2010";

    $qry="select * from theatre_shows where Theatre_name='ANJALI'";
    $res=mysql_query($qry,$con);
	?>
  <table width="100%" background="pic/nowshowings.JPG" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="58" colspan="7"><div align="center"><img src="pic/NOWS.JPG" width="920" height="58" /></div></td>
    </tr>
	
    <tr>
      <td width="0%" height="268">&nbsp;</td>
      <td width="43%">
	  <?php  
	$i=0;
	while($row=mysql_fetch_array($res))
	  {
	  $edate=$row['enddate'];
	if ( strtotime($dt) < strtotime($edate))
{
	  ?>
	  
	  <div align="center" style="color:#FFFF00"><?php
	   echo "startdate: ".$row['Date']."<br>";
	    echo "enddate: ".$row['enddate']."<br>";
	  
	   echo $row['showtime'];?><a href="film_details.php?showid=<?php echo $row['showid'];?>&theatrename=ANJALI"><span class="style14">ANJALI</span><img src="<?php echo $row['Photo'];?>" width="300" height="300" border="0" /></a></div><?php } 
	}
	  ?></td>
      <td width="7%">&nbsp;</td>
      <td width="44%">
	  <?php $qry1="select * from theatre_shows where Theatre_name='ATHIRA'";
    $res1=mysql_query($qry1,$con);
	  
	//$i=0;
	while($row1=mysql_fetch_array($res1))
	  {
	   $edate=$row1['enddate'];
	if ( strtotime($dt) < strtotime($edate))
{

		?>
	  <div align="center" style="color:#FFFF00"><?php  echo "startdate: ".$row1['Date']."<br>";
	    echo "enddate: ".$row1['enddate']."<br>";
	  
	   echo $row1['showtime'];?><span class="style14">ATHIRA</span><a href="film_details.php?showid=<?php echo $row1['showid'];?>&theatrename=ATHIRA"><img src="<?php echo $row1['Photo'];?>" width="300" height="300" border="0" /></a></div>
	  <?php  
	}}
	  ?></td>
      <td width="6%" colspan="3" rowspan="7">&nbsp;</td>
    </tr>
	
    <tr>
      <td height="377">&nbsp;</td>
      <td> <?php $qry2="select * from theatre_shows where Theatre_name='ASWATHY'";
    $res2=mysql_query($qry2,$con);
	  
	//$i=0;
	while($row2=mysql_fetch_array($res2))
	  {
	  
	    $edate=$row2['enddate'];
	if ( strtotime($dt) < strtotime($edate))
{

		?>
		<div align="center" style="color:#FFFF00">
		<?php  echo "startdate: ".$row2['Date']."<br>";
	    echo "enddate: ".$row2['enddate']."<br>";
	  
	   echo $row2['showtime'];?>
		
		<a href="film_details.php?showid=<?php echo $row2['showid'];?>&theatrename=ASWATHY"><span class="style14">ASWATHY</span><img src="<?php echo $row2['Photo'];?>" width="300" height="300" border="0" /></a></div>
		 <?php  
	}}
	  ?></td>
      <td>&nbsp;</td>
      <td>
	  <?php $qry3="select * from theatre_shows where Theatre_name='ATHULYA'";
    $res3=mysql_query($qry3,$con);
	  
	//$i=0;
	while($row3=mysql_fetch_array($res3))
	  {
	    $edate=$row3['enddate'];
	if ( strtotime($dt) < strtotime($edate))
{

	  ?>
	  <div align="center" style="color:#FFFF00"><?php  echo "startdate: ".$row3['Date']."<br>";
	    echo "enddate: ".$row3['enddate']."<br>";
	  
	   echo $row3['showtime'];?><span class="style14">ATHULYA</span><a href="film_details.php?showid=<?php echo $row3['showid'];?>&theatrename=ATHULYA"><img src="<?php echo $row3['Photo'];?>" width="300" height="300" border="0" /></a></div>
	  <?php
	  }}
	  ?>
	  </td>
    </tr>
    <tr>
      <td height="81">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="31">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="41">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table width="100%" height="27" border="0" cellpadding="0" cellspacing="0" background="CURTAIN.JPG">
    <tr>
      <td background="pic/CURTAIN.JPG"><div align="center"><span class="style7">Developed By:Ashwin,Vinayak,Vyshak,Robin </span></div></td>
    </tr>
  </table>
</div>
</body>
</html>
