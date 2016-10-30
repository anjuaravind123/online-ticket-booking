<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php session_start();
 $name=$_POST['t1'];
 $pass=$_POST['t2'];

$con=mysql_connect('localhost','root','');
if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
$result=mysql_query("select * from registration where Email='$name' and password='$pass'");
$no=mysql_num_rows($result);
if ($no>0)
{
$_SESSION['user']=$name;
header('location:mainpage.php');
}
else
{
$_SESSION['in']=1;
header('location:login.php');
}

?>
</body>
</html>
