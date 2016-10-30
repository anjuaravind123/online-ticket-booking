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
.style18 {color: #FF0000}
.style2 {	color: #FFFF66;
	font-style: italic;
	font-weight: bold;
}
-->
</style>

<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<script src="jquery-latest.pack.js" type="text/javascript"></script>
<script src="jquery.lightbox.js" type="text/javascript"></script>
<script>
		$(document).ready(function(){
		    base_url = document.location.href.substring(0, document.location.href.indexOf('index.html'), 0);
		    
			$(".lightbox").lightbox({
			    fitToScreen: true,
			    imageClickClose: false
		    });
			
			$(".lightbox-2").lightbox({
			    fitToScreen: true
		    });
			
			$(".lightbox-json").lightbox({
			    fitToScreen: true,
			    jsonData: new Array(
			        {url: base_url + 'images/image-0.jpg', title: 'Image 1 loaded using JSON data' },
			        {url: base_url + 'images/image-1.jpg', title: 'Image 2 loaded using JSON data' },
			        {url: base_url + 'images/image-2.jpg', title: 'Image 3 loaded using JSON data' },
			        {url: base_url + 'images/image-3.jpg', title: 'Image 4 loaded using JSON data' }
		        ),
		        loopImages: true,
		        imageClickClose: false,
		        disableNavbarLinks: true
		    });
		    
		    
		});

	</script>

<style type="text/css">
<!--
.style15 {	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
-->
</style>
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
      <td width="7%" height="37" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style2"><a href="index.php">HOME</a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="nowshowing.php">NOW SHOWING </a></div></td>
      <td width="6%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><a href="map.php">MAP</a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="comingsoon.php">COMING SOON </a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="ECoupon.php">E-COUPON</a></div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery.php">GALLERY</a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="contactus.php">CONTACT US</a> </div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="aboutus.php">ABOUT US</a> </div></td>
      <td width="14%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><a href="feedback.php" class="style15">FEEDBACK</a></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
   <?php
 //session_start();
 $con=mysql_connect("localhost","root","");
if(!$con)
{
die("could not connect".mysql_error());
}
$db=mysql_select_db("theatremanagementsystem");           
$qry="select * from gallery";
$result=mysql_query($qry);        
//$no=mysql_num_rows($result);
?>
  <table width="200" border="1" align="center">
   <?php
	  while($row=mysql_fetch_array($result))
	  {
	  ?>
    <tr>
      
      <td><div align="center"><a href="<?php echo $row['PHOTO'];?>"></a></div></td>
     
    </tr>
    <?php
	}
	?>
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
