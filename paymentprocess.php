<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$conn=mysql_connect("localhost","root","")or die("check your server connection.");
	if(!$conn)
	{
	die("could not connect".mysql_error());
	}
	$db=mysql_select_db("theatremanagementsystem")or die(mysql_error());
	$amount=$_POST['coupamount'];
	$creditcard=$_POST['creditcardno'];
	$userid=$_POST['userid'];
	$pass=$_POST['pass'];
	$expirymon=$_POST['expirymon'];
	$expiryyear=$_POST['expiryyear'];
	$coupamount=$_POST['coupamount'];
	$valq="select *from bankaccount where accountno='$pass' and creditcardno='$creditcard' and 	userid='$userid'";
	$resultq=mysql_query($valq);
	
	if (mysql_num_rows($resultq) >0)
	{
	while($rowq=mysql_fetch_array($resultq))
	{
	$bankamount=$rowq['amount'];
	}
	echo array_sum($coupamount);
	$bankamount=$bankamount-array_sum($coupamount);
	$qryb="update bankaccount set amount='$bankamount' where creditcardno='$creditcard'";
	mysql_query($qryb);
	echo $qryb;
	foreach ($coupamount as $camo){
	$qry="insert into ecoupon(Amount,Balanceamount,Userid) values ($camo,$camo,'$userid')";
	echo $qry;
	mysql_query($qry);
		$coupid=mysql_insert_id();
		$coupid1='c000'.$coupid;
		$qry1="update ecoupon set Couponid='$coupid1' where id='$coupid'";
		mysql_query($qry1);
		}
	header("location:ECouponmessage.php?coupid=$coupid1&amount=$amount");
	}else
	{
	header("location:Payment.php");
	}
	
	?>

</body>
</html>
