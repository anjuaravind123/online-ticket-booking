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
#em
{
border:#FF0000 solid 1px;	
}

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
.style21 {
	font-size: 18px;
	font-weight: bold;
}
.style25 {color: #000000; font-weight: bold; font-size: 18px; }
.style28 {color: #000000}
.style29 {color: #FFFF00}
.style31 {
	color: #EA230C;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
<script language="javascript">
function f1(){
var a;
a=document.form1.shows.value;
if (a=="Matinee"){
document.form1.stime2.value="2:30";
}
if (a=="NoonShow"){
document.form1.stime2.value="11:15";
}
if (a=="FirstShow"){
document.form1.stime2.value="6:15";
}
if (a=="SecondShow"){
document.form1.stime2.value="9:30";
}

document.form1.action="Ticket_Booking_Process.php";
document.form1.method="post";
document.form1.submit();


}
</script>
</head>

<body>
<form name="form1" method="post" action="seatallocate.php">

<?PHP
session_start();
$editid=$_GET['editid'];
$dt=$_GET['dt'];
$dt1=explode("-",$dt);
$dt2=$dt1[2];
$dt22=$dt1[0];
$th=$_GET['th'];
$sh=$_GET['sh'];
$st=$_GET['st'];
$con=mysql_connect("localhost","root","");
   if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
    //$qry="select *from Theatre_shows where Date='$dt' and Theatre_name='$th' and Shows='$sh'";
	
	$qry="select *from Theatre_shows where showid='$editid'";
    $res=mysql_query($qry,$con);
?>
 <?php
		while($row=mysql_fetch_array($res))
	{
	$fn=$row[Film_name];
	$sid=$row[showid];
	$tname=$row[Theatre_name];
	$st=$row[showtime];
	$stype=$row[Shows];
	$sdate=$row[Date];
	$edate=$row[enddate];
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
      <td width="8%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style29"><strong><a href="login.php">LOGOUT</a></strong></div></td>
    </tr>
  </table>
  <table width="100%" height="398" border="0" cellpadding="0" cellspacing="0" bgcolor="#000000">
    <tr>
      <td width="10%">&nbsp;</td>
      <td width="18%">&nbsp;</td>
      <td width="23%">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td width="15%">&nbsp;</td>
      <td width="6%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td> <?php $Email=$_SESSION['user'];echo "<font color=yellow><b>$Email</b></font>";?>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="37">&nbsp;</td>
      <td bgcolor="#333333"><?php echo $dt2;?>&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td colspan="3" bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#333333">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><a href="mainpage.php" class="style21">My Profile</a></td>
      <td bgcolor="#FFFFFF"><span class="style25">Booking Date</span></td>
      <td colspan="3" bgcolor="#FFFFFF">
	  <?php $dt=Date('Y-m-d');?>
	  
	  <input type="text" name="date" id="em" value="<?php echo $dt;?>" readonly=""  /></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="33">&nbsp;</td>
      <td bgcolor="#666666"><a href="changepassword.php" class="style21">Change Password </a></td>
      <td bgcolor="#FFFFFF"><span class="style25">Date</span></td>
      <td width="4%" bgcolor="#FFFFFF">
        <div align="left">
		 <select name="date" id="date">
		<?php
		$fromDate = "$sdate";
$toDate = "$edate";

$dateMonthYearArr = array();
$fromDateTS = strtotime($fromDate);
$toDateTS = strtotime($toDate);
$i=0;
for ($currentDateTS = $fromDateTS; $currentDateTS <= $toDateTS; $currentDateTS += (60 * 60 * 24)) {
// use date() and $currentDateTS to format the dates in between
$currentDateStr = date("Y-m-d",$currentDateTS);
$dateMonthYearArr[$i] = $currentDateStr;
if ( strtotime($dt) <= strtotime($dateMonthYearArr[$i]))
{
echo "<option>$dateMonthYearArr[$i]</option>";
}
$i++;
//print $currentDateStr.”<br />”;
}?>
         
            <?php
          //$i=01;
		  //while($i<=31)
		  //{
		  ?>
            
             <option value=<?php //echo $i; if ($dt2==$i){ ?> selected <?php //}?> ><?php //echo $i?></option>
             <?php //$i++;
		  //}
		  ?>
          </select>
          </div></td><td width="6%" bgcolor="#FFFFFF">
            <div align="left">
             <!-- <select name="month" id="month">
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
                  </select>-->
            </div></td>
      <td width="17%" bgcolor="#FFFFFF">
        <div align="left">
         <!-- <select name="year" id="year">
            <?php
		//$j=2011;
		//while($j<=2050)
		//{
		//echo "<br>";
		?>
		<option value=<?php //echo $j; if ($dt22==$j){ ?> selected <?php //}?> ><?php //echo $j?></option>
		<?php //$j++;
		//}
		?>
          </select>-->
        </div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><a href="Ticket_Booking1.php" class="style21">Book Tickets </a><a href="changepassword.php" class="style21"></a></td>
      <td bgcolor="#FFFFFF"><span class="style25">Theatre</span></td>
      <td colspan="3" bgcolor="#FFFFFF"><div align="left">
	  <input type="text" name="theatre"  value="<?php echo $tname;?>" readonly="readonly"/>
        <!--<select name="theatre">
		 <option value=<?php //echo "ANJALI"; if ($th=="ANJALI"){ ?> selected <?php //}?> >ANJALI</option>
		  <option value=<?php //echo "ATHIRA"; if ($th=="ATHIRA"){ ?> selected <?php //}?>>ATHIRA</option>
		   <option value=<?php //echo "ASWATHY"; if ($th=="ASWATHY"){ ?> selected <?php //}?>>ASWATHY</option>
		    <option value=<?php //echo "ATHULYA"; if ($th=="ATHULYA"){ ?> selected <?php //}?>>ATHULYA</option>
        </select>-->
      </div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><a href="ECoupon.php" class="style21"></a><a href="Ticket_Booking_History.php" class="style21">Booking History</a><a href="Ticket_Booking.php" class="style21"></a></td>
      <td bgcolor="#FFFFFF"><span class="style25">Shows </span></td>
      <td colspan="3" bgcolor="#FFFFFF"><div align="left">
	  <input type="text" name="shows" value="<?php echo $stype;?>" readonly="readonly" />
       <!-- <select name="shows" onchange="f1()">
		<option>Select show</option>
		<option value=<?php //echo "Matinee"; if ($sh=="Matinee"){ ?> selected <?php //}?>>Matinee</option>
		<option value=<?php //echo "NoonShow"; if ($sh=="NoonShow"){ ?> selected <?php //}?>>NoonShow</option>
		<option  value=<?php //echo "FirstShow"; if ($sh=="FirstShow"){ ?> selected <?php //}?>>FirstShow</option>
		<option <?php //echo "SecondShow"; if ($sh=="SecondShow"){ ?> selected <?php //}?>>SecondShow</option>
        </select>-->
      </div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="44">&nbsp;</td>
      <td bgcolor="#666666"><a href="ECoupon.php" class="style21">Purchase ECoupon</a><a href="Ecoupon_view.php" class="style21"></a></td>
      <td bgcolor="#FFFFFF"><span class="style25">Show Time </span></td>
      <td colspan="3" bgcolor="#FFFFFF"><input type="hidden" name="stime" readonly="readonly" value="<?php echo $st;?>"/>
        <input type="text" name="stime2" readonly="readonly" value="<?php echo $st;?>"/></td>
      <td bgcolor="#666666"><input name="showid" type="hidden" id="showid" value="<?php echo $sid;?>" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><a href="Ecoupon_view.php" class="style21">View ECoupon </a></td>
      <td bgcolor="#FFFFFF"><span class="style25">Film  name</span></td>
      <td colspan="3" bgcolor="#FFFFFF"><input type="text" name="film_name" value="<?php echo $fn;?>" readonly="readonly" >     </td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
   <!-- <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><a href="ECoupon_recharge.php" class="style21">Recharge ECoupon</a><a href="ECoupon.php" class="style21"></a></td>
      <td bgcolor="#FFFFFF"><span class="style25">Available tickets</span></td>
      <td colspan="3" bgcolor="#FFFFFF"><div align="left">
        <input name="availabletickets" type="text" id="availabletickets" />
      </div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>-->
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#666666"><a href="ECoupon.php" class="style21">Recharge ECoupon</a><a href="ECoupon_recharge.php" class="style21"></a></td>
      <td bgcolor="#FFFFFF"><span class="style28"></span></td>
      <td colspan="3" bgcolor="#FFFFFF"><div align="left">
        <input type="submit" name="Submit" value="Submit">
      </div></td>
      <td bgcolor="#666666">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="32">&nbsp;</td>
      <td bgcolor="#333333">&nbsp;</td>
      <td bgcolor="#666666">&nbsp;</td>
      <td colspan="3" bgcolor="#666666">
        
        <div align="right"></div></td>
      <td bgcolor="#333333">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="4"><div align="center" class="style31">* Tickets once purchased         cannot be exchanged or refunded.</div></td>
      <td>s</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="4">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="4"><p>&nbsp;</p>
        <p>&nbsp;</p></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
 
  <table width="100%" height="27" border="0" cellpadding="0" cellspacing="0" background="pic/CURTAIN.JPG">
    <tr>
      <td><div align="center"><span class="style7">Developed By:Ashwin,Vinayak,Vyshak,Robin </span></div></td>
    </tr>
  </table>
</div>
</form>
</body>
</html>
