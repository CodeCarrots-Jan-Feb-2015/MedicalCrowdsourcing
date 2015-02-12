<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
SQL test


<?php

$ailment=$_GET["ailment"];
$Part_of_Body=$_GET["body_part"];
$zipcode=$_GET["zipcode"];


$con=mysqli_connect("localhost","sandbox1_carrot1","VitaminA104%","sandbox1_carrot1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
//mysqli_query($con,"SELECT * FROM Main_Medical_Table");
mysqli_query($con,"insert into Main_Medical_Table (Ailment_Name, Part_of_Body, Cost, Zipcode) values ('".$ailment."', '".$Part_of_Body."', '500', '".$zipcode."')");


mysqli_close($con);

?>


</body>
</html>