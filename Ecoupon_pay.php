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
	background-image: url();
	background-color: #000000;
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
.style15 {
	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style4 {
	font-size: 24px;
	color: #FFFFFF;
}
.style21 {color: #FFFF00}
.style22 {color: #FFFF00; font-weight: bold; }
.style23 {color: #FFFF00; font-weight: bold; font-style: italic; font-family: "Times New Roman", Times, serif; }
-->
</style>
<script type = "text/javascript">
function newPage() 
{
window.location = "Payment.php"
}

function f1(){
document.frm.action="seat_anjali_add1.php";
document.frm.method="post";
document.frm.submit();
}




function printpage()
{
window.print();
}


</script>
</head>

<body>
<?php session_start();

error_reporting(0);
?>
<?php
$con=mysql_connect('localhost','root','');
if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
 $Email=$_SESSION['user'];
 
 $qryu="select *from registration where Email='$Email'";
	$resultu=mysql_query($qryu);
	  while($rowu=mysql_fetch_array($resultu))
	  {
	  $userid=$rowu['regid'];
	   }
	   echo $userid;
	$qry="select *from ecoupon where Userid='$userid'";
	$result=mysql_query($qry);
	  
	  
	  $theatre=$_POST['theatre'];
	  $seats=$_POST['seats'];
	  $amount=$_POST['amount'];
$time=$_POST['time'];
//$theatreid=$_POST['theatreid'];
$filmid=$_POST['film_name'];
$show=$_POST['shows'];
$date=$_POST['date'];
$showid=$_POST['showid'];
$bookingdate=$_POST['bookingdate'];
	   ?>
<form name="frm" method="post" action="Payment.php">
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
  <table width="30%" border="0" align="right" cellpadding="1" cellspacing="1">
    <tr>
      <th scope="row"><span class="style21"><?php $Email=$_SESSION['user'];echo "<font color=yellow>Hai $Email";?></span></th>
    </tr>
  </table></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="74%" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <th height="51" colspan="7" background="pic/CURTAIN.JPG" scope="row"><div align="left" class="style4">Ticket</div></th>
    </tr>

    <tr>
      <th width="25%" height="32" scope="row"><div align="left" class="style22">
        <div align="center"></div>
      </div>        
        <span class="style22">
        <label></label>
        </span></th>
      <td width="25%"><div align="center"></div></td>
      <td width="21%"><div align="left" class="style22">
        <div align="center"></div>
      </div></td>
      <td width="29%" class="style2">&nbsp;</td>
    </tr>
	<?php  while($row=mysql_fetch_array($result))
	  {?>
    <tr>
      <th height="32" scope="row"><div align="center" class="style8"><?php echo $row['Couponid']; ?></div></th>
      <td><div align="center" class="style8"><?php echo $row['Amount']; ?></div></td>
      <td><div align="center" class="style8"><?php echo $row['Balanceamount']; 
	  
	 $bm=$row['Balanceamount'];
	  
	  ?></div></td>
      <td><span class="style21"><?php 
	  if ($bm < $amount)
	  {
	  echo "Insufficient Balance";
	  }
	  else {
	  
	  
	  if ($theatre=="ANJALI"){?><a href="seat_anjali_add1.php?cid=<?php echo $row['Couponid']; ?>&fn=<?php echo $filmid;?>&sh=<?php echo $show;?>&dt=<?php echo $date;?>&tm=<?php echo $time;?>&showid=<?php echo $showid;?>&amount=<?php echo $amount;?>&seats1=<?php echo $seats;?>&theatre=<?php echo $theatre;?>" >Pay</a>
	  
	  <?php } else if ($theatre=="ATHIRA"){?>
	  
	  <a href="seat_athira_add1.php?cid=<?php echo $row['Couponid']; ?>&fn=<?php echo $filmid;?>&sh=<?php echo $show;?>&dt=<?php echo $date;?>&tm=<?php echo $time;?>&showid=<?php echo $showid;?>&amount=<?php echo $amount;?>&seats1=<?php echo $seats;?>&theatre=<?php echo $theatre;?>" >Pay</a><?php }
	  else if ($theatre=="ATHULYA"){?>
	  
	  <a href="seat_athulya_add1.php?cid=<?php echo $row['Couponid']; ?>&fn=<?php echo $filmid;?>&sh=<?php echo $show;?>&dt=<?php echo $date;?>&tm=<?php echo $time;?>&showid=<?php echo $showid;?>&amount=<?php echo $amount;?>&seats1=<?php echo $seats;?>&theatre=<?php echo $theatre;?>" >Pay</a>
	<?php } else if ($theatre=="ASWATHY"){?>
	  
	  <a href="seat_aswathy_add1.php?cid=<?php echo $row['Couponid']; ?>&fn=<?php echo $filmid;?>&sh=<?php echo $show;?>&dt=<?php echo $date;?>&tm=<?php echo $time;?>&showid=<?php echo $showid;?>&amount=<?php echo $amount;?>&seats1=<?php echo $seats;?>&theatre=<?php echo $theatre;?>" >Pay</a><?php } }?>
	  </span></td>
    </tr>
	<?php }?>
  </table>
  <p>&nbsp;</p>
  <table width="46%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <th width="44%" scope="col"><div align="left" class="style21"><span class="style21 style21">Filim Name </span>:</div></th>
      <th width="28%" scope="col"><div align="left"><span class="style21"><?php echo $filmid;?>&nbsp;</span></div></th>
      <th width="28%" scope="col"><span class="style21"></span></th>
    </tr>
    <tr>
      <th scope="col"><div align="left" class="style21"><span class="style21">Show Date </span>:</div></th>
      <th scope="col"><div align="left"><span class="style21"><?php echo $date;?></span></div></th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th scope="col"><div align="left" class="style21"><span class="style21">Show</span>:</div></th>
      <th scope="col"><div align="left"><span class="style21"><?php echo $show;?></span></div></th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th scope="col"><div align="left" class="style21"><span class="style21">Show Time </span>:</div></th>
      <th scope="col"><div align="left"><span class="style21"><?php echo $time;?></span></div></th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th scope="col"><div align="left" class="style21"><span class="style21">Theatre</span>:</div></th>
      <th scope="col"><div align="left"><span class="style21"><?php echo  $theatre;?></span></div></th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th scope="col"><div align="left"><span class="style21">Seats</span></div></th>
      <th scope="col"><div align="left"><span class="style21"><?php echo $seats;?>&nbsp;</span></div></th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th scope="col"><div align="left"><span class="style21">Amount</span></div></th>
      <th scope="col"><div align="left"><span class="style21"><?php echo $amount;?>&nbsp;</span></div></th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col"><input type="hidden" name="film_name" value="<?php echo $filmid;?>" />
        <input type="hidden" name="shows"  value="<?php echo $show;?>"/>
        <input type="hidden" name="date"  value="<?php echo $date;?>"/>
		<input type="hidden" name="time"  value="<?php echo $time;?>"/>
		<input type="hidden" name="showid"  value="<?php echo $showid;?>"/>
		<input type="hidden" name="bookingdate"  value="<?php echo $dt;?>"/>
		<input type="hidden" name="seats"  value="<?php echo $seats;?>"/>
		<input type="hidden" name="amount"  value="<?php echo $amount;?>"/>&nbsp;</th>
    </tr>
    <tr>
    
    <td></td><td><input type="button" name="but" value="print" onclick="printpage();" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p align="right">&nbsp;</p>
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
