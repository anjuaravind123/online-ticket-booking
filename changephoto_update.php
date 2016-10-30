<?php
$target_path="uploaded/";
$target_path=$target_path.basename($_FILES['file2']['name']);
move_uploaded_file($_FILES['file2']['tmp_name'],$target_path);
$id=$_POST['t1'];
$conn=mysql_connect("localhost","root","")or die("check your server connection.");
if(!$conn)
{
die("could not connect".mysql_error());
}
$db=mysql_select_db("theatremanagementsystem");  
$qry="update Theatre_shows set Photo='$target_path' where showid='$id'";
echo "$qry";

$result=mysql_query($qry) or die(mysql_error()); 
$no=mysql_num_rows($result);
 //$_SESSION['user']=$FName;

if(mysql_affected_rows()>0)
{
header("location:Edittheatre_show.php?editid=$id");
}
else
{
header("location:Edittheatre_show.php?editid=$id");
}


?>