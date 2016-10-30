<?php
session_start();
$Email=$_SESSION['user'];
$con=mysql_connect("localhost","root","");
if(!$con )
{
die ("could not connect".mysql_error());
}
$db=mysql_select_db('theatremanagementsystem');
	$qrye="select *from registration where Email='$Email'";
	$resulte=mysql_query($qrye);
	  while($rowe=mysql_fetch_array($resulte))
	  {
	  $userid=$rowe['regid'];
	   }
	   echo $userid;
$filmid=$_GET['film_name'];
$time=$_GET['time'];
$theatre=$_GET['theatre'];
//if ($theatre=="ANJALI")
//{
//$theatreid=1;
//}
$qryt="select *from theatre where theatrename='$theatre'";
	$resultt=mysql_query($qryt);
	  while($rowt=mysql_fetch_array($resultt))
	  {
	  $theatreid=$rowt['theatreid'];
	   }

//$theatreid=$_GET['theatreid'];
//$filmid=$_GET['film_name'];
$creditcard=$_GET['creditcardno'];
	$userid=$_GET['userid'];
	$pass=$_GET['pass'];
	$expirymon=$_GET['expirymon'];
	$expiryyear=$_GET['expiryyear'];
	$samount=$_GET['amount'];
$show=$_GET['shows'];
$date=$_GET['date'];
$showid=$_GET['showid'];
$amount=$_GET['amount'];
$seats1=$_GET['seats'];


$valq="select *from bankaccount where accountno='$pass' and creditcardno='$creditcard' and userid='$userid'";
	$resultq=mysql_query($valq);
	
	echo $valq;
	if (mysql_num_rows($resultq) >0)
	{
	while($rowq=mysql_fetch_array($resultq))
	{
	$bankamount=$rowq['amount'];
	}
	//echo array_sum($coupamount);
	$bankamount=$bankamount-$samount;
	$qryb="update bankaccount set amount='$bankamount' where creditcardno='$creditcard'";
	mysql_query($qryb);
	echo $qryb;
	
	
$qry="insert into tickets(seats,amount,theatreid,showid,date,bookingdate,userid)values('$seats1','$amount',$theatreid,'$showid','$date',now(),'$userid')";
echo $qry;
mysql_query($qry) or die(mysql_error());
	/*foreach ($coupamount as $camo){
	$qry="insert into ecoupon(Amount,Balanceamount,Userid) values ($camo,$camo,'$userid')";
	echo $qry;
	mysql_query($qry);
		$coupid=mysql_insert_id();
		$coupid1='c000'.$coupid;
		$qry1="update ecoupon set Couponid='$coupid1' where id='$coupid'";
		mysql_query($qry1);
		}
	header("location:ECouponmessage.php?coupid=$coupid1&amount=$amount");*/
echo "llll";	
	
	
	if(mysql_affected_rows()>0)
{
header("location:Ticket_Print1.php?bid=$bookingdate&showdate=$date&theatre=$theatre&seats=$seats1&amount=$amount&time=$time&no=$amo&fn=$filmid&sn=$show");

}
else
{
header("location:Ticket_Print1.php");
}
}	
else
{
$_SESSION['inv']=1;
header("location:Payment_ticket_creditcard.php?date=$date&theatre=$theatre&seats=$seats1&amount=$amount&time=$time&no=$amo&showid=$showid&film_name=$filmid&shows=$show&userid=$userid");
}
	?>

		
		
		
		
		
		

