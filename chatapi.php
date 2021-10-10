<?php
$servername = "localhost";
$username = "root";
$password = "";
 
// Connection
$conn = new mysqli($servername,
           $username, $password);
 
// For checking if connection is
// successful or not
if ($conn->connect_error) {
  die("Connection failed: "
      . $conn->connect_error);
}
echo "Connected successfully";
$sql="select * from MESSAGES";
$result=$conn->query($sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "id: " . $row["userid"]. " - Name: " . $row["message"]. " " . $row["time"]. "<br>";
    }
  } 

?>