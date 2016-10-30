<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysql_connect("localhost","root","");
   if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
$sql = "SELECT *from gallery";
$query = $this->db->query($sql);

foreach($query->result() as $row)
{
    echo $row->PHOTO;
}

echo "<table><tr>";
$count = 1;
foreach($query->result() as $row)
{
    if($count % 5 == 0)
    {
        echo "</tr><tr>";
    }

    echo "<td>" . $row->PHOTO. "</td>";
    $count++;
}
?>
</body>
</html>
