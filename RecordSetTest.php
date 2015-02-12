<?php
$servername = "localhost";
$username = "sandbox1_carrot1";
$password = "VitaminA104%";
$dbname = "sandbox1_carrot1";
$ZipCode=$_GET["ZipCode"];
//echo $ZipCode;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$sql = "SELECT * FROM 'Main_Medical_Table'";
$sql = "SELECT * FROM `Main_Medical_Table` WHERE ZipCode=$ZipCode";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<table>";
	while($row = $result->fetch_assoc()) {
		echo "<tr> <td>" . $row["ZipCode"] . "</td><td>" . $row["Ailment_Name"] . "</td> <td>" . $row["Cost"]. "</td> </tr>";
	}	
	echo "</table>";
} else {
	echo "0 results";
} 
$conn->close();
?>