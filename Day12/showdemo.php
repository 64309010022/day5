<?php
$servername = "localhost";
$username = "it64309010022";
$password = "64309010022";
$dbname = "it64309010022";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * From demo";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - adress: " . $row["address"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>