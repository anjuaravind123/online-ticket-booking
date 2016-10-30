<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$Emailid=$_POST['Emailid'];
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];
$confirmpassword=$_POST['confirmpassword'];
$con=mysql_connect("localhost","root","") or die("cannot connect".mysql_error());
mysql_select_db("theatremanagementsystem",$con);

//$no=mysql_num_rows($result);
 //$_SESSION['user']=$FName;

$details="select * from registration where Email='$Emailid' and password='$oldpassword'";
echo $details;
$result=mysql_query($details) or die('query error'.mysql_error());
$no=mysql_num_rows($result);
//$row=mysql_fetch_row($result);
//$id=$row[2];
//echo $id;
if ($no>0 ){

$up="update registration set password='$confirmpassword' where Email='$Emailid'";
mysql_query($up) or die(mysql_error());
echo $up;
if(mysql_affected_rows()>0)
{
$_SESSION['in']=1;
echo $_SESSION['in'];
header("location:changepassword.php");
}
}
else
{
$_SESSION['nin']=1;
header("location:changepassword.php");
}
?>
</body>
</html>
