<?php
    $con = mysqli_connect("127.0.0.1:3307", "root", "", "chrono");
    $track = $_POST["track"];
    $track = $con->real_escape_string($track);
   


if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM chrono WHERE track='".$track."' ORDER BY 'ASC' LIMIT 3";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "::".$row["driver"]."::".$row["chrono"];
  }
} else {
  echo "N/A";
}
$con->close();
    
  
?>