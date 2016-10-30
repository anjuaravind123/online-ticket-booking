<?php
session_start();
$conn=mysql_connect("localhost","root","")or die("check your server connection.");
	if(!$conn)
	{
	die("could not connect".mysql_error());
	}
	$db=mysql_select_db("theatremanagementsystem")or die(mysql_error());
	$amount=$_POST['coupamount'];
	$couponlimit=$_POST['couponlimit'];
	$couponno=$_POST['couponno'];
	$creditcard=$_POST['creditcardno'];
	$userid=$_POST['userid'];
	$pass=$_POST['pass'];
	$expirymon=$_POST['expirymon'];
	$expiryyear=$_POST['expiryyear'];
	$coupamount=$_POST['coupamount'];
	$balamount=$_POST['balamount'];
	$valq="select *from bankaccount where accountno='$pass' and creditcardno='$creditcard' and userid='$userid'";
	$resultq=mysql_query($valq);
	
	if (mysql_num_rows($resultq) >0)
	{
	while($rowq=mysql_fetch_array($resultq))
	{
	$bankamount=$rowq['amount'];
	}
	//echo array_sum($coupamount);
	//$bankamount=$bankamount-array_sum($coupamount);
	$bankamount=$bankamount-$amount;
	$qryb="update bankaccount set amount='$bankamount' where creditcardno='$creditcard'";
	mysql_query($qryb);
	echo $qryb;
	
	
	
	
	$valq1="select *from ecoupon where Couponid='$couponno'";
	$resultq1=mysql_query($valq1);
	while($rowq1=mysql_fetch_array($resultq1))
	{
	$cdamount=$rowq1['Balanceamount'];
	}
	
	
	
	$amount1=$cdamount+$amount;
	
	$qryb1="update ecoupon set Balanceamount='$amount1' where Couponid='$couponno'";
	mysql_query($qryb1);
	/*foreach ($coupamount as $camo){
	$qry="insert into ecoupon(Amount,Balanceamount,Userid) values ($camo,$camo,'$userid')";
	echo $qry;
	mysql_query($qry);
		$coupid=mysql_insert_id();
		$coupid1='c000'.$coupid;
		$qry1="update ecoupon set Couponid='$coupid1' where id='$coupid'";
		mysql_query($qry1);
		}*/
	header("location:ECouponrechargemessage.php?coupid=$coupid1&amount=$amount");
	}else
	{
	$_SESSION['inv']=1;
	header("location:Payment_recharge.php?cid=$couponno&amo=$couponlimit&bamou=$balamount");
	}
	
	?>

