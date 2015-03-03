<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bill of Health</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">


  <!-- Montserrat Sans -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400, 700' rel='stylesheet' type='text/css'>        
  <!-- Lato Font -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,700' rel='stylesheet' type='text/css'>

  <!-- Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/respond.min.js"></script>
      <![endif]-->

    </head>

    <body class="blue">

      <div id="results" class="navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand scroll" href="index.html"><i class="fa fa-compass"></i><span>BILL OF HEALTH</span></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a class="scroll" href="index.html"></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>    
      
    </div><!-- /.container -->

    <!-- Search Section -->
   /div>

    <<div id="searchresults" class="section gray">
      <div class="container">

        <div class="content">
          <div class="text-center">
            <legend><p>Thank you!</p></legend>



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
$satisfaction=$_GET["rating"];
$tag=$_GET["tag"];

$con=mysqli_connect("localhost","sandbox1_carrot1","VitaminA104%","sandbox1_carrot1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="call sp_UpLoadMedicalProcedure('$name','$proceduredate/01/01','$tag','$facility','$facilitytype','$facilitycity','$facilitystate',$cost, $satisfaction);";
//echo $sql;

mysqli_query($con, $sql);


mysqli_close($con);



?>


</body>
</html>

