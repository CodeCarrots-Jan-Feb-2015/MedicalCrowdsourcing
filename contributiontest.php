<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
SQL test Luzma


<?php

$facility=$_GET["facility"];
//$facilityaddress=$_GET["facilityaddress"];
$facilitycity=$_GET["facilitycity"];
$facilitystate=$_GET["facilitystate"];
//$facilityzip=$_GET["facilityzip"];
$facilitytype=$_GET["facilitytype"];
$name=$_GET["name"];
$cost=$_GET["cost"];
$proceduredate=$_GET["proceduredate"];
$satisfaction=$_GET["satisfaction"];
$tag=$_GET["tag"];

//echo $facility;

$con=mysqli_connect("localhost","sandbox1_carrot1","VitaminA104%","sandbox1_carrot1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="call sp_UpLoadMedicalProcedure ('$name','2015/01/23','','Overlake','hospital','123 main','Bellevue','WA','98108',650)";

// Perform queries 
//mysqli_query($con,"SELECT * FROM Main_Medical_Table");
mysqli_query($con,$sql);


mysqli_close($con);
/*
$con=mysqli_connect("localhost","sandbox1_carrot1","VitaminA104%","sandbox1_carrot1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="call sp_UpLoadMedicalProcedure ('broken arm','2015/01/23','','Overlake','hospital','123 main','Bellevue','WA','98108',650)";

//$sql = call sp_UpLoadMedicalProcedure ('broken ankle','2015/01/23','','Overlake','hospital','123 main','Bellevue','WA','98108',650)
 //   $sql = "CALL Sp_UpLoadMedicalProcedure('$facility', '$facilitycity', '$facilitystate', 
 //   	'$facilitytype', '$name', '$cost', '$proceduredate' )";
     
     echo $sql;

    $result = $conn->query($sql);

   

    echo  $facility.$facilitycity.$facilitystate;
    echo $facilitytype.$name.$cost.$proceduredate.$tag.$satisfaction;

*/



mysqli_close($con);

?>


</body>
</html>

