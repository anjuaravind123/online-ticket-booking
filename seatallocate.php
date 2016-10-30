<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$theatre=$_POST['theatre'];
$film_name=$_POST['film_name'];
$shows=$_POST['shows'];
$day=$_POST['date'];
$dob=$day;
//$mon=$_POST['month'];
//$yr=$_POST['year'];
//$dob="$yr-$mon-$day";
$stime=$_POST['stime'];
echo $theatre;
echo $film_name;
echo $shows;
$showid=$_POST['showid'];
if ($theatre=='ANJALI')
{
header("location:seat_anjali.php?fn=$film_name&sh=$shows&dt=$dob&tm=$stime&showid=$showid");
}
if ($theatre=='ATHIRA')
{
header("location:seat_athira.php?fn=$film_name&sh=$shows&dt=$dob&tm=$stime&showid=$showid");
}
if ($theatre=='ASWATHY')
{
header("location:seat_aswathy.php?fn=$film_name&sh=$shows&dt=$dob&tm=$stime&showid=$showid");
}
if ($theatre=='ATHULYA')
{
header("location:seat_athulya.php?fn=$film_name&sh=$shows&dt=$dob&tm=$stime&showid=$showid");
}
?>
</body>
</html>
