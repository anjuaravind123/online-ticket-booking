<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//session_start();
//include("dbconnect.php");
$uname=$_POST['name'];
$mob=$_POST['phn'];
$email=$_POST['eid'];
$queries=$_POST['query'];
$con=mysql_connect("localhost","root","");
if(!$con )
{
die ("could not connect".mysql_error());
}
$db=mysql_select_db('theatremanagementsystem');
$qry="insert into query(QUERY,NAME,EID,PNO)values('$queries','$uname','$email','$mob')";
mysql_query($qry) or die(mysql_error());
//$res=mysql_query($qry,$conn);
if(mysql_affected_rows()>0)
{
$_SESSION['con']=1;
header("location:contactus.php");
}
else
{
echo "Data are not inserted";
}
?>
</body>
</html>
