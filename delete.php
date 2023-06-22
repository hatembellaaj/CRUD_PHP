<?php
$servername = "127.0.0.1";
$username = "root";
$password = "csf";
$dbname = "stock";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM article where id=".$_REQUEST["id"];

if ($conn->query($sql) === TRUE) {
  echo "record deleted successfully";
  header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>