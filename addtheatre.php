<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

$theatrename=$_POST['t1'];
$theatredetails=$_POST['t2'];
//$target_path="uploads/";
//$target_path=$target_path.basename($_FILES['uploadedfile']['name']);
//move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path);

$conn=mysql_connect("localhost","root","")or die("check your server connection.");
if(!conn)
{
die("could not connect".mysql_error());
}
$db=mysql_select_db("theatremanagementsystem")or die(mysql_error()); 
//$id=$_POST['radioid']; 	
$qry="insert into theatre(theatrename,theatredetails)values('$theatrename','$theatredetails')";
//echo "$qry";

$result=mysql_query($qry) or die(mysql_error()); 
$no=mysql_num_rows($result);
 //$_SESSION['user']=$FName;

if(mysql_affected_rows()>0)
{
header("location:Theatre.php");
}
else
{
header("location:Theatre.php");
}

?>
</body>
</html>
