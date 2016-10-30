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
.style12 {color: #FF0000}
.style15 {	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.thumbnail 
{
float:left;
width:110px;
height:90px;
margin:5px;
}
.style21 {color: #FFFF00}
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
      <td width="6%" height="37" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style2"><a href="mainpage.php">HOME</a></div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="nowshowing.php">NOW SHOWING </a></div></td>
      <td width="14%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style15"><a href="terms and conditions.php">TERMS &amp; CONDITIONS </a></div></td>
      <td width="12%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="comingsoon.php">COMING SOON </a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="ECoupon.php">E-COUPON</a></div></td>
      <td width="8%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery.php">GALLERY</a></div></td>
      <td width="12%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="contactus.php">CONTACT US</a> </div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><a href="aboutus.php"><strong>ABOUT US</strong></a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6">
          <div align="center"><a href="guest_aboutus.php"></a> <a href="feedback.php" class="style15">FEEDBACK</a></div>
      </div></td>
      <td width="8%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style21"><strong><a href="login.php">LOGOUT</a></strong></div></td>
    </tr>
  </table>
  <table width="100%" height="414" border="0" cellpadding="0" cellspacing="0" bgcolor="#000000">
    <tr>
      <td height="61" colspan="10"><div align="center">
        <p><img src="icons/photo-gallery-icon.jpg" width="627" height="233" /></p>
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
	
	 
	
	
      </div></td>
    </tr>
    <!--<tr>
      <td width="4%">&nbsp;</td>
      <td width="27%"><img src="gallery images/4cc672c32bc94rajinikanth.jpg" width="240" height="234" /></td>
      <td width="38%"><img src="gallery images/11slid3.jpg" width="362" height="245" /></td>
      <td width="24%"><img src="gallery images/Amitabh_Kamal_Parris.jpg" width="223" height="262" /></td>
      <td width="1%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
    </tr>-->
	
    <tr>
	<?php  
	$i=0;
	
	  
	  
	while($row=mysql_fetch_array($res))
	  {
	  $i++;
	  ?>
      <td>&nbsp;</td>
	  <?php // if ($row['GID']%3==0){
	  ?>
      <td><img src="<?php echo $row['PHOTO']; ?>"   width="242" height="178" />ghjghk <?php echo $i; //echo $row['GID'];?>bnmbnm</td>
	  
	   
	  <?php }?>
    
	  <?php //} else  if ($row['GID']%2==0){
	  ?>
      <td><img src="<?php //echo $row['PHOTO'];?>" width="361" height="189" /></td>
	  <?php //} else {?>
      <td><img src="<?php //echo $row['PHOTO'];?>" width="222" height="198" /></td>
	  <?php //}?>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
