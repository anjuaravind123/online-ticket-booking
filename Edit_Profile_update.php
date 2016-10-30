<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$Email=$_SESSION['user'];
$con=mysql_connect('localhost','root','');
if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
 
	$qry="select *from registration where Email='$Email'";
	$result=mysql_query($qry);
	  while($row=mysql_fetch_array($result))
	  {
	  $userid=$row['regid'];
	   }
	   echo $userid;
//$id=$_POST['regid'];
 //$userid=$row['regid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$city=$_POST['city'];
$state=$_POST['state'];
$dist=$_POST['dist'];
$pin=$_POST['pin'];
$prof_occu=$_POST['prof_occu'];
$DATE=$_POST['DATE'];
$Gender=$_POST['Gender'];
$l_no=$_POST['l_no'];
$mob_no=$_POST['mob_no'];
$alt_mob=$_POST['alt_mob'];


$conn=mysql_connect("localhost","root","")or die("check your server connection.");
if(!$conn)
{
die("could not connect".mysql_error());
}
$db=mysql_select_db("theatremanagementsystem")or die(mysql_error());
	
$qry="update registration set firstname='$fname',lastname='$lname',email='$email',city='$city',state='$state',District='$dist',pincode='$pin',profession_occupation='$prof_occu',dateofbirth='$DATE',gender='$Gender',landnumber='$l_no',mobilenumber='$mob_no',alternatemobilenumber='$alt_mob' where regid='$userid'";
echo "$qry";
$result=mysql_query($qry) or die(mysql_error()); 
if(mysql_affected_rows()>0)
{
header("location:mainpage.php");
}
else
{
echo "Data are not updated";
}

?>
</body>
</html>
