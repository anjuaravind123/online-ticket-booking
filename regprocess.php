<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
//$retypepassword=$_POST're_passwor'];
$city=$_POST['city'];
$state=$_POST['state'];
$district=$_POST['dist'];
$pincode=$_POST['pin'];
$profession_occupation=$_POST['prof_occu'];
$day=$_POST['date'];
$mon=$_POST['month'];
$yr=$_POST['year'];
$dob="$yr-$mon-$day";
$gender=$_POST['Gender'];
//$landnumber=$_POST['l_no'];
$mobilenumber=$_POST['mob_no'];
//$alternatemobileno=$_POST['alt_mob'];
//$question=$_POST['question'];
//$answer=$_POST['Answer'];
//$bankname=$_POST['bankname'];
//$accountno=$_POST['accountno'];
//$creditcardno=$_POST['creditcardno'];
$con=mysql_connect("localhost","root","");
if(!$con )
{
die ("could not connect".mysql_error());
}
$db=mysql_select_db('theatremanagementsystem');
//$qry="insert into registration(firstname,lastname,email,password,city,state,District,pincode,profession_occupation,DateofBirth,gender,landnumber,mobilenumber,alternatemobilenumber,Question,Answer) values('$fname','$lname','$email','$password','$city','$state','$district','$pincode','$profession_occupation','$dob','$gender','$landnumber','$mobilenumber','$alternatemobileno','$question','$answer')";

$qry="insert into registration(firstname,lastname,email,password,city,state,District,pincode,profession_occupation,DateofBirth,gender,mobilenumber) values('$fname','$lname','$email','$password','$city','$state','$district','$pincode','$profession_occupation','$dob','$gender','$mobilenumber')";

//echo "$qry";
mysql_query($qry) or die(mysql_error());
$uid=mysql_insert_id();
//$qryb="insert into bankaccount(accountno,creditcardno,name,contactno,amount,userid) values ('$accountno','$creditcardno','$fname','$mobilenumber','20000','$uid')";
//mysql_query($qryb);
//$no=mysql_num_rows($result);
 //$_SESSION['user']=$FName;

if(mysql_affected_rows()>0)
{
$_SESSION['in']=1;
header("location:REGISTRATION.php");
}
else
{
$_SESSION['nin']=1;
//header("location:REGISTRATION.php");
}

?>
</body>
</html>
