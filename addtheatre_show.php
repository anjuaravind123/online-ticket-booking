<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$day=$_POST['date'];
$mon=$_POST['month'];
$yr=$_POST['year'];
$dob="$yr-$mon-$day";

$day1=$_POST['date1'];
$mon1=$_POST['month1'];
$yr1=$_POST['year1'];
$enddate="$yr1-$mon1-$day1";
$theatrename=$_POST['tname'];
$shows=$_POST['shows'];
$showtime=$_POST['stime'];
$filmname=$_POST['filmname'];

$target_path="uploaded/";
$target_path=$target_path.basename($_FILES['file2']['name']);
move_uploaded_file($_FILES['file2']['tmp_name'],$target_path);

$Film_description=$_POST['Film_description'];

$conn=mysql_connect("localhost","root","")or die("check your server connection.");
if(!conn)
{
die("could not connect".mysql_error());
}
$db=mysql_select_db("theatremanagementsystem")or die(mysql_error()); 
//$id=$_POST['radioid']; 	
$qry="insert into Theatre_shows(Date,Theatre_name,Shows,showtime,Film_name,Photo,Film_Description,enddate)values('$dob','$theatrename','$shows','$showtime','$filmname','$target_path','$Film_description','$enddate')";
//echo "$qry";

$result=mysql_query($qry) or die(mysql_error()); 
$no=mysql_num_rows($result);
 //$_SESSION['user']=$FName;

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
