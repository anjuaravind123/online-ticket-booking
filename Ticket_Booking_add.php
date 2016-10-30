<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Date=$_POST['date'];
$day=$_POST['date'];
$mon=$_POST['month'];
$yr=$_POST['year'];
$dob="$yr-$mon-$day";
$theatrename=$_POST['theatre'];
$film_name=$_POST['film_name'];
$shows=$_POST['shows'];
$nooftickets=$_POST['nooftickets'];
$availabletickets=$_POST['availabletickets'];


//$Film_description=$_POST['Film_description'];

$conn=mysql_connect("localhost","root","")or die("check your server connection.");
if(!conn)
{
die("could not connect".mysql_error());
}
$db=mysql_select_db("theatremanagementsystem")or die(mysql_error()); 
//$id=$_POST['radioid']; 	
$qry="insert into ticket_booking(Booking_date,Date,Theatre_name,Film_name,Shows,No_tickets,availabletickets)values('$Date','$dob','$theatrename','$film_name','$shows','$nooftickets','$availabletickets')";
//echo "$qry";

$result=mysql_query($qry) or die(mysql_error()); 
$no=mysql_num_rows($result);
 //$_SESSION['user']=$FName;

if(mysql_affected_rows()>0)
{
header("location:Ticket_Booking.php");
}
else
{
header("location:Ticket_Booking.php");
}

?>
</body>
</html>
