<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$id=$_POST['t1'];
$name=$_POST['t2'];
$show=$_POST['t3'];
$showtime=$_POST['t4'];
$filmname=$_POST['t5'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$Film_description=$_POST['Film_description'];
//$target_path=$_POST['file2'];
$conn=mysql_connect("localhost","root","")or die("check your server connection.");
if(!conn)
{
die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
$qry="update theatre_shows SET showid='$id',Theatre_name='$name',Shows='$show',showtime='$showtime',Film_name='$filmname',Date='$startdate',enddate='$enddate',Film_Description='$Film_description' where showid='$id'"; 
//echo "$qry";

$result=mysql_query($qry) or die(mysql_error()); 
$no=mysql_num_rows($result);
if(mysql_affected_rows()>0)
{
header("location:Theatre_show.php");
}
else
{
header("location:Theatre_show.php");
}
?>
</body>
</html>
