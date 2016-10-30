<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Booking_date=$_POST['date'];
echo $Booking_date;
$day=$_POST['date'];
$mon=$_POST['month'];
$yr=$_POST['year'];
$dob="$yr-$mon-$day";
echo $dob;
$Theatre=$_POST['theatre'];
echo $Theatre;
$Show=$_POST['shows'];
echo $Show;
$Show_Time=$_POST['stime2'];
$showid=$_POST['showid'];
echo $Show_Time;
$con=mysql_connect("localhost","root","");
   if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
    //$qry="select *from Theatre_shows";
    //$res=mysql_query($qry,$con);
	//if(mysql_affected_rows()>0)
//{
header("location:Ticket_Booking.php?bd=$Booking_date&dt=$dob&th=$Theatre&sh=$Show&st=$Show_Time");
//}

?>
</body>
</html>
