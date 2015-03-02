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
    <div id="searchresults" class="section gray">
      <div class="container">

        <div class="content">
          <div class="text-center">
            <h2 class="title">Search Results</h2>  
<?php /*

$procedurename=$_GET["procedurename"];
$location=$_GET["location"];


$con=mysqli_connect("localhost","sandbox1_carrot1","VitaminA104%","sandbox1_carrot1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
//mysqli_query($con,"SELECT * FROM Main_Medical_Table");
mysqli_query($con,"insert into Main_Medical_Table (Ailment_Name, Part_of_Body, Cost, ZipCode) 
  values ('".$procedurename."', '".$location."', '500', '".$ZipCode."')");


mysqli_close($con); */

?> 

<?php /*
$servername = "localhost";
$username = "sandbox1_carrot1";
$password = "VitaminA104%";
$dbname = "sandbox1_carrot1";
$Zipcode=$_GET["Zipcode"];
$Ailment_Name=$_GET["Ailment_Name"];
echo $Zipcode;
// Check Connection 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Main_Medical_Table WHERE Zipcode=$Zipcode";
echo ($sql);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  echo "<p style='description'>$Ailment_Name , $Zipcode</p>"
  echo "<table>";
  while($row = $result->fetch_assoc()) {
    echo "<tr> <td>" . $row["Zipcode"] . "</td> </tr>";
  } 

  echo "</table>";
 
} else {
  echo "0 results";  
} 
$conn->close(); 
*/
?>  

</div>
<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12"></div>
  <table style="width:100%">
    <tr>
      <th>Medical Procedure</th>
      <th>Facility</th>
      <th>City</th>
      <th>State</th>
      <th>Avg Medicare Payments</th>
      <th># of Patients</th>                
      <th>Satisfaction Rating</th>
    </tr>
    <?php
    $servername = "localhost";
    $username = "sandbox1_carrot1";
    $password = "VitaminA104%";
    $dbname = "sandbox1_carrot1";
    $Location=$_GET["Location"];
    $Diagnosis=$_GET["Diagnosis"];
//echo $ZipCode;
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
//$sql = "SELECT * FROM 'Main_Medical_Table'";
    $sql = "CALL Sp_GetCost('$Diagnosis', '$Location')";

//SELECT * FROM `Main_Medical_Table` WHERE ZipCode=$ZipCode";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
    // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr>" 
        . "<td>" . $row["ProcedureName"] . "</td>"
        . "<td>" . $row["MedicalFacility"] . "</td>"
        . "<td>" . $row["City"] . "</td>" 
        . "<td>" . $row["State"] . "</td>"
        . "<td align='center'>" . $row["AverageTotalPayments"] . "</td>"      
        . "<td>" . $row["Instances"] . "</td>"
        . "<td>" . $row["Rating"] . "</td>"        
        . "<td>" . "</td>"
        . "</tr>";
      } 
      echo "</table>";
    } else {
      echo "</table>";
      echo "0 results";
    } 
    $conn->close();
    ?>



  </div>
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
    </div>  

    <div class="col-md-6 col-sm-6 col-xs-12">               
    </div>

  </div>
</div>


</div><!-- /.content -->
</div>
</div>
</div><!-- /.container -->

<div id="footer" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <p>&copy; 2015, Made by Bill Of Health</p>   
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="">
          <p class="social-media">
            <a href="#" data-toggle="tooltip" title="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" data-toggle="tooltip" title="facebook"><i class="fa fa-facebook"></i></a>

          </p>
        </div>
      </div>
    </div>  
  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/AnimOnScroll.js"></script>
    <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAe64UN6rxbgDo8hzspyTofIGXBiNcE_U&sensor=false">
    </script>
    <script src="js/init.js"></script>

  </body>
  </html>
