<?php
//include("db.php");
//$new=$_POST['news'];

$target_path="uploaded/";
$target_path=$target_path.basename($_FILES['file2']['name']);
move_uploaded_file($_FILES['file2']['tmp_name'],$target_path);
$con=mysql_connect('localhost','root','');
if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
$qry="insert into gallery(PHOTO) values('$target_path')";
$res=mysql_query($qry) or die(mysql_error());
if(mysql_affected_rows()>0)
{
header("location:Add_gallery.php");
}
else
{
echo "Not inserted";
}
?>

