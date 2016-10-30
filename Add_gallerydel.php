<?php
$con=mysql_connect("localhost","root","");
 if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
$id=$_POST['nid'];

$qry="delete from gallery where GID='$id'"; 
echo $qry;
mysql_query($qry,$con)or die(mysql_error());
if(mysql_affected_rows()>0)
{
header("location:Add_gallery.php");
}
else
{
echo "Data are not deleted";
}
?>