<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$fromDate = "28-01-2011";
$toDate = "01-3-2011";

$dateMonthYearArr = array();
$fromDateTS = strtotime($fromDate);
$toDateTS = strtotime($toDate);

for ($currentDateTS = $fromDateTS; $currentDateTS <= $toDateTS; $currentDateTS += (60 * 60 * 24)) {
// use date() and $currentDateTS to format the dates in between
$currentDateStr = date("Y-m-d",$currentDateTS);
$dateMonthYearArr[] = $currentDateStr;
//print $currentDateStr.”<br />”;
}

echo  "<pre>";
print_r($dateMonthYearArr);
echo "</pre>";
?>
</body>
</html>
