<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$Email=$_POST['Email'];
$security=$_POST['question'];
$answer=$_POST['Answer'];
$con=mysql_connect('localhost','root','');
if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
$sql="select * from registration  where Email='$Email' and Answer='$answer' and Question='$security'";

$res=mysql_query($sql);
$no=mysql_num_rows($res);
if($no>0)
{
while($row=mysql_fetch_array($res))
{
	$pass=$row['password'];
}
$_SESSION['pass']=$pass;
$pass=$_SESSION['pass'];
//echo $_SESSION['pass'];
header("location:forgetpassword.php");
}
else
{
$_SESSION['nouser']=1;
header("location:forgetpassword.php");
}
?>
</body>
</html>
