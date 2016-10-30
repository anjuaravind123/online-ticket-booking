<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

$a=$_POST['balance'];
$b=$_POST['Cash'];
$d=$_POST['a1'];
$c=$a-$b;
$conn=mysql_connect("localhost","root","")or die("check your server connection.");
	if(!$conn)
	{
	die("could not connect".mysql_error());
	}
	$db=mysql_select_db("theatremanagementsystem")or die(mysql_error());  	
	$qry="update account set IntialDeposit='$c' where AccountNo='$d'";
	echo $qry;
	//$result=mysql_query($qry);
	 // while($row=mysql_fetch_array($result))
	  //{
	  $result=mysql_query($qry) or die(mysql_error()); 
//$no=mysql_num_rows($result);

if(mysql_affected_rows()>0)
{
header("location:paymentsuccessfully.php?net=$c");
}
else
{
header("location:paymentsuccessfully.php?net=$c");
}
	 
	 
?>
</body>
</html>
