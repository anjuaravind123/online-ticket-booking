<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
session_start();
$con=mysql_connect("localhost","root","");
if(!$con )
{
die ("could not connect".mysql_error());
}
$db=mysql_select_db('theatremanagementsystem');
$Email=$_SESSION['user'];
$couponid=$_GET['cid'];
$filmid=$_GET['fn'];
$time=$_GET['tm'];
$theatre=$_GET['theatre'];
/*if ($theatre=="ANJALI")
{
$theatreid=1;


}*/
 $qryt="select *from theatre where theatrename='$theatre'";
	$resultt=mysql_query($qryt);
	  while($rowt=mysql_fetch_array($resultt))
	  {
	  $theatreid=$rowt['theatreid'];
	   }
	   //echo $theatrename;
//$theatreid=$_POST['theatreid'];
//$filmid=$_GET['film_name'];
$show=$_GET['sh'];
$date=$_GET['dt'];
$showid=$_GET['showid'];
$amount=$_GET['amount'];
$seats1=$_GET['seats1'];
/*$seats=$_POST['anj1'];
$time=$_POST['time'];
//$theatreid=$_POST['theatreid'];
$filmid=$_POST['film_name'];
$show=$_POST['shows'];
$date=$_POST['date'];
$showid=$_POST['showid'];
$bookingdate=$_POST['bookingdate'];
print_r($seats);
foreach($seats as $val)
{
$seats1=$val.",".$seats1;
}
$seats1=trim($seats1,',');
$amo=count($seats);
$amount=$amo*50;*/



$qryu="select *from registration where Email='$Email'";
	$resultu=mysql_query($qryu);
	  while($rowu=mysql_fetch_array($resultu))
	  {
	  $userid=$rowu['regid'];
	   }
	   echo $userid;
$qry="insert into tickets(seats,amount,theatreid,showid,date,bookingdate,userid)values('$seats1','$amount',$theatreid,'$showid','$date',now(),'$userid')";
echo $qry;
mysql_query($qry) or die(mysql_error());
$qry2="select *from ecoupon where Couponid='$couponid'";
$result2=mysql_query($qry2);
while ($row2=mysql_fetch_array($result2))
{
 $balamount=$row2['Balanceamount'];
}
$balamount=$balamount-$amount;
$qry1="update ecoupon set Balanceamount='$balamount' where Couponid='$couponid'";
mysql_query($qry1) or die(mysql_error());
if(mysql_affected_rows()>0)
{
header("location:Ticket_Print1.php?bid=$bookingdate&showdate=$date&theatre=$theatre&seats=$seats1&amount=$amount&time=$time&no=$amo&fn=$filmid&sn=$show");
//header("location:seat_anjali.php");
}
else
{
header("location:seat_anjali.php");
}
?>
</body>
</html>
