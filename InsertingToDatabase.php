<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
SQL test


<?php

$facility=$_GET["Facility"];
//$facilityaddress=$_GET["FacilityAddress"];
$facilitycity=$_GET["FacilityCity"];
$facilitystate=$_GET["FacilityState"];
//$facilityzip=$_GET["FacilityZip"];
$facilitytype=$_GET["FacilityType"];
$name=$_GET["Diagnosis"];
$cost=$_GET["Cost"];
$proceduredate=$_GET["Date"];
$satisfaction=$_GET["Rating"];
$tag=$_GET["Tags"];


$con=mysqli_connect("localhost","sandbox1_carrot1","VitaminA104%","sandbox1_carrot1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


    $sql = "CALL Sp_UplLoadMedicalProcedure('$facility', $facilityAddress, $facilityCity, $facilityState, $facilityZip, 
    	$facilityType, $diagnosis, $cost, $date )";

    $result = $conn->query($sql);

    echo $sql;

    echo  $facility, $facilityAddress, $facilityCity, $facilityState, $facilityZip, 
    	$facilityType, $diagnosis, $cost, $date;

// Perform queries 
//mysqli_query($con,"SELECT * FROM Main_Medical_Table");



mysqli_close($con);

?>


</body>
</html>

